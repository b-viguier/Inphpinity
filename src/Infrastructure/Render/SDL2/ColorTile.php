<?php

namespace Inphpinity\Infrastructure\Render\SDL2;

use Inphpinity\Domain\Engine\Drawable;
use Inphpinity\Domain\Engine\DrawingContext;
use Inphpinity\Domain\Geometry\Rect;
use Inphpinity\Infrastructure\Render\SDL2\DrawingContext as SdlDrawingContext;

class ColorTile implements Drawable
{
    /**
     * @param Rect              $destination
     * @param SdlDrawingContext $context
     */
    public function draw(Rect $destination, DrawingContext $context)
    {
        $renderer = $context->sdlRenderer();
        sdl_setrenderdrawcolor($renderer, 255, 0, 0, 255);
        sdl_renderfillrect($renderer, Engine::createSdlRect($destination));
    }
}
