<?php

namespace Inphpinity\Infrastructure\Render\SDL2;

class DrawingContext implements \Inphpinity\Domain\Engine\DrawingContext
{
    /**
     * @var resource
     */
    private $sdlRenderer;

    /**
     * @param resource $sdlRenderer
     */
    public function __construct($sdlRenderer)
    {
        $this->sdlRenderer = $sdlRenderer;
    }

    /**
     * @return resource
     */
    public function sdlRenderer()
    {
        return $this->sdlRenderer;
    }
}
