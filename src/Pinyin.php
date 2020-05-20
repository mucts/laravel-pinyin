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

namespace MuCTS\Laravel\Pinyin;

use Illuminate\Support\Arr;
use MuCTS\Pinyin\Pinyin as Accessor;

/**
 * Class Pinyin
 * @mixin Accessor
 * @package MuCTS\Laravel\Pinyin
 */
class Pinyin extends Accessor
{
    public function __construct($loader = null)
    {
        $path = null;
        if (is_array($loader)) {
            $path = Arr::get($loader, 'loaders.data');
            $loader = Arr::get($loader, 'loaders.default');
        }
        parent::__construct($loader, $path);
    }
}