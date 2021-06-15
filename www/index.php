<?php
spl_autoload_register(function ($class) {
    $ds = DIRECTORY_SEPARATOR;
    $filename = $_SERVER['DOCUMENT_ROOT'] . $ds . str_replace('\\', $ds, $class) . '.php';
    require($filename);
});

use controllers\NewsController;

$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/news/') {
    $page = 1;
    $controller = new NewsController;
    $controller->actionList($page);
}

if (preg_match('{news/page-(\d+)/$}', $uri, $matches)) {
    $controller = new NewsController;
    $page = $matches[1];
    $controller->actionList($page);
} else $page = 1;

if (preg_match('{news/(\d+)/$}', $uri, $matches)) {
    $id = $matches[1];
    $controller = new NewsController;
    $controller->actionDetail($id);
}
