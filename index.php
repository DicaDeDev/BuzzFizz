<?php

require 'vendor/autoload.php';

use Project\BuzzFizz\BuzzFizz;

$given = [0, 1, 3, 5, 6, 9, 10, 15];

$buzzFizz = new BuzzFizz($given);
$result = $buzzFizz->result;

var_dump($result);