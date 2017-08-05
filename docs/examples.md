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
