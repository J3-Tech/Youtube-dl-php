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
        $cleanMethod = lcfirst(preg_replace('/get|set/', '', $method));
        if (preg_match_all('/[A-Z]/', $cleanMethod, $uppers)) {
            if (!is_array($uppers)) {
                throw new \Exception('$uppers must be an array');
            }
            foreach (current($uppers) as $key => $upper) {
                $cleanMethod = str_replace($upper, '-'.strtolower($upper), $cleanMethod);
            }
        }
        $this->options[$cleanMethod] = current($args) ? '"'.current($args).'"' : null;

        return $this;
    }

    public function __toString()
    {
        return trim($this->format());
    }

    private function format()
    {
        $output = '';
        foreach ($this->options as $key => $option) {
            $output .= "--{$key} {$option} ";
        }

        return $output;
    }
}
