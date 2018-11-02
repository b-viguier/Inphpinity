<?php

namespace bviguier\Inphpinity\Domain\Engine;

use bviguier\Inphpinity\Domain\Geometry\Point;
use bviguier\Inphpinity\Domain\Geometry\Rect;
use bviguier\Inphpinity\Domain\Pattern\NamedConstructor;

class Grid implements Drawable
{
    use NamedConstructor;

    /**
     * @var \SplFixedArray[\SplFixedArray[?Block]]
     */
    private $blocks;

    private $blockSize = 0;

    public static function create(int $width, int $height, int $blockSize): self
    {
        $grid = new self();
        $grid->blockSize = $blockSize;
        $grid->blocks = new \SplFixedArray($height);
        for ($row = 0; $row < $height; ++$row) {
            $grid->blocks[$row] = new \SplFixedArray($height);
        }

        return $grid;
    }

    public function setBlock(Point $position, Block $block): self
    {
        $this->blocks[$position->x()][$position->y()] = $block;

        return $this;
    }

    public function draw(Rect $destination, DrawingContext $context)
    {
        $colStart = (int)floor($destination->left() / $this->blockSize);
        $colEnd = (int)ceil($destination->right() / $this->blockSize);
        $colEnd = min($colEnd, $this->blocks->getSize());

        $rowStart = (int)floor($destination->top() / $this->blockSize);
        $rowEnd = (int)floor($destination->bottom() / $this->blockSize);
        $rowEnd = min($rowEnd, $this->blocks->getSize());

        for ($row = $rowStart; $row < $rowEnd; ++$row) {
            for ($col = $colStart; $col < $colEnd; ++$col) {
                if ($this->blocks[$row][$col] === null) {
                    continue;
                }
                $this->blocks[$row][$col]->drawable()->draw(
                    Rect::createFromOriginAndSize(
                        new Point($col * $this->blockSize, $row * $this->blockSize),
                        $this->blockSize,
                        $this->blockSize
                    ),
                    $context
                );
            }
        }
    }
}
