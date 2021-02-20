<?php 

require_once("singletone.php");

class TestSingletone {
    public $randomNumber;

    use singletone;
}

$test1 = TestSingletone::getInstance();
$test1->$randomNumber = 10;
var_dump($test1->$randomNumber);

$test2 = TestSingletone::getInstance();
var_dump($test2->$randomNumber);
