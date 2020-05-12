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

namespace MuCTS\Laravel\Pinyin\Providers;


use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use MuCTS\Laravel\Pinyin\Pinyin;

class PinyinServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/../config/pinyin.php', 'pinyin'
        );
        $this->app->singleton(Pinyin::class, function ($app) {
            return new Pinyin($app->config['pinyin']);
        });
        $this->app->alias(Pinyin::class, 'pinyin');
    }

    public function boot()
    {
        if (!file_exists(config_path('pinyin.php'))) {
            $this->publishes([
                dirname(__DIR__) . '/../config/pinyin.php' => config_path('pinyin.php'),
            ], 'config');
        }
    }

    public function provides()
    {
        return [Pinyin::class, 'pinyin'];
    }
}