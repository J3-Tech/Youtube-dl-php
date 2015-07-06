<?php

namespace Youtubedl\Exceptions;

class YoutubedlException extends \RuntimeException
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
