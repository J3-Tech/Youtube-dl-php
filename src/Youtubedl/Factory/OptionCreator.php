<?php

namespace Youtubedl\Factory;

use ReflectionClass;

class OptionCreator extends AbstractCreator
{
	private static $instance;

	public static function getInstance()
	{
		if(!self::$instance){
			self::$instance=new Self();
		}

		return self::$instance;
	}

	public function create($name)
	{
		$class="Youtubedl\\Option\\{$name}";

		$reflectionClass=new ReflectionClass($class);

		return $reflectionClass->newInstance();
	}
}