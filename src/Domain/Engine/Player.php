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

    /** @var float */
    private $gravity = 0.0;

    /** @var Tick */
    private $jumpDuration;

    /** @var int */
    private $state = self::STATE_NOTHING;

    private const SPEED = 8/*blocks of*/ * 32/*px*/ / 1000; // px/ms
    private const MAX_MOTION = 40 * self::SPEED;    // Nb of pixels at 25fps

    private const STATE_NOTHING = 1;
    private const STATE_WALKING = 1;
    private const STATE_JUMPING = 2;
    private const STATE_FALLING = 3;

    public function __construct(Rect $initialBoundingBox, Drawable $drawable)
    {
        $this->boundingBox = $initialBoundingBox;
        $this->drawable = $drawable;
        $this->jumpDuration = Tick::start(0);
    }

    public function animate(Tick $tick, Input $input)
    {
        // The distance in pixel that could be walked during elapsed time
        $motionDistance = min($tick->elapsedTime() * self::SPEED, self::MAX_MOTION);

        // Left/right motion
        $dX = 0;
        if ($input->someButtonsPressed(Input::BTN_RIGHT | Input::BTN_LEFT)) {
            if ($input->allButtonsPressed(Input::BTN_RIGHT)) {
                $dX = $motionDistance;
                $this->drawable->flip(false);
            } else {
                $dX = -$motionDistance;
                $this->drawable->flip(true);
            }
        }

        // Jump management
        if ($input->allButtonsPressed(Input::BTN_A) && $this->canGoHigher()) {
            switch ($this->state) {
                case self::STATE_NOTHING:
                case self::STATE_WALKING:
                    $this->jumpDuration = Tick::startFrom($tick);
                    $this->state = self::STATE_JUMPING;
                    // Then jump
                    // no break
                case self::STATE_JUMPING:
                    $this->jumpDuration = $this->jumpDuration->nextTick($tick->absolute());
                    if ($this->jumpDuration->absolute() < 100 /*ms*/) {
                        $this->gravity = -$motionDistance * 2;
                    } else {
                        $this->state = self::STATE_FALLING;
                    }
                    break;
                default:
                    // Can't jump in other states
                    break;
            }
        } else {
            $this->gravity = min($this->gravity + $motionDistance / 2, self::MAX_MOTION);
        }

        $motion = Vec::fromCoordinates($dX, $this->gravity);
        $this->boundingBox = $this->boundingBox->translated($motion);
    }

    public function translate(Vec $motion)
    {
        // Gravity management
        if ($motion->dy() < 0) {
            $this->gravity += $motion->dy();
            if ($this->gravity <= 0) {
                $this->state = self::STATE_NOTHING;
            }
        }
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

    private function canGoHigher(): bool
    {
        switch ($this->state) {
            case self::STATE_NOTHING:
            case self::STATE_WALKING:
            case self::STATE_JUMPING:
                return true;
        }

        return false;
    }
}
