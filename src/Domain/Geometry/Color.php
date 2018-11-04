<?php

namespace Inphpinity\Domain\Geometry;

use Inphpinity\Domain\Pattern\NamedConstructor;

class Color
{
    use NamedConstructor;

    private $red;
    private $green;
    private $blue;
    private $alpha;

    public static function fromRGBA(int $red, int $green, int $blue, int $alpha): self
    {
        $color = new self();
        $color->red = $red;
        $color->green = $green;
        $color->blue = $blue;
        $color->alpha = $alpha;

        return $color;
    }
}
