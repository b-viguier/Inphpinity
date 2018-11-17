<?php

namespace Inphpinity\Domain\Engine;

use Inphpinity\Domain\Geometry\Point;
use Inphpinity\Domain\Geometry\Rect;
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
        for ($row = 0; $row < $height; ++$row) {
            $grid->blocks[$row] = new \SplFixedArray($width);
        }
        $grid->area = Rect::createFromOriginAndSize(
            new Point(0, 0),
            $width * $blockSize,
            $height * $blockSize
        );

        return $grid;
    }

    public function area(): Rect
    {
        return $this->area;
    }

    public function setBlock(Point $position, Block $block): self
    {
        $this->blocks[$position->y()][$position->x()] = $block;

        return $this;
    }

    public function draw(Camera $camera, DrawingContext $context)
    {
        $clippingArea = $camera->clippingArea();
        $colStart = (int)floor($clippingArea->left() / $this->blockSize);
        $colStart = max(0, $colStart);
        $colEnd = (int)ceil($clippingArea->right() / $this->blockSize);
        $colEnd = min($colEnd, $this->blocks[0]->getSize());

        $rowStart = (int)floor($clippingArea->top() / $this->blockSize);
        $rowStart = max(0, $rowStart);
        $rowEnd = (int)ceil($clippingArea->bottom() / $this->blockSize);
        $rowEnd = min($rowEnd, $this->blocks->getSize());

        $xOffset = -$clippingArea->left();
        $yOffset = -$clippingArea->top();
        for ($row = $rowStart; $row < $rowEnd; ++$row) {
            for ($col = $colStart; $col < $colEnd; ++$col) {
                if ($this->blocks[$row][$col] === null) {
                    continue;
                }
                $this->blocks[$row][$col]->drawable()->draw(
                    Rect::createFromOriginAndSize(
                        new Point($xOffset + $col * $this->blockSize, $yOffset + $row * $this->blockSize),
                        $this->blockSize,
                        $this->blockSize
                    ),
                    $context
                );
            }
        }
    }
}
