<?php
require_once __DIR__.'/../vendor/autoload.php';

use Youtubedl\Youtubedl;

$youtubedl=new Youtubedl("BaW_jenozKc");
print_r($youtubedl->isVerbose(false)->setOutput("/tmp")->download('BaW_jenozKc'));