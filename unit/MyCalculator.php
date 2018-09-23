<?php

Class MyCalculator
{
    public function add($a, $b)
    {
        if(!is_numeric($a) || !is_numeric($b))
            return false;

        return $a+$b;
    }

}