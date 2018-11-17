<?php

namespace Inphpinity\Domain\Engine;

use Inphpinity\Domain\Geometry\Rect;

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

    public function animate(int $timestamp, Input $input)
    {
        $deltaX = $deltaY = 0;
        if ($input->someButtonsPressed(Input::BTN_RIGHT|Input::BTN_LEFT)) {
            $deltaX = $input->allButtonsPressed(Input::BTN_RIGHT) ? 1 : -1;
        }

        if ($input->someButtonsPressed(Input::BTN_UP|Input::BTN_DOWN)) {
            $deltaY = $input->allButtonsPressed(Input::BTN_UP) ? -1 : 1;
        }

        $this->boundingBox = $this->boundingBox->moved($deltaX, $deltaY);
    }

    public function boundingBox(): Rect
    {
        return $this->boundingBox;
    }

    public function draw(Camera $camera, DrawingContext $drawingContext)
    {
        $this->drawable->draw(
            $this->boundingBox->moved(
                -$camera->clippingArea()->left(),
                -$camera->clippingArea()->top()
            ),
            $drawingContext
        );
    }
}
