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
        if (is_array($loader)) {
            $loader = $loader['loaders'][$loader['default']];
        }
        parent::__construct($loader);
    }

    public function setLoader($loader): Pinyin
    {
        if (!is_null($loader)) {
            return new self($loader);
        }
        return $this;
    }
}