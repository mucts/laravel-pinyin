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

namespace MuCTS\Laravel\Pinyin\Facades;


use Illuminate\Support\Facades\Facade;
use MuCTS\Laravel\Pinyin\Pinyin as Accessor;

/**
 * Class Pinyin
 *
 * @method static \MuCTS\Laravel\Pinyin\Pinyin setLoader($loader = null)
 * @method static \MuCTS\Laravel\Pinyin\Pinyin setDataPath(?string $path)
 * @method static array convert(string $string, int $option = \MuCTS\Laravel\Pinyin\Pinyin::DEFAULT)
 * @method static array name(string $string, int $option = \MuCTS\Laravel\Pinyin\Pinyin::NAME)
 * @method static array permalink(string $string, $delimiter = '-', int $option = \MuCTS\Laravel\Pinyin\Pinyin::DEFAULT)
 * @method static array abbr(string $string, $delimiter = '', int $option = \MuCTS\Laravel\Pinyin\Pinyin::DEFAULT)
 * @method static array phrase(string $string, $delimiter = ' ', int $option = \MuCTS\Laravel\Pinyin\Pinyin::DEFAULT)
 * @method static string sentence($string, $delimiter = ' ', $option = \MuCTS\Laravel\Pinyin\Pinyin::NO_TONE)
 * @package MuCTS\Laravel\Pinyin\Facades
 */
class Pinyin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Accessor::class;
    }
}