<?php

namespace Inphpinity\Domain\Geometry;

use Inphpinity\Domain\Pattern\NamedConstructor;

class Vec
{
    use NamedConstructor;

    /** @var float */
    private $dx = 0.0;
    /** @var float */
    private $dy = 0.0;

    public static function fromCoordinates(float $dx, float $dy): self
    {
        $vec = new self();
        $vec->dx = $dx;
        $vec->dy = $dy;

        return $vec;
    }

    public static function fromPoints(Point $p1, Point $p2): self
    {
        return self::fromCoordinates(
            $p2->x() - $p1->x(),
            $p2->y() - $p1->y()
        );
    }

    public function dx(): float
    {
        return $this->dx;
    }

    public function dy(): float
    {
        return $this->dy;
    }

    public function __toString(): string
    {
        return "V({$this->dx},{$this->dy})";
    }

    public function norm(): float
    {
        return sqrt($this->dx * $this->dx + $this->dy * $this->dy);
    }

    public function squareNorm(): float
    {
        return $this->dx * $this->dx + $this->dy * $this->dy;
    }

    public function normalized(): self
    {
        $norm = $this->norm();

        return self::fromCoordinates(
            $this->dx / $norm,
            $this->dy / $norm
        );
    }

    public function dotProduct(Vec $other): float
    {
        return $this->dx * $other->dx + $this->dy * $other->dy;
    }

    public function scaled(float $scale): self
    {
        return Vec::fromCoordinates(
            $this->dx * $scale,
            $this->dy * $scale
        );
    }

    public function added(Vec $other): self
    {
        return Vec::fromCoordinates(
            $this->dx + $other->dx,
            $this->dy + $other->dy
        );
    }

    public function projectedOnto(Vec $other): Vec
    {
        $r = $other->normalized()->scaled($this->dotProduct($other));

        return $r;
    }

    public function isOnTheRightOf(Vec $other): bool
    {
        return $this->dx * $other->dy - $this->dy * $other->dx > 0;
    }
}
