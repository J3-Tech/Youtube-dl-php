# YouTube-dl-php

[![Latest Stable Version](https://poser.pugx.org/chellem/youtube-downloader/v/stable)](https://packagist.org/packages/chellem/youtube-downloader)
[![Total Downloads](https://poser.pugx.org/chellem/youtube-downloader/downloads)](https://packagist.org/packages/chellem/youtube-downloader)
[![Latest Unstable Version](https://poser.pugx.org/chellem/youtube-downloader/v/unstable)](https://packagist.org/packages/chellem/youtube-downloader)
[![License](https://poser.pugx.org/chellem/youtube-downloader/license)](https://packagist.org/packages/chellem/youtube-downloader)
[![composer.lock](https://poser.pugx.org/chellem/youtube-downloader/composerlock)](https://packagist.org/packages/chellem/youtube-downloader)

This library is a PHP implementation of [Youtube-dl](https://github.com/rg3/youtube-dl) for downloading video from Youtube and other sites.

## Installation
[Youtube-dl](https://github.com/rg3/youtube-dl) has must be installed first.

Installation using [Composer](https://getcomposer.org):

```json
{
    "require": {
        "chellem/youtube-downloader": "dev-master"
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
