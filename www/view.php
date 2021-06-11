<?php
spl_autoload_register(function ($class) {
    $ds = DIRECTORY_SEPARATOR;
    $filename = $_SERVER['DOCUMENT_ROOT'] . $ds . str_replace('\\', $ds, $class) . '.php';
    require($filename);
});
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$limit = 5;
$offset = $limit * ($page - 1);
$title = 'Новость';
$row = models\NewsModel::getItem($id);
ob_start();
include('views/view_view.php');
$out = ob_get_clean();
include('views/layout.php');
