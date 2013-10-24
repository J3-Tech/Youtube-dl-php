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