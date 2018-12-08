<?php

namespace Inphpinity\Domain\Engine;

use Inphpinity\Domain\Geometry\Point;
use Inphpinity\Domain\Geometry\Rect;
use Inphpinity\Domain\Geometry\Vec;
use Inphpinity\Domain\Pattern\NamedConstructor;

class Grid
{
    use NamedConstructor;

    /** @var \SplFixedArray[\SplFixedArray[?Block]] */
    private $blocks;

    /** @var int */
    private $blockSize = 0;

    /** @var Rect */
    private $area;

    public static function create(int $width, int $height, int $blockSize): self
    {
        $grid = new self();
        $grid->blockSize = $blockSize;
        $grid->blocks = new \SplFixedArray($height);
        for ($row = 0; $row < $height; $row++) {
            $grid->blocks[$row] = new \SplFixedArray($width);
        }
        $grid->area = Rect::createFromOriginAndSize(
            Point::origin(),
            $width * $blockSize,
            $height * $blockSize
        );

        return $grid;
    }

    public function area(): Rect
    {
        return $this->area;
    }

    public function setBlock(int $row, int $col, Block $block): self
    {
        $this->blocks[$row][$col] = $block;

        return $this;
    }

    public function draw(Camera $camera, DrawingContext $context)
    {
        foreach ($this->intersectingBlocks($camera->clippingArea()) as [$row, $col]) {
            $this->blocks[$row][$col]->drawable()->draw(
                $camera->toViewportRect($this->blockArea($row, $col)),
                $context
            );
        }
    }

    public function closestIntersectedBlockArea(Rect $boundingBox): ?Rect
    {
        $bbCenter = $boundingBox->center();
        $minSquareDist = INF;
        $selectedRow = $selectedCol = -1;
        foreach ($this->intersectingBlocks($boundingBox) as [$row, $col]) {
            $squareDist = Vec::fromPoints(
                new Point(($col + 0.5) * $this->blockSize, ($row + 0.5) * $this->blockSize),
                $bbCenter
            )->squareNorm();
            if ($squareDist < $minSquareDist) {
                $minSquareDist = $squareDist;
                $selectedRow = $row;
                $selectedCol = $col;
            }
        }

        return $selectedCol < 0 ? null : $this->blockArea($selectedRow, $selectedCol);
    }

    private function intersectingBlocks(Rect $area): \Generator
    {
        $colStart = (int) floor($area->left() / $this->blockSize);
        $colStart = max(0, $colStart);
        $colEnd = (int) ceil($area->right() / $this->blockSize);
        $colEnd = min($colEnd, $this->blocks[0]->getSize());

        $rowStart = (int) floor($area->top() / $this->blockSize);
        $rowStart = max(0, $rowStart);
        $rowEnd = (int) ceil($area->bottom() / $this->blockSize);
        $rowEnd = min($rowEnd, $this->blocks->getSize());

        for ($row = $rowStart; $row < $rowEnd; $row++) {
            for ($col = $colStart; $col < $colEnd; $col++) {
                if ($this->blocks[$row][$col] === null) {
                    continue;
                }

                yield [$row, $col];
            }
        }
    }

    private function blockArea(int $row, int $col): Rect
    {
        return Rect::createFromOriginAndSize(
            new Point($col * $this->blockSize, $row * $this->blockSize),
            $this->blockSize,
            $this->blockSize
        );
    }
}
