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

namespace MuCTS\LaravelPinyin\Facades;


use Illuminate\Support\Facades\Facade;
use MuCTS\LaravelPinyin\Pinyin as Accessor;

/**
 * Class Pinyin
 * @mixin Accessor
 * @package MuCTS\LaravelPinyin\Facades
 */
class Pinyin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Accessor::class;
    }
}