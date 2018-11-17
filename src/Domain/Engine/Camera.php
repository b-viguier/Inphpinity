<?php

namespace Inphpinity\Domain\Engine;

use Inphpinity\Domain\Geometry\Rect;
use Inphpinity\Domain\Pattern\NamedConstructor;

class Camera
{
    use NamedConstructor;

    /** @var Rect */
    private $clippingArea;

    public static function fromClippingArea(Rect $clippingArea): self
    {
        $camera = new self();
        $camera->clippingArea = $clippingArea;

        return $camera;
    }

    public function clippingArea(): Rect
    {
        return $this->clippingArea;
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
