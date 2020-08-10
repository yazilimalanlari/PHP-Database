<?php

require __DIR__ . '/src/Database.php';


use \Database\Management as DB;
use \Database\Config as Config;

$db = new DB(Config::init(array(
    'host' => 'localhost',
    'port' => '3306',
    // 'dbname' => 'devdb',
    'charset' => 'utf8'
)));