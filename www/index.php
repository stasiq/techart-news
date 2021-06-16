<?php
spl_autoload_register(function ($class) {
    $ds = DIRECTORY_SEPARATOR;
    $filename = $_SERVER['DOCUMENT_ROOT'] . $ds . str_replace('\\', $ds, $class) . '.php';
    require($filename);
});

$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/news/') {
    $args[] = 1;
    $controller = 'NewsController';
    $action = 'ActionList';
} else

if (preg_match('{news/page-(\d+)/$}', $uri, $matches)) {
    $args[] = $matches[1];
    $controller = 'NewsController';
    $action = 'ActionList';
} else

if (preg_match('{news/(\d+)/$}', $uri, $matches)) {
    $args[] = $matches[1];
    $controller = 'NewsController';
    $action = 'ActionDetail';
} else {
    header("HTTP/1.1 404 Not Found");
    exit();
}


call_user_func_array(['controllers\\' . $controller, $action], $args);
