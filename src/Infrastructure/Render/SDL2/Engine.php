<?php

namespace Inphpinity\Infrastructure\Render\SDL2;

use Inphpinity\Domain;

class Engine
{
    private $window;
    private $renderer;

    public function __construct()
    {
        sdl_init(SDL_INIT_VIDEO);
        $this->window = sdl_createwindow('Inphpinity', SDL_WINDOWPOS_UNDEFINED, SDL_WINDOWPOS_UNDEFINED, 640, 480, SDL_WINDOW_SHOWN);
        $this->renderer = sdl_createrenderer($this->window, -1, 0);
    }

    public function __destruct()
    {
        sdl_destroyrenderer($this->renderer);
        sdl_destroywindow($this->window);
        sdl_quit();
    }

    public function sdlRenderer()
    {
        return $this->renderer;
    }

    public function run(Domain\Engine\Level $level)
    {
        $drawingContext = new DrawingContext($this->renderer);

        $destination = Domain\Geometry\Rect::createFromPoints(
            new Domain\Geometry\Point(0, 0),
            new Domain\Geometry\Point(640, 480)
        );
        $source = clone $destination;
        $quit = false;
        $event = new \SDL_Event();
        $startTime = (int) microtime(true) * 1000;
        $numKeys = 0;
        while (!$quit) {
            $currentTime = ((int) microtime(true) * 1000) - $startTime;
            $keyState = array_flip(sdl_getkeyboardstate($numKeys, false));
            while (sdl_pollevent($event) !== 0) {
                switch ($event->type) {
                    case SDL_QUIT:
                        $quit = true;
                        break;
                }
            }

            $input = new Domain\Engine\Input();
            if (isset($keyState[SDL_SCANCODE_UP])) {
                $input->pressButtons(Domain\Engine\Input::BTN_UP);
            }
            if (isset($keyState[SDL_SCANCODE_DOWN])) {
                $input->pressButtons(Domain\Engine\Input::BTN_DOWN);
            }
            if (isset($keyState[SDL_SCANCODE_LEFT])) {
                $input->pressButtons(Domain\Engine\Input::BTN_LEFT);
            }
            if (isset($keyState[SDL_SCANCODE_RIGHT])) {
                $input->pressButtons(Domain\Engine\Input::BTN_RIGHT);
            }

            //Clear screen
            sdl_setrenderdrawcolor($this->renderer, 95, 150, 249, 255);
            sdl_renderclear($this->renderer);

            $level->animate($currentTime, $input);
            $level->draw($drawingContext);

            sdl_renderpresent($this->renderer);
            sdl_delay(5);
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
