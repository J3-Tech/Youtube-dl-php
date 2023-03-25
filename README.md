# YouTube-dl-php

[![Test](https://github.com/J3-Tech/Youtube-dl-php/actions/workflows/test.yml/badge.svg)](https://github.com/J3-Tech/Youtube-dl-php/actions/workflows/test.yml)
[![PHPMD](https://github.com/J3-Tech/Youtube-dl-php/actions/workflows/phpmd.yml/badge.svg)](https://github.com/J3-Tech/Youtube-dl-php/actions/workflows/phpmd.yml)
[![codecov](https://codecov.io/gh/J3-Tech/Youtube-dl-php/branch/master/graph/badge.svg?token=IlyZn4cNLS)](https://codecov.io/gh/J3-Tech/Youtube-dl-php)
[![Total Downloads](https://poser.pugx.org/chellem/youtube-downloader/downloads)](https://packagist.org/packages/chellem/youtube-downloader)


This library is a PHP implementation of [Youtube-dl](https://github.com/yt-dlp/yt-dlp) for downloading video from Youtube and other streaming sites.

## Installation
[Youtube-dl](https://github.com/rg3/youtube-dl) has must be installed first.

Installation using [Composer](https://getcomposer.org):

```json
{
    "require": {
        "chellem/youtube-downloader": "^2"
    }
}
```

## Examples
### Download

```php
use Youtubedl\Youtubedl;

$youtubedl=new Youtubedl();
$youtubedl->getOption()
          ->setOutput("\"/tmp/%(title)s.%(ext)s\"");
$youtubedl->download('BaW_jenozKc')
          ->execute();
```

### Multiple Download

```php
use Youtubedl\Youtubedl;

$youtubedl=new Youtubedl();
$youtubedl->getOption()
          ->setOutput("\"/tmp/%(title)s.%(ext)s\"");
$youtubedl->download(array('BaW_jenozKc','dOibtqWo6z4'))
          ->execute();
```

### Extractor List

```php
use Youtubedl\Youtubedl;

$youtubedl=new Youtubedl();
$youtubedl->getOption()
          ->getListExtractors();
echo $youtubedl->execute();
```

### Extractor Descriptions

```php
use Youtubedl\Youtubedl;

$youtubedl=new Youtubedl();
$youtubedl->getOption()
          ->getExtractorDescriptions();
echo $youtubedl->execute();
```

### User Agent

```php
use Youtubedl\Youtubedl;

$youtubedl=new Youtubedl();
$youtubedl->getOption()
          ->setUserAgent('Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14')
          ->dumpUserAgent();
echo $youtubedl->execute();
```
