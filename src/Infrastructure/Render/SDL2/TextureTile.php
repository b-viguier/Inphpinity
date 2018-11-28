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
    /** @var int */
    private $flipping = SDL_FLIP_NONE;

    public static function fromBmpFile(Engine $engine, string $filepath): self
    {
        $image = sdl_loadbmp($filepath);
        if ($image === null) {
            throw new \Exception("Unable to load '$filepath'.");
        }

        sdl_setcolorkey($image, true, sdl_maprgb($image->format, 255, 0, 255));
        $block = new self();
        $block->texture = sdl_createtexturefromsurface($engine->sdlRenderer(), $image);
        sdl_freesurface($image);

        return $block;
    }

    /**
     * @param Rect              $destination
     * @param SdlDrawingContext $context
     */
    public function draw(Rect $destination, DrawingContext $context)
    {
        $renderer = $context->sdlRenderer();
        \sdl_rendercopyex($renderer, $this->texture, null, Engine::createSdlRect($destination), 0, null, $this->flipping);
    }

    public function flip(bool $flip)
    {
        $this->flipping = $flip ? SDL_FLIP_HORIZONTAL : SDL_FLIP_NONE;
    }
}
