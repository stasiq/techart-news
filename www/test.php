<?php

use classes\Db;
use models\NewsModel;

error_reporting(-1);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once 'inc/header.php';
require 'inc/config.php';
require 'models/NewsModel.php';
$db1 = Db::getConnec();
$db2 = Db::getConnec();

echo '<pre>';

var_dump($db1 == $db2);
echo '</pre>';
echo '<hr>';

$row = newsModel::getList($limit, $offset);
$arrRow = (array) $row;
echo '<pre>';
var_dump($arrRow['idate']);
echo '</pre>';

// $url = $_SERVER['HTTP_HOST'] . '/news.php?page=' . $matches[1];
// $page = isset($_GET['page']) ? $_GET['page'] : 1;
// $id = isset($_GET['id']) ? $_GET['id'] : 1;