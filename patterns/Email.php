<?php
include "StrategyInterface.php";

Class Email implements StrategyInterface
{
    public function send()
    {
        return true;
    }
}