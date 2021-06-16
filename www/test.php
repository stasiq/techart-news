<?php

error_reporting(-1);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

spl_autoload_register(function ($class) {
    $ds = DIRECTORY_SEPARATOR;
    $filename = $_SERVER['DOCUMENT_ROOT'] . $ds . str_replace('\\', $ds, $class) . '.php';
    require($filename);
});

use classes\Db;
use models\NewsModel;



// use controllers\NewsController;


var_dump(__NAMESPACE__);

// $id = 32;
$controller = 'controllers\NewsController';
call_user_func_array([$controller, "test"], ['call']);



function foobar($arg, $arg2)
{
    echo __FUNCTION__, " got $arg and $arg2\n";
}
class foo
{
    function bar($arg, $arg2)
    {
        echo __METHOD__, " got $arg and $arg2\n";
    }
}


// Вызываем функцию foobar() с 2 аргументами
call_user_func_array("foobar", array("one", "two"));

// Вызываем метод $foo->bar() с 2 аргументами
$foo = new foo;
call_user_func_array(array($foo, "bar"), array("three", "four"));


// call_user_func_array([$controller, "action" . $action], [$args]);
// $url = $_SERVER['HTTP_HOST'] . '/news.php?page=' . $matches[1];
// $page = isset($_GET['page']) ? $_GET['page'] : 1;
// $id = isset($_GET['id']) ? $_GET['id'] : 1;


    // header('Location:./404.php');
