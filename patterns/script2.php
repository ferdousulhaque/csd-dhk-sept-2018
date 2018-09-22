<?php
include_once ("DB.php");

$db = MizanDB::getInstance();
var_dump($db);
$db->query("select * from test");
