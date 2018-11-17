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
        SDL_SetRenderDrawColor($renderer, 255, 0, 0, 255);
        SDL_RenderFillRect($renderer, Engine::createSdlRect($destination));
    }
}
