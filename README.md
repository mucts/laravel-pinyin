# laravel-pinyin
Chinese to Pinyin translator for Laravel 7 based on [mucts/pinyin](https://github.com/mucts/pinyin).

[![Build Status](https://scrutinizer-ci.com/g/mucts/laravel-pinyin/badges/build.png)](https://scrutinizer-ci.com/g/mucts/laravel-pinyin)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/mucts/laravel-pinyin/badges/code-intelligence.svg)](https://scrutinizer-ci.com/g/mucts/laravel-pinyin)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mucts/laravel-pinyin/badges/quality-score.png)](https://scrutinizer-ci.com/g/mucts/laravel-pinyin)
[![Latest Stable Version](https://poser.pugx.org/mucts/laravel-pinyin/v/stable.svg)](https://packagist.org/packages/mucts/laravel-pinyin) 
[![Total Downloads](https://poser.pugx.org/mucts/laravel-pinyin/downloads.svg)](https://packagist.org/packages/mucts/laravel-pinyin) 
[![Latest Unstable Version](https://poser.pugx.org/mucts/laravel-pinyin/v/unstable.svg)](https://packagist.org/packages/mucts/laravel-pinyin) 
[![License](https://poser.pugx.org/mucts/laravel-pinyin/license.svg)](https://packagist.org/packages/mucts/laravel-pinyin)


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

There are more convenient functions:

|  function      | method                                                |
| -------------  | --------------------------------------------------- |
| `pinyin(string $str, int $option, $loader)`     | `Pinyin::setLoader($loader)->convert($str, $option)`                              |
| `pinyin_abbr(string $str, string $delimiter, int $option, $loader)`     | `Pinyin::setLoader($loader)->abbr($str, $delimiter, $option)`                                        |
| `pinyin_permalink(string $str, $delimiter, int $option, $loader)` | `Pinyin::setLoader($loader)->permalink($str, $delimiter, $option)`                         |
| `pinyin_sentence($string, $delimiter, $option, $loader)` | `Pinyin::setLoader($loader)->sentence($string, $delimiter, $option)`                         |

```php
var_dump(pinyin('带着希望去旅行，比到达终点更美好'));
// ["dai", "zhe", "xi", "wang", "qu", "lv", "xing", "bi", "dao", "da", "zhong", "dian", "geng", "mei", "hao"]

var_dump(pinyin_abbr('带着希望去旅行'));
// dzxwqlx
...
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
