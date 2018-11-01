<?php

namespace bviguier\Inphpinity\Infrastructure\Render\SDL2;

use bviguier\Inphpinity\Domain;

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
        $quit = false;
        $event = new \SDL_Event;
        while (!$quit) {
            SDL_PollEvent($event);
            switch ($event->type) {
                case SDL_QUIT:
                    $quit = true;
                    break;
            }


            //Clear screen
            SDL_SetRenderDrawColor($renderer, 10, 10, 150, 255);
            SDL_RenderClear($renderer);

            $grid->draw($destination, $drawingContext);

            SDL_RenderPresent($renderer);
            SDL_Delay(5);
        }

        SDL_DestroyRenderer($renderer);
        SDL_DestroyWindow($window);
        SDL_Quit();
    }
}
