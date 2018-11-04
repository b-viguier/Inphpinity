<?php

use \Inphpinity\Infrastructure\Loader\TextGridLoader;
use \Inphpinity\Infrastructure\Render\SDL2\TextureBlock;

return TextGridLoader::fromDrawableMap([
    // Ground
    '-' => TextureBlock::fromBmpFile(
        $renderEngine,
        __DIR__ . '/../textures/gnd_red_1.bmp'
    ),

    // Block
    'B' => TextureBlock::fromBmpFile(
        $renderEngine,
        __DIR__ . '/../textures/brickred.bmp'
    ),

    // Special block
    '?' => TextureBlock::fromBmpFile(
        $renderEngine,
        __DIR__ . '/../textures/blockq_0.bmp'
    ),

    // Grass
    'G' => [
        TextGridLoader::ROLE_LEFT => TextureBlock::fromBmpFile(
            $renderEngine,
            __DIR__ . '/../textures/grass_left.bmp'
        ),
        TextGridLoader::ROLE_CENTER => TextureBlock::fromBmpFile(
            $renderEngine,
            __DIR__ . '/../textures/grass_center.bmp'
        ),
        TextGridLoader::ROLE_RIGHT => TextureBlock::fromBmpFile(
            $renderEngine,
            __DIR__ . '/../textures/grass_right.bmp'
        ),
    ]
]);
