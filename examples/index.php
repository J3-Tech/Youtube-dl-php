<?php

require_once __DIR__.'/../vendor/autoload.php';

use Youtubedl\Youtubedl;

$youtubedl = new Youtubedl();
$youtubedl->getOption()
        ->setOutput("'/tmp/%(title)s.%(ext)s'");
$youtubedl->isVerbose(true)
        ->download('BaW_jenozKc')
        ->getOption()
        ->getListExtractors();
print_r($youtubedl->execute());

$youtubedl->getOption()
        ->getExtractorDescriptions();
print_r($youtubedl->execute());

$youtubedl->getOption()
        ->setUserAgent('Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14')
        ->dumpUserAgent();
print_r($youtubedl->execute());
