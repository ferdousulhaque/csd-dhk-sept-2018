<?php

include_once ("DB.php");
include ("script2.php");

$db = MizanDB::getInstance();
var_dump($db);

//$newDB = clone $db;
//var_dump($newDB);

$newStr = serialize($db);

$thirdDB = unserialize($newStr);
var_dump($thirdDB);

$db->query("select * from test");


