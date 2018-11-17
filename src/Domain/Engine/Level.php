<?php

namespace Inphpinity\Domain\Engine;

use Inphpinity\Domain\Pattern\NamedConstructor;

class Level
{
    use NamedConstructor;

    /** @var Player */
    private $player;

    /** @var Grid */
    private $grid;

    /** @var Camera */
    private $camera;

    public static function create(Camera $camera, Grid $grid, Player $player)
    {
        $instance = new self();
        $instance->camera = $camera;
        $instance->player = $player;
        $instance->grid = $grid;

        return $instance;
    }

    public function animate(int $timestamp, Input $input)
    {
        $this->player->animate($timestamp, $input);
        $this->camera->follow($this->player->boundingBox(), $this->grid->area());
    }

    public function draw(DrawingContext $drawingContext)
    {
        $this->grid->draw($this->camera, $drawingContext);
        $this->player->draw($this->camera, $drawingContext);
    }
}
