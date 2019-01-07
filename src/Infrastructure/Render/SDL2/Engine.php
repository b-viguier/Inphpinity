<?php

namespace Inphpinity\Infrastructure\Render\SDL2;

use Inphpinity\Domain;

class Engine
{
    /** @var \SDL_Window */
    private $window;
    private $renderer;

    public function __construct(string $title, int $width, int $height)
    {
        sdl_init(SDL_INIT_VIDEO);
        $this->window = sdl_createwindow(
            $title,
            SDL_WINDOWPOS_UNDEFINED, SDL_WINDOWPOS_UNDEFINED,
            $width, $height,
            SDL_WINDOW_SHOWN | SDL_WINDOW_RESIZABLE
        );
        $this->renderer = sdl_createrenderer($this->window, -1, SDL_RENDERER_ACCELERATED | SDL_RENDERER_PRESENTVSYNC);
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

        $width = $height = 0;
        sdl_getwindowsize($this->window, $width, $height);
        $level->camera()->setViewport(Domain\Geometry\Rect::createFromOriginAndSize(
            Domain\Geometry\Point::origin(),
            $width, $height
        ));

        $quit = false;
        $event = new \SDL_Event();
        $tick = Domain\Engine\Tick::start((int) (microtime(true) * 1000));
        $numKeys = 0;
        while (!$quit) {
            $tick = $tick->nextTick((int) (microtime(true) * 1000));

            $keyState = array_flip(sdl_getkeyboardstate($numKeys, false));
            while (sdl_pollevent($event) !== 0) {
                switch ($event->type) {
                    case SDL_QUIT:
                        $quit = true;
                        break;
                    case SDL_WINDOWEVENT:
                        // TODO: implement SDL_Event->window in extension
                        // https://wiki.libsdl.org/SDL_Event
                        sdl_getwindowsize($this->window, $width, $height);
                        $level->camera()->setViewport(Domain\Geometry\Rect::createFromOriginAndSize(
                            Domain\Geometry\Point::origin(),
                            $width, $height
                        ));
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
            if (isset($keyState[SDL_SCANCODE_SPACE])) {
                $input->pressButtons(Domain\Engine\Input::BTN_A);
            }

            //Clear screen
            sdl_setrenderdrawcolor($this->renderer, 95, 150, 249, 255);
            sdl_renderclear($this->renderer);

            $level->animate($tick, $input);
            $level->draw($drawingContext);

            sdl_renderpresent($this->renderer);
            sdl_delay(5);
        }
        echo PHP_EOL;
    }

    public static function createSdlRect(Domain\Geometry\Rect $rect): \SDL_Rect
    {
        return new \SDL_Rect(
            (int) $rect->left(),
            (int) $rect->top(),
            (int) $rect->width(),
            (int) $rect->height()
        );
    }
}
