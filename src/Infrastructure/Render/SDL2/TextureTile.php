<?php

namespace Inphpinity\Infrastructure\Render\SDL2;

use Inphpinity\Domain\Engine\Drawable;
use Inphpinity\Domain\Engine\DrawingContext;
use Inphpinity\Domain\Geometry\Rect;
use Inphpinity\Domain\Pattern\NamedConstructor;
use Inphpinity\Infrastructure\Render\SDL2\DrawingContext as SdlDrawingContext;

class TextureTile implements Drawable
{
    use NamedConstructor;

    private $texture;

    public static function fromBmpFile(Engine $engine, string $filepath): self
    {
        $image = SDL_LoadBMP($filepath);
        if ($image === null) {
            throw new \Exception("Unable to load '$filepath'.");
        }

        SDL_SetColorKey($image, true, SDL_MapRGB($image->format, 255, 0, 255));
        $block = new self();
        $block->texture = SDL_CreateTextureFromSurface($engine->sdlRenderer(), $image);
        SDL_FreeSurface($image);

        return $block;
    }

    /**
     * @param Rect              $source
     * @param Rect              $destination
     * @param SdlDrawingContext $context
     */
    public function draw(Rect $source, Rect $destination, DrawingContext $context)
    {
        $renderer = $context->sdlRenderer();
        SDL_RenderCopy($renderer, $this->texture, null, Engine::createSdlRect($destination));
    }
}
