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
        $speed = 1;
        $event = new \SDL_Event;
        $lastTime = microtime(true);
        $keyState = [
            SDLK_UP => false,
            SDLK_DOWN => false,
            SDLK_LEFT => false,
            SDLK_RIGHT => false,
        ];
        while (!$quit) {
            while (SDL_PollEvent($event) !== 0) {
                switch ($event->type) {
                    case SDL_QUIT:
                        $quit = true;
                        break;
                    case SDL_KEYDOWN:
                        $keyState[$event->key->keysym->sym] = true;
                        break;
                    case SDL_KEYUP:
                        $keyState[$event->key->keysym->sym] = false;
                        break;
                }
            }

            if ($keyState[SDLK_UP]) {
                $source = $source->moved(0, -$speed);
            }
            if ($keyState[SDLK_DOWN]) {
                $source = $source->moved(0, $speed);
            }
            if ($keyState[SDLK_LEFT]) {
                $source = $source->moved(-$speed, 0);
            }
            if ($keyState[SDLK_RIGHT]) {
                $source = $source->moved($speed, 0);
            }

            //Clear screen
            SDL_SetRenderDrawColor($this->renderer, 95, 150, 249, 255);
            SDL_RenderClear($this->renderer);

            $grid->draw($source, $destination, $drawingContext);

            SDL_RenderPresent($this->renderer);
            SDL_Delay(5);

            $duration = microtime(true) - $lastTime;
            $durationMs = (int) ($duration * 1000);
            $fps = (int)(1 / $duration);
            echo "Duration: $durationMs ms     FPS: {$fps}     \r";
            $lastTime += $duration;
        }
        echo PHP_EOL;
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
