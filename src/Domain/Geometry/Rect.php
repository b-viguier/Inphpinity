<?php

namespace bviguier\Inphpinity\Domain\Geometry;

use bviguier\Inphpinity\Domain\Pattern\NamedConstructor;

class Rect
{
    use NamedConstructor;

    /**
     * @var int
     */
    private $left;

    /**
     * @var int
     */
    private $top;

    /**
     * @var int
     */
    private $right;

    /**
     * @var int
     */
    private $bottom;

    public static function createFromPoints(Point $p1, Point $p2): self
    {
        $rect = new self();
        [$rect->left, $rect->right] = $p1->x() < $p2->x() ? [$p1->x(), $p2->x()] : [$p2->x(), $p1->x()];
        [$rect->top, $rect->bottom] = $p1->y() < $p2->y() ? [$p1->y(), $p2->y()] : [$p2->y(), $p1->y()];

        return $rect;
    }

    public static function createFromOriginAndSize(Point $origin, int $width, int $height): self
    {
        $rect = new self();
        $rect->right = ($rect->left = $origin->x()) + $width;
        $rect->bottom = ($rect->top = $origin->y()) + $height;

        return $rect;
    }

    public function left(): int
    {
        return $this->left;
    }

    public function right(): int
    {
        return $this->right;
    }

    public function bottom(): int
    {
        return $this->bottom;
    }

    public function top(): int
    {
        return $this->top;
    }

    public function width(): int
    {
        return $this->right - $this->left;
    }

    public function height(): int
    {
        return $this->bottom - $this->top;
    }

    public function contains(Point $point): bool
    {
        $x = $point->x();
        $y = $point->y();

        return $this->left <= $x
            && $this->top <= $y
            && $x <= $this->right
            && $y <= $this->bottom;
    }
}
