<?php

namespace Inphpinity\Infrastructure\Loader;

use Inphpinity\Domain\Engine\Block;
use Inphpinity\Domain\Engine\Drawable;
use Inphpinity\Domain\Engine\Grid;
use Inphpinity\Domain\Geometry\Point;
use Inphpinity\Domain\Pattern\NamedConstructor;

class TextGridLoader
{
    use NamedConstructor;

    /**
     * @var Drawable[]
     */
    private $drawableMap = [];

    public static function fromDrawableMap(array $drawableMap): self
    {
        foreach ($drawableMap as $char => $drawable) {
            if (!is_string($char) || strlen($char) !== 1) {
                throw new \Exception(self::class.': keys must be a single character string.');
            }
            if (!$drawable instanceof Drawable) {
                throw new \Exception(self::class.': values must be instance of ['.Drawable::class.'].');
            }
        }
        $loader = new self();
        $loader->drawableMap = $drawableMap;

        return $loader;
    }

    public function loadFile(string $filepath, int $blockSize): Grid
    {
        $data = file($filepath, FILE_IGNORE_NEW_LINES);
        if (false === $data) {
            throw new \Exception("Unable to load [$filepath].");
        }

        $height = count($data);
        $width = max(array_map('strlen', $data));

        $grid = Grid::create($width, $height, $blockSize);
        foreach ($data as $rowIndex => $row) {
            for ($colIndex =0; $colIndex < strlen($row); ++$colIndex) {
                $char = $row[$colIndex];
                if (isset($this->drawableMap[$char])) {
                    $grid->setBlock(
                        new Point($colIndex, $rowIndex),
                        Block::create($this->drawableMap[$char])
                    );
                }
            }
        }

        return $grid;
    }
}
