<?php

require_once __DIR__.'/../vendor/autoload.php';

use Youtubedl\Youtubedl;

$youtubedl = new Youtubedl();
$youtubedl->getOption()
       ->setOutput("./tmp/%(title)s.%(ext)s");
$youtubedl->getOption()
       ->extractAudio()
       ->setAudioFormat("mp3");
$youtubedl->isVerbose(true)
        ->download('https://www.youtube.com/watch?v=BaW_jenozKc')->execute();

$youtubedl
         ->getOption()
         ->getListExtractors();
foreach ($youtubedl->execute() as $output) {
    echo "{$output}\n";
}

$youtubedl->getOption()
        ->getExtractorDescriptions();
foreach ($youtubedl->execute() as $output) {
    echo "{$output}\n";
}
$youtubedl->getOption()
        ->setUserAgent('Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14')
        ->dumpUserAgent();
foreach ($youtubedl->execute() as $output) {
    echo "{$output}\n";
}
