<?php

namespace bviguier\Inphpinity\Infrastructure\Render\SDL2;

use bviguier\Inphpinity\Domain\Engine\Drawable;
use bviguier\Inphpinity\Domain\Engine\DrawingContext;
use bviguier\Inphpinity\Domain\Geometry\Rect;
use bviguier\Inphpinity\Infrastructure\Render\SDL2\DrawingContext as SdlDrawingContext;

class ColorBlock implements Drawable
{
    /**
     * @param Rect              $destination
     * @param SdlDrawingContext $context
     */
    public function draw(Rect $destination, DrawingContext $context)
    {
        $renderer = $context->sdlRenderer();
        $rect = new \SDL_Rect($destination->left(), $destination->bottom(), $destination->width(), $destination->height());
        SDL_SetRenderDrawColor($renderer, 255, 0, 0, 255);
        SDL_RenderFillRect($renderer, $rect);
    }
}
