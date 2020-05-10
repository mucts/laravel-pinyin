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


use MuCTS\Laravel\Pinyin\Facades\Pinyin;
use MuCTS\Pinyin\Interfaces\DictLoader;

if (!function_exists('pinyin')) {
    /**
     * Get the Pinyin of given string.
     *
     * @param string $str
     * @param int $option
     * @param DictLoader|string $loader
     * @return array
     * @author herry<yuandeng@aliyun.com>
     */
    function pinyin(string $str, int $option = Pinyin::DEFAULT, $loader = null)
    {
        return Pinyin::setLoader($loader)->convert($str, $option);
    }
}

if (!function_exists('pinyin_abbr')) {
    /**
     * Get the fist letters of given string.
     *
     * @param string $str
     * @param string|int $delimiter
     * @param int $option
     * @param DictLoader|string|null $loader
     * @return string
     */
    function pinyin_abbr(string $str, $delimiter = '', int $option = Pinyin::DEFAULT, $loader = null)
    {
        return Pinyin::setLoader($loader)->abbr($str, $delimiter, $option);
    }
}


if (!function_exists('pinyin_permalink')) {
    /**
     * Get a pinyin permalink from string.
     * @param string $str
     * @param string|int $delimiter
     * @param int $option
     * @param DictLoader|string|null $loader
     * @return string
     */
    function pinyin_permalink(string $str, $delimiter = '-', int $option = Pinyin::DEFAULT, $loader = null): string
    {
        return Pinyin::setLoader($loader)->permalink($str, $delimiter, $option);
    }
}

if (!function_exists('pinyin_sentence')) {
    /**
     * Get the fist pinyin and letters of given string.
     *
     * @param string $string
     * @param string|int $delimiter
     * @param int $option
     * @param DictLoader|string|null $loader
     * @return string
     */
    function pinyin_sentence($string, $delimiter = ' ', $option = Pinyin::NO_TONE, $loader = null)
    {
        return Pinyin::setLoader($loader)->sentence($string, $delimiter, $option);
    }
}