<?php

use \Inphpinity\Infrastructure\Loader\TextGridLoader;
use \Inphpinity\Infrastructure\Render\SDL2\TextureTile;

return TextGridLoader::fromDrawableMap([
    // Ground
    '-' => TextureTile::fromBmpFile(
        $renderEngine,
        __DIR__ . '/../textures/gnd_red_1.bmp'
    ),

    // Block
    'B' => TextureTile::fromBmpFile(
        $renderEngine,
        __DIR__ . '/../textures/brickred.bmp'
    ),

    // Special block
    '?' => TextureTile::fromBmpFile(
        $renderEngine,
        __DIR__ . '/../textures/blockq_0.bmp'
    ),

    // Grass
    'G' => [
        TextGridLoader::ROLE_LEFT => TextureTile::fromBmpFile(
            $renderEngine,
            __DIR__ . '/../textures/grass_left.bmp'
        ),
        TextGridLoader::ROLE_CENTER => TextureTile::fromBmpFile(
            $renderEngine,
            __DIR__ . '/../textures/grass_center.bmp'
        ),
        TextGridLoader::ROLE_RIGHT => TextureTile::fromBmpFile(
            $renderEngine,
            __DIR__ . '/../textures/grass_right.bmp'
        ),
    ]
]);
