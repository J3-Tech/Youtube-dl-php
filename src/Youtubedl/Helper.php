<?php

namespace Youtubedl;

use Symfony\Component\Process\Process;

class Helper
{
    public static function runProcess(Process $process) {
        $process->run(function ($type, $buffer) {
            echo "{$type} > {$buffer}";
        });
    }
}