<?php
error_reporting(-1);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
echo 'index';
$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/news/') {
    require 'news.php';
}

if (preg_match('{^news/page-(\d+)/$}', $uri, $matches)) {

    echo '<pre>';
    echo var_dump($matches);
    echo '</pre>';
}

//<?php
// $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// $segments = explode('/', trim($uri, '/'));

// if ($segments[0] === 'admin') {
//     if ($segments[1] === 'users')
//         $file = 'admin_users.php';
//     elseif ($segments[1] === 'products')
//         $file = 'admin_products.php';
//     else
//         $file = 'admin_404.php';
// } else {
//     if ($uri === '/')
//         $file = 'main.php';
//     elseif ($uri === '/about')
//         $file = 'about.php';
//     else
//         $file = '404.php';
// }

// require 'pages/' . $file;