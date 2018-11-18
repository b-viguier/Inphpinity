<?php

namespace Inphpinity\Domain\Engine;

use Inphpinity\Domain\Geometry\Point;
use Inphpinity\Domain\Geometry\Rect;
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
        $deltaX = $deltaY = 0;
        if ($boundingBox->left() < $this->clippingArea->left()) {
            $deltaX = max($boundingBox->left(), $allowedArea->left()) - $this->clippingArea->left();
        } elseif ($boundingBox->right() > $this->clippingArea->right()) {
            $deltaX = min($boundingBox->right(), $allowedArea->right()) - $this->clippingArea->right();
        }

        if ($boundingBox->top() < $this->clippingArea->top()) {
            $deltaY = max($boundingBox->top(), $allowedArea->top()) - $this->clippingArea->top();
        } elseif ($boundingBox->bottom() > $this->clippingArea->bottom()) {
            $deltaY = min($boundingBox->bottom(), $allowedArea->bottom()) - $this->clippingArea->bottom();
        }

        $this->clippingArea = $this->clippingArea->moved($deltaX, $deltaY);

        return $this;
    }
}
