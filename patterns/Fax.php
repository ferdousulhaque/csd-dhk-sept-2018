<?php
include "StrategyInterface.php";

Class Fax implements StrategyInterface
{
    public function send()
    {
        return true;
    }
}