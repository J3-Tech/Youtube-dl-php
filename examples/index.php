<?php
require_once __DIR__.'/../vendor/autoload.php';

use Youtubedl\Youtubedl;

$youtubedl=new Youtubedl("BaW_jenozKc");
$youtubedl->isAsync()->download();