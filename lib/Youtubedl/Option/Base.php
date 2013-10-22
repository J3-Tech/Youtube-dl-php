<?php

namespace Youtubedl\Option;

abstract class Base
{
    public function format($obj)
    {
        $output='';
        foreach (get_object_vars($obj) as $key=>$var) {
            $option=$key;
            if (preg_match_all("/[A-Z]/",$key,$upper)) {
                foreach ($upper[0] as $value) {
                    $option=str_replace($value,'-'.strtolower($value),$option);
                }
            }
            if ($obj->$key===true) {
            	$output.="--{$option} ";
            }elseif($obj->$key){
                $output.="--{$option} {$obj->$key} ";
            }
        }

        return $output;
    }
}
