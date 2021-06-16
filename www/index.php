<?php
spl_autoload_register(function ($class) {
    $ds = DIRECTORY_SEPARATOR;
    $filename = $_SERVER['DOCUMENT_ROOT'] . $ds . str_replace('\\', $ds, $class) . '.php';
    require($filename);
});

use controllers\NewsController;

$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/news/') {
    $args[] = 1;
    $controller = 'NewsController';
    $action = 'ActionList';
}

if (preg_match('{news/page-(\d+)/$}', $uri, $matches)) {
    $args[] = $matches[1];
    $controller = 'NewsController';
    $action = 'ActionList';
}

if (preg_match('{news/(\d+)/$}', $uri, $matches)) {
    $args[] = $matches[1];
    $controller = 'NewsController';
    $action = 'ActionDetail';
}



call_user_func_array(['controllers\\' . $controller, $action], $args);
