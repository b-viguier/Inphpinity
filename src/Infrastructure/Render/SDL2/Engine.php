<?php

namespace Inphpinity\Infrastructure\Render\SDL2;

use Inphpinity\Domain;

class Engine
{
    private $window;
    private $renderer;

    public function __construct()
    {
        SDL_Init(SDL_INIT_VIDEO);
        $this->window = SDL_CreateWindow("Inphpinity", SDL_WINDOWPOS_UNDEFINED, SDL_WINDOWPOS_UNDEFINED, 640, 480, SDL_WINDOW_SHOWN);
        $this->renderer = SDL_CreateRenderer($this->window, -1, 0);
    }

    public function __destruct()
    {
        SDL_DestroyRenderer($this->renderer);
        SDL_DestroyWindow($this->window);
        SDL_Quit();
    }

    public function sdlRenderer()
    {
        return $this->renderer;
    }

    public function run(Domain\Engine\Grid $grid)
    {
        $drawingContext = new DrawingContext($this->renderer);


        $destination = Domain\Geometry\Rect::createFromPoints(
            new Domain\Geometry\Point(0, 0),
            new Domain\Geometry\Point(640, 480)
        );
        $source = clone $destination;
        $quit = false;
        $speed = 5;
        $event = new \SDL_Event;
        while (!$quit) {
            while (SDL_PollEvent($event) !== 0) {
                switch ($event->type) {
                    case SDL_QUIT:
                        $quit = true;
                        break;
                    case SDL_KEYDOWN:
                        switch ($event->key->keysym->sym) {
                            case SDLK_UP:
                                $source = $source->moved(0, -$speed);
                                break;
                            case SDLK_DOWN:
                                $source = $source->moved(0, $speed);
                                break;
                            case SDLK_LEFT:
                                $source = $source->moved(-$speed, 0);
                                break;
                            case SDLK_RIGHT:
                                $source = $source->moved($speed, 0);
                                break;
                        }
                }
            }

            //Clear screen
            SDL_SetRenderDrawColor($this->renderer, 95, 150, 249, 255);
            SDL_RenderClear($this->renderer);

            $grid->draw($source, $destination, $drawingContext);

            SDL_RenderPresent($this->renderer);
            SDL_Delay(5);
        }
    }

    public static function createSdlRect(Domain\Geometry\Rect $rect): \SDL_Rect
    {
        return new \SDL_Rect(
            $rect->left(),
            $rect->top(),
            $rect->width(),
            $rect->height()
        );
    }
}
