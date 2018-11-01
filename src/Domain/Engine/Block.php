<?php

namespace bviguier\Inphpinity\Domain\Engine;

use bviguier\Inphpinity\Domain\Pattern\NamedConstructor;

class Block
{
    use NamedConstructor;

    /**
     * @var Drawable
     */
    private $drawable;

    public static function create(Drawable $drawable): self
    {
        $block = new self();
        $block->drawable = $drawable;

        return $block;
    }

    public function drawable(): Drawable
    {
        return $this->drawable;
    }
}
