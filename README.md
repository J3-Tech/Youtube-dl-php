# YouTube-dl-php

[![Join the chat at https://gitter.im/labzone/Youtube-dl-php](https://badges.gitter.im/labzone/Youtube-dl-php.svg)](https://gitter.im/labzone/Youtube-dl-php?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Build Status](https://travis-ci.org/labzone/Youtube-dl-php.svg?branch=master)](https://travis-ci.org/labzone/Youtube-dl-php) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/labzone/Youtube-dl-php/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/labzone/Youtube-dl-php/?branch=master) ![License](https://img.shields.io/badge/license-MIT-blue.svg)

This library is a PHP implementation of [Youtube-dl](https://github.com/rg3/youtube-dl) for downloading video from Youtube and other sites.

## Installation
[Youtube-dl](https://github.com/rg3/youtube-dl) has must be installed first.

Installation using [Composer](https://getcomposer.org):

```json
{
    "require": {
        "labzone/youtube-downloader": "dev-master"
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
