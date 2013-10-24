<?php
require_once __DIR__.'/../vendor/autoload.php';

use Youtubedl\Youtubedl;

$youtubedl=new Youtubedl();
$youtubedl->getFilesystemOption()->setOutput("\"/tmp/%(title)s.%(ext)s\"");
$youtubedl->download('BaW_jenozKc');
$youtubedl->getOption()->getExtractors();
var_dump($youtubedl->execute());
