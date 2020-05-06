<?php
/**
 * This file is part of the mucts/laravel-pinyin.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 *
 * @version 1.0
 * @author herry<yuandeng@aliyun.com>
 * @copyright © 2020 MuCTS.com All Rights Reserved.
 */

return [
    'default' => env('PINYIN_DICT_LOADER', 'file'),
    'loaders' => [
        'file' => MuCTS\Pinyin\Loaders\File::class,
        'generator' => MuCTS\Pinyin\Loaders\GeneratorFile::class,
        'memory' => MuCTS\Pinyin\Loaders\MemoryFile::class
    ]
];