<?php

Class RPN
{

    public function solve($str)
    {
        $tmp = explode(" ", $str);

        $stack = [];

        foreach($tmp as $oper) {
            if(is_numeric($oper)) {
                array_push($stack,$oper);
            } else {
                $numberTwo = array_pop($stack);
                $numberOne = array_pop($stack);
                $result = 0;
                if($oper == "+") {
                    $result = $numberOne+$numberTwo;
                } else if($oper == "-") {
                    $result = $numberOne-$numberTwo;
                } else if($oper == "*") {
                    $result = $numberOne*$numberTwo;
                }

                array_push($stack, $result);
            }
        }

        return array_pop($stack);

    }

}