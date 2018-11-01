<?php

namespace bviguier\Inphpinity\Domain\Geometry;

use bviguier\Inphpinity\Domain\Pattern\NamedConstructor;

class Rect
{
    use NamedConstructor;

    /**
     * @var Point
     */
    private $bottomLeft;

    /**
     * @var Point
     */
    private $topRight;

    public static function createFromPoints(Point $p1, Point $p2): self
    {
        $rect = new self();
        [$xMin, $xMax] = $p1->x() < $p2->x() ? [$p1->x(), $p2->x()] : [$p2->x(), $p1->x()];
        [$yMin, $yMax] = $p1->y() < $p2->y() ? [$p1->y(), $p2->y()] : [$p2->y(), $p1->y()];
        $rect->bottomLeft = new Point($xMin, $yMin);
        $rect->topRight = new Point($xMax, $yMax);

        return $rect;
    }

    public function left(): int
    {
        return $this->bottomLeft->x();
    }

    public function right(): int
    {
        return $this->topRight->x();
    }

    public function bottom(): int
    {
        return $this->bottomLeft->y();
    }

    public function top(): int
    {
        return $this->topRight->y();
    }

    public function width(): int
    {
        return $this->topRight->x() - $this->bottomLeft->x();
    }

    public function height(): int
    {
        return $this->topRight->y() - $this->bottomLeft->y();
    }

    public function contains(Point $point): bool
    {
        $x = $point->x();
        $y = $point->y();

        return $this->bottomLeft->x() <= $x
            && $this->bottomLeft->y() <= $y
            && $x <=$this->topRight->x()
            && $y <=$this->topRight->y();
    }
}
