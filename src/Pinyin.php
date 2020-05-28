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

use Exception;
use Illuminate\Support\Arr;
use MuCTS\Pinyin\Interfaces\DictLoader;
use MuCTS\Pinyin\Pinyin as Accessor;

/**
 * Class Pinyin
 * @package MuCTS\Laravel\Pinyin
 */
class Pinyin extends Accessor
{
    private string $default;

    public function __construct(?array $config = null)
    {
        $this->default = Arr::get($config, 'default');
        $this->alias = Arr::wrap(Arr::get($config, 'alias')) + $this->alias;
        parent::__construct(Arr::get($config, 'default'), Arr::get($config, 'data'));
    }

    /**
     * Loader setter
     *
     * @param DictLoader|string|null $loader
     * @return $this
     * @throws Exception
     */
    public function setLoader($loader = null)
    {
        $loader = $loader ?? $this->default;
        parent::setLoader($loader);
        return $this;
    }
}