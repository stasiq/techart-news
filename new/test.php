<?php

use classes\Db;
use models\NewsModel;


error_reporting(-1);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

use controllers\ShowNews;

$a = showNews::getPage();
var_dump($a);
