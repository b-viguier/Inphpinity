<?php

namespace Inphpinity\Domain\Engine;

use Inphpinity\Domain\Geometry\Point;
use Inphpinity\Domain\Geometry\Rect;
use Inphpinity\Domain\Geometry\Vec;
use Inphpinity\Domain\Pattern\NamedConstructor;

class Camera
{
    use NamedConstructor;

    /** @var Rect */
    private $clippingArea;

    /** @var Rect */
    private $viewport;

    public static function create(Rect $clippingArea): self
    {
        $camera = new self();
        $camera->clippingArea = $clippingArea;
        $camera->setViewport(
            Rect::createFromOriginAndSize(Point::origin(), $clippingArea->width(), $clippingArea->height())
        );

        return $camera;
    }

    public function clippingArea(): Rect
    {
        return $this->clippingArea;
    }

    public function setViewport(Rect $viewport): self
    {
        $this->viewport = $viewport;

        return $this;
    }

    public function toViewportRect(Rect $rect): Rect
    {
        return Rect::createFromPoints(
            $this->toViewportPoint($rect->topLeft()),
            $this->toViewportPoint($rect->bottomRight())
        );
    }

    public function toViewportPoint(Point $point): Point
    {
        $normalizedX = ($point->x() - $this->clippingArea->left()) / $this->clippingArea->width();
        $normalizedY = ($point->y() - $this->clippingArea->top()) / $this->clippingArea->height();

        return new Point(
            (int) ($this->viewport->left() + $normalizedX * $this->viewport->width()),
            (int) ($this->viewport->top() + $normalizedY * $this->viewport->height())
        );
    }

    public function follow(Rect $boundingBox, Rect $allowedArea): self
    {
        $deltaX = $boundingBox->center()->x() - $this->clippingArea->center()->x();
        if ($deltaX < 0) {
            $deltaX = $this->clippingArea->left() + $deltaX < $allowedArea->left() ? 0 : $deltaX;
        } else {
            $deltaX = $this->clippingArea->right() + $deltaX > $allowedArea->right() ? 0 : $deltaX;
        }

        $this->clippingArea = $this->clippingArea->translated(Vec::fromCoordinates($deltaX, 0));

        return $this;
    }
}
