<?php

namespace Youtubedl\Option;

abstract class AbstractOption
{
    public function format()
    {
        $output='';
        foreach (get_object_vars($this) as $key=>$var) {
            $option=$key;
            if (preg_match_all("/[A-Z]/",$key,$upper)) {
                foreach ($upper[0] as $value) {
                    $option=str_replace($value,'-'.strtolower($value),$option);
                }
            }
            if ($this->$key===true) {
                $output.="--{$option} ";
            } elseif ($this->$key) {
                $output.="--{$option} {$this->$key} ";
            }
        }

        return $output;
    }

    public function __toString()
    {
        return $this->format();
    }
}
