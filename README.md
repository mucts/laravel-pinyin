<p align="center"><img src="https://images.mucts.com/image/mcts.png" width="400"></p>
<p align="center">
    <a href="https://scrutinizer-ci.com/g/mucts/laravel-pinyin"><img src="https://scrutinizer-ci.com/g/mucts/laravel-pinyin/badges/build.png" alt="Build Status"></a>
    <a href="https://scrutinizer-ci.com/g/mucts/laravel-pinyin"><img src="https://scrutinizer-ci.com/g/mucts/laravel-pinyin/badges/code-intelligence.svg" alt="Code Intelligence Status"></a>
    <a href="https://scrutinizer-ci.com/g/mucts/laravel-pinyin"><img src="https://scrutinizer-ci.com/g/mucts/laravel-pinyin/badges/quality-score.png" alt="Scrutinizer Code Quality"></a>
    <a href="https://packagist.org/packages/mucts/laravel-pinyin"><img src="https://poser.pugx.org/mucts/laravel-pinyin/d/total.svg" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/mucts/laravel-pinyin"><img src="https://poser.pugx.org/mucts/laravel-pinyin/v/stable.svg" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/mucts/laravel-pinyin"><img src="https://poser.pugx.org/mucts/laravel-pinyin/license.svg" alt="License"></a>
</p>

# laravel-pinyin
Chinese to Pinyin translator for Laravel 7 based on [mucts/pinyin](https://github.com/mucts/pinyin).

## Install

```shell
composer require mucts/laravel-pinyin
```

## Usage

you can get the instance of `MuCTS\Pinyin\Pinyin` from app container:

```php

$pinyin = app('pinyin');
echo $pinyin->sentence('带着希望去旅行，比到达终点更美好');
// dài zhe xī wàng qù lǔ xíng, bǐ dào dá zhōng diǎn gèng měi hǎo
```

Using facade:

```php
use Pinyin; // Facade class, NOT MuCTS\Pinyin\Pinyin

var_dump(Pinyin::convert('带着希望去旅行'));
// ["dai", "zhe", "xi", "wang", "qu", "lv", "xing"]

echo Pinyin::sentence('带着希望去旅行，比到达终点更美好');
// dài zhe xī wàng qù lǔ xíng, bǐ dào dá zhōng diǎn gèng měi hǎo

```

About `mucts/pinyin` specific configuration and use, refer to: [mucts/pinyin](https://github.com/mucts/pinyin)

## License

MIT
