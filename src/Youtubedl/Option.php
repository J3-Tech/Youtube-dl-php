<?php

namespace Youtubedl;

/**
 * @method Option setOutput(string $output)
 * @method Option getListExtractors()
 * @method Option getExtractorDescriptions()
 * @method Option setUserAgent(string $userAgent)
 * @method Option dumpUserAgent()
 */
class Option
{
    protected $options = [];

    public function __call($method, $args)
    {
        $cleanMethod = lcfirst(preg_replace('/get|set/', null, $method));
        if (preg_match_all('/[A-Z]/', $cleanMethod, $uppers)) {
            foreach (current($uppers) as $key => $upper) {
                $cleanMethod = str_replace($upper, '-'.strtolower($upper), $cleanMethod);
            }
        }
        $this->options[$cleanMethod] = '"'.current($args).'"';

        return $this;
    }

    public function format()
    {
        $output = '';
        foreach ($this->options as $key => $option) {
            $output .= "--{$key} {$option} ";
        }

        return $output;
    }

    public function __toString()
    {
        return $this->format();
    }
}
