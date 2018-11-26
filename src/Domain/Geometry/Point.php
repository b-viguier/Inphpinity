<?php

namespace Inphpinity\Domain\Geometry;

class Point
{
    /** @var float */
    private $x = 0.0;
    /** @var float */
    private $y = 0.0;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public static function origin(): self
    {
        return new self(0, 0);
    }

    public function x(): float
    {
        return $this->x;
    }

    public function y(): float
    {
        return $this->y;
    }
}
