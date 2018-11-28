<?php

namespace Inphpinity\Domain\Engine;

use Inphpinity\Domain\Geometry\Rect;

interface Drawable
{
    public function draw(Rect $destination, DrawingContext $context);

    public function flip(bool $flip);
}
