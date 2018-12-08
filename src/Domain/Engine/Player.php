<?php

namespace Inphpinity\Domain\Engine;

use Inphpinity\Domain\Geometry\Rect;
use Inphpinity\Domain\Geometry\Vec;

class Player
{
    /** @var Rect */
    private $boundingBox;

    /** @var Drawable */
    private $drawable;

    public function __construct(Rect $initialBoundingBox, Drawable $drawable)
    {
        $this->boundingBox = $initialBoundingBox;
        $this->drawable = $drawable;
    }

    public function animate(Tick $tick, Input $input)
    {
        $dX = $dY = 0;
        if ($input->someButtonsPressed(Input::BTN_RIGHT | Input::BTN_LEFT)) {
            if ($input->allButtonsPressed(Input::BTN_RIGHT)) {
                $dX = 1;
                $this->drawable->flip(false);
            } else {
                $dX = -1;
                $this->drawable->flip(true);
            }
        }

        if ($input->someButtonsPressed(Input::BTN_UP | Input::BTN_DOWN)) {
            $dY = $input->allButtonsPressed(Input::BTN_UP) ? -1 : 1;
        }
        $motion = Vec::fromCoordinates($dX, $dY)->scaled($tick->elapsedTime() / 5);
        $this->boundingBox = $this->boundingBox->translated($motion);
    }

    public function translate(Vec $motion)
    {
        $this->boundingBox = $this->boundingBox->translated($motion);
    }

    public function boundingBox(): Rect
    {
        return $this->boundingBox;
    }

    public function draw(Camera $camera, DrawingContext $drawingContext)
    {
        $this->drawable->draw(
            $camera->toViewportRect($this->boundingBox),
            $drawingContext
        );
    }
}
