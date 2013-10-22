YouTube-dl-php
==============
This library is a PHP implementation of [Youtube-dl](https://github.com/rg3/youtube-dl) for downloading video from Youtube and other sites.

## Installation

Installation using [Composer](https://getcomposer.org):

```json
{
    "require": {
        "chellem/youtube-downloader": "dev-master"
    }
}
```


##Examples
```php
use Youtubedl\Youtubedl;

$youtubedl=new Youtubedl();
$youtubedl->getFilesystemOption()
          ->setOutput("\"/tmp/%(title)s.%(ext)s\"");
$youtubedl->download('BaW_jenozKc');
```
