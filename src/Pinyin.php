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
use MuCTS\Pinyin\Interfaces\DictLoader;
use MuCTS\Pinyin\Pinyin as Accessor;

/**
 * Class Pinyin
 * @package MuCTS\Laravel\Pinyin
 */
class Pinyin extends Accessor
{
    private array $config;

    public function __construct(?array $config = null)
    {
        $this->config = $config ?? Arr::wrap(config('pinyin'));
        parent::__construct(Arr::get($this->config, 'default'), Arr::get($this->config, 'data'));
    }

    /**
     * Loader setter
     *
     * @param DictLoader|string|null $loader
     * @return $this
     */
    public function setLoader($loader = null): self
    {
        $loader = is_string($loader) ? Arr::get($this->config, 'loaders.' . $loader, $loader) : $loader;
        return parent::setLoader($loader);
    }
}