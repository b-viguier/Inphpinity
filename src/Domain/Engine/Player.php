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
        $motion = Vec::fromCoordinates(
            $input->allButtonsPressed(Input::BTN_RIGHT) ? 1
                : ($input->allButtonsPressed(Input::BTN_LEFT) ? -1 : 0),
            $input->allButtonsPressed(Input::BTN_DOWN) ? 1
                : ($input->allButtonsPressed(Input::BTN_UP) ? -1 : 0)
        );
        $this->boundingBox = $this->boundingBox->translated(
            $motion->scaled($tick->elapsedTime() / 5)
        );
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
