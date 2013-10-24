YouTube-dl-php
==============
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

##Examples

###Download
```php
use Youtubedl\Youtubedl;

$youtubedl=new Youtubedl();
$youtubedl->getFilesystemOption()
          ->setOutput("\"/tmp/%(title)s.%(ext)s\"");
$youtubedl->download('BaW_jenozKc');
```

###Multiple Download
```php
use Youtubedl\Youtubedl;

$youtubedl=new Youtubedl();
$youtubedl->getFilesystemOption()
          ->setOutput("\"/tmp/%(title)s.%(ext)s\"");
$youtubedl->download(array('BaW_jenozKc','dOibtqWo6z4'));
```

###Extractor List

```php
use Youtubedl\Youtubedl;

$youtubedl=new Youtubedl();
$youtubedl->getOption()
          ->getExtractors();
var_dump($youtubedl->execute());
```

###Extractor Descriptions

```php
use Youtubedl\Youtubedl;

$youtubedl=new Youtubedl();
$youtubedl->getOption()
          ->getExtractorDescriptions();
var_dump($youtubedl->execute());
```

###User Agent

```php
use Youtubedl\Youtubedl;

$youtubedl=new Youtubedl();
$youtubedl->getOption()
		  ->setUserAgent('Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14')	
          ->getUserAgent();
var_dump($youtubedl->execute());
```