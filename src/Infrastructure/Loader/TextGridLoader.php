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

    public const ROLE_LEFT = 'l';
    public const ROLE_CENTER = 'c';
    public const ROLE_RIGHT = 'r';

    private const ALL_ROLES = [
        self::ROLE_LEFT,
        self::ROLE_CENTER,
        self::ROLE_RIGHT,
    ];

    /**
     * @var Drawable[][]
     */
    private $drawableMap = [];

    public static function fromDrawableMap(array $drawableMap): self
    {
        foreach ($drawableMap as $char => $element) {
            if (!is_string($char) || strlen($char) !== 1) {
                throw new \Exception(self::class.': keys must be a single character string.');
            }
            if ($element instanceof Drawable) {
                $drawableMap[$char] = array_fill_keys(self::ALL_ROLES, $element);
            } elseif (!is_array($element)) {
                throw new \Exception(self::class.': invalid value.');
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
            for ($colIndex = 0; $colIndex < strlen($row); $colIndex++) {
                $char = $row[$colIndex];
                if (isset($this->drawableMap[$char])) {
                    $point = new Point($colIndex, $rowIndex);
                    $grid->setBlock(
                        new Point($colIndex, $rowIndex),
                        Block::create($this->drawableMap[$char][self::getRole($point, $data)])
                    );
                }
            }
        }

        return $grid;
    }

    private static function getRole(Point $point, array $data): string
    {
        $row = $point->y();
        $col = $point->x();
        $char = $data[$row][$col];

        $isSameAtRight = self::getRight($point, $data) === $char;
        $isSameAtLeft = self::getLeft($point, $data) === $char;

        if (!$isSameAtLeft && $isSameAtRight) {
            return self::ROLE_LEFT;
        }
        if (!$isSameAtRight && $isSameAtLeft) {
            return self::ROLE_RIGHT;
        }

        return self::ROLE_CENTER;
    }

    private static function getLeft(Point $point, array $data): string
    {
        return $data[$point->y()][$point->x() - 1] ?? '';
    }

    private static function getRight(Point $point, array $data): string
    {
        return $data[$point->y()][$point->x() + 1] ?? '';
    }
}
