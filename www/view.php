<?php
spl_autoload_register(function ($class) {
    $ds = DIRECTORY_SEPARATOR;
    $filename = $_SERVER['DOCUMENT_ROOT'] . $ds . str_replace('\\', $ds, $class) . '.php';
    require($filename);
});

$title = 'Новость';
$row = models\NewsModel::getItem($id);
ob_start();
include('views/view_view.php');
$out = ob_get_clean();
include('views/layout.php');
