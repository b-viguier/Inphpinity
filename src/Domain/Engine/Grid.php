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
        $grid->blocks = new \SplFixedArray($width);
        for ($x = 0; $x < $grid->blocks->getSize(); ++$x) {
            $grid->blocks[$x] = new \SplFixedArray($height);
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
        $xFrom = (int)floor($destination->left() / $this->blockSize);
        $xTo = (int)ceil($destination->right() / $this->blockSize);
        $xTo = min($xTo, $this->blocks->getSize());

        $yFrom = (int)floor($destination->bottom() / $this->blockSize);
        $yTo = (int)floor($destination->top() / $this->blockSize);
        $yTo = min($yTo, $this->blocks->getSize());

        for ($x = $xFrom; $x < $xTo; ++$x) {
            for ($y = $yFrom; $y < $yTo; ++$y) {
                if ($this->blocks[$x][$y] === null) {
                    continue;
                }
                $this->blocks[$x][$y]->drawable()->draw(
                    Rect::createFromPoints(
                        new Point($x * $this->blockSize, $y * $this->blockSize),
                        new Point(($x + 1) * $this->blockSize, ($y + 1) * $this->blockSize)
                    ),
                    $context
                );
            }
        }
    }
}
