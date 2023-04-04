## Examples
### Download

```php
use Youtubedl\Youtubedl;

$youtubedl=new Youtubedl();
$youtubedl->getOption()
          ->setOutput("\"/tmp/%(title)s.%(ext)s\"");
$youtubedl->download('https://www.youtube.com/watch?v=BaW_jenozKc')
          ->execute();
```

### Multiple Download

```php
use Youtubedl\Youtubedl;

$youtubedl=new Youtubedl();
$youtubedl->getOption()
          ->setOutput("\"/tmp/%(title)s.%(ext)s\"");
$youtubedl->download([
    'https://www.youtube.com/watch?v=BaW_jenozKc',
    'https://www.youtube.com/watch?v=dOibtqWo6z4'
])->execute();
```

### Audio Extract

```php
$youtubedl = new Youtubedl();
$youtubedl->getOption()
          ->setOutput("./tmp/%(title)s.%(ext)s");
$youtubedl->getOption()
          ->extractAudio()
          ->setAudioFormat("mp3");
$youtubedl->isVerbose(true)
          ->download('https://www.youtube.com/watch?v=BaW_jenozKc')
          ->execute();
```
