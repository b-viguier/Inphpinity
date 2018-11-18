<?php

namespace Inphpinity\Domain\Geometry;

class Point
{
    private $x = 0;
    private $y = 0;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public static function origin(): self
    {
        return new self(0, 0);
    }

    public function x(): int
    {
        return $this->x;
    }

    public function y(): int
    {
        return $this->y;
    }
}
