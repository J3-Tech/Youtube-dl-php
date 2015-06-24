<?php

namespace Youtubedl;

class Config
{
	public static function makeBinDirectory()
	{
		$binDirectory=self::getBinDirectory();
		if(!(file_exists($binDirectory) && is_dir($binDirectory))){
			mkdir($binDirectory);
		}
	}

	public static function getBinDirectory()
	{
		$rootDirectory=realpath(__DIR__.'/../../');

		return "{$rootDirectory}/bin";
	}

	public static function getBinFile()
	{
		return self::getBinDirectory().'/Youtubedl';
	}
}