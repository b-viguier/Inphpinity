<?php

namespace Inphpinity\Domain\Engine;

use Inphpinity\Domain\Pattern\NamedConstructor;

class Tick
{
    use NamedConstructor;

    /** @var int */
    private $startTimestamp = 0;
    /** @var int */
    private $currentTimestamp = 0;
    /** var int */
    private $elapsedTime = 0;

    public static function start(int $timestamp): self
    {
        $tick = new self();
        $tick->startTimestamp = $tick->currentTimestamp = $timestamp;

        return $tick;
    }

    public static function startFrom(self $other): self
    {
        return self::start($other->absolute());
    }

    public function nextTick(int $currentTimestamp): self
    {
        $nextTick = clone $this;
        $nextTick->elapsedTime = $currentTimestamp - $this->currentTimestamp;
        $nextTick->currentTimestamp = $currentTimestamp;

        return $nextTick;
    }

    public function absolute(): int
    {
        return $this->currentTimestamp - $this->startTimestamp;
    }

    public function elapsedTime(): int
    {
        return $this->elapsedTime;
    }
}
