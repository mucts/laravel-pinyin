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
    /*
     | ------------------------------------------------------------------
     | Set the default conversion scheme
     | ------------------------------------------------------------------
     | The system has realized the following options:
     | Memory type, suitable for server memory space is more abundant,
     | advantages: fast conversion.
     | Small memory (default), suitable for the memory is more tight environment,
     | advantages: small footprint, conversion is not as fast as memory.
     | Type I/O, suitable for virtual machine, memory limited environment.
     | Pros: very small memory consumption. Cons: slow conversion,
     | not as fast as memory conversion.
     |
     | Available Settings:file,generator,memory
     |
     */
    'default' => env('PINYIN_DICT_LOADER', 'file'),
    /*
     | ------------------------------------------------------------------
     | Set up the custom implementation
     | ------------------------------------------------------------------
     | You can set up your own implemented transformation scheme,
     | which can be configured here if you need to override or
     | add a transformation scheme alias.
     | Available Settings: 'file' => MuCTS\Pinyin\Loaders\File::class
     |
     */
    'alias' => []
];