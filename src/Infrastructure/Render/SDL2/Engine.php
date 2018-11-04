<?php

namespace Inphpinity\Infrastructure\Render\SDL2;

use Inphpinity\Domain;

class Engine
{
    public function __construct()
    {
    }

    public function run(Domain\Engine\Grid $grid)
    {
        SDL_Init(SDL_INIT_VIDEO);
        $window = SDL_CreateWindow("Inphpinity", SDL_WINDOWPOS_UNDEFINED, SDL_WINDOWPOS_UNDEFINED, 640, 480, SDL_WINDOW_SHOWN);
        $renderer = SDL_CreateRenderer($window, -1, 0);
        $drawingContext = new DrawingContext($renderer);


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
            SDL_SetRenderDrawColor($renderer, 10, 10, 150, 255);
            SDL_RenderClear($renderer);

            $grid->draw($source, $destination, $drawingContext);

            SDL_RenderPresent($renderer);
            SDL_Delay(5);
        }

        SDL_DestroyRenderer($renderer);
        SDL_DestroyWindow($window);
        SDL_Quit();
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
