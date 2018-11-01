<?php

namespace bviguier\Inphpinity\Domain\Engine;

use bviguier\Inphpinity\Domain\Geometry\Rect;

interface Drawable
{
    public function draw(Rect $destination, DrawingContext $context);
}
