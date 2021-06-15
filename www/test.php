<?php

use classes\Db;
use models\NewsModel;


error_reporting(-1);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

use controllers\NewsController;

spl_autoload_register(function ($class) {
    $ds = DIRECTORY_SEPARATOR;
    $filename = $_SERVER['DOCUMENT_ROOT'] . $ds . str_replace('\\', $ds, $class) . '.php';
    require($filename);
});

$id = 32;
$controller = new NewsController;
$content = $controller->actionDetail($id);
echo $content;
// $url = $_SERVER['HTTP_HOST'] . '/news.php?page=' . $matches[1];
// $page = isset($_GET['page']) ? $_GET['page'] : 1;
// $id = isset($_GET['id']) ? $_GET['id'] : 1;