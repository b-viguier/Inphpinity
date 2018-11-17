<?php

namespace Inphpinity\Domain\Engine;

class Input
{
    public const BTN_UP = 1 << 0;
    public const BTN_DOWN = 1 << 1;
    public const BTN_LEFT = 1 << 2;
    public const BTN_RIGHT = 1 << 3;
    public const BTN_A = 1 << 4;
    public const BTN_B = 1 << 5;
    public const BTN_START = 1 << 6;
    public const BTN_SELECT = 1 << 7;


    /** @var int */
    private $state = 0;

    public function pressButtons(int $buttons): self
    {
        $this->state |= $buttons;

        return $this;
    }

    public function allButtonsPressed(int $buttons): bool
    {
        return ($this->state & $buttons) === $buttons;
    }

    public function someButtonsPressed(int $buttons): bool
    {
        return ($this->state & $buttons) !== 0;
    }
}
