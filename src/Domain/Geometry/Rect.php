<?php

namespace Inphpinity\Domain\Geometry;

use Inphpinity\Domain\Pattern\NamedConstructor;

class Rect
{
    use NamedConstructor;

    /**
     * @var float
     */
    private $left;

    /**
     * @var float
     */
    private $top;

    /**
     * @var float
     */
    private $right;

    /**
     * @var float
     */
    private $bottom;

    public static function createFromPoints(Point $p1, Point $p2): self
    {
        $rect = new self();
        [$rect->left, $rect->right] = $p1->x() < $p2->x() ? [$p1->x(), $p2->x()] : [$p2->x(), $p1->x()];
        [$rect->top, $rect->bottom] = $p1->y() < $p2->y() ? [$p1->y(), $p2->y()] : [$p2->y(), $p1->y()];

        return $rect;
    }

    public static function createFromOriginAndSize(Point $origin, float $width, float $height): self
    {
        $rect = new self();
        $rect->right = ($rect->left = $origin->x()) + $width;
        $rect->bottom = ($rect->top = $origin->y()) + $height;

        return $rect;
    }

    public function topLeft(): Point
    {
        return new Point($this->left, $this->top);
    }

    public function bottomRight(): Point
    {
        return new Point($this->right, $this->bottom);
    }

    public function left(): float
    {
        return $this->left;
    }

    public function right(): float
    {
        return $this->right;
    }

    public function bottom(): float
    {
        return $this->bottom;
    }

    public function top(): float
    {
        return $this->top;
    }

    public function width(): float
    {
        return $this->right - $this->left;
    }

    public function height(): float
    {
        return $this->bottom - $this->top;
    }

    public function center(): Point
    {
        return new Point(
            ($this->left + $this->right) / 2,
            ($this->top + $this->bottom) / 2
        );
    }

    public function collideWith(Rect $other): Vec
    {
        $outside = Vec::fromPoints($other->center(), $this->center());
        if (abs($outside->dx()) > abs($outside->dy())) {
            return Vec::fromCoordinates(
                $outside->dx() > 0 ? ($other->right - $this->left) : ($other->left - $this->right),
                0
            );
        }

        return Vec::fromCoordinates(
            0,
            $outside->dy() > 0 ? ($other->bottom - $this->top) : ($other->top - $this->bottom)
        );
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

    public function translated(Vec $vec): self
    {
        $rect = clone $this;
        $rect->left += $vec->dx();
        $rect->right += $vec->dx();
        $rect->bottom += $vec->dy();
        $rect->top += $vec->dy();

        return $rect;
    }
}
