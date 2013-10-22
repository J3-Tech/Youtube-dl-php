<?php
require_once __DIR__.'/../vendor/autoload.php';

use Youtubedl\Youtubedl;

$youtubedl=new Youtubedl();
//print_r($youtubedl->isVerbose(false)->setOutput("/tmp")->download('BaW_jenozKc'));

//print_r($youtubedl->getAuthenticationOption());
echo $youtubedl->getDownloadOption();