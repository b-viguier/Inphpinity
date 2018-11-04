<?php

namespace Inphpinity\Domain\Engine;

use Inphpinity\Domain\Geometry\Point;
use Inphpinity\Domain\Geometry\Rect;
use Inphpinity\Domain\Pattern\NamedConstructor;

class Grid implements Drawable
{
    use NamedConstructor;

    /**
     * @var \SplFixedArray[\SplFixedArray[?Block]]
     */
    private $blocks;

    /**
     * @var int
     */
    private $blockSize = 0;

    public static function create(int $width, int $height, int $blockSize): self
    {
        $grid = new self();
        $grid->blockSize = $blockSize;
        $grid->blocks = new \SplFixedArray($height);
        for ($row = 0; $row < $height; ++$row) {
            $grid->blocks[$row] = new \SplFixedArray($width);
        }

        return $grid;
    }

    public function setBlock(Point $position, Block $block): self
    {
        $this->blocks[$position->y()][$position->x()] = $block;

        return $this;
    }

    public function draw(Rect $source, Rect $destination, DrawingContext $context)
    {
        $colStart = (int)floor($source->left() / $this->blockSize);
        $colStart = max(0, $colStart);
        $colEnd = (int)ceil($source->right() / $this->blockSize);
        $colEnd = min($colEnd, $this->blocks[0]->getSize());

        $rowStart = (int)floor($source->top() / $this->blockSize);
        $rowStart = max(0, $rowStart);
        $rowEnd = (int)ceil($source->bottom() / $this->blockSize);
        $rowEnd = min($rowEnd, $this->blocks->getSize());

        $xOffset = -$source->left();
        $yOffset = -$source->top();
        for ($row = $rowStart; $row < $rowEnd; ++$row) {
            for ($col = $colStart; $col < $colEnd; ++$col) {
                if ($this->blocks[$row][$col] === null) {
                    continue;
                }
                $this->blocks[$row][$col]->drawable()->draw(
                    $source,
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
