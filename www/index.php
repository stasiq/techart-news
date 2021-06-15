<?php
error_reporting(-1);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/news/') {
    $page = 1;
    require 'news.php';
}

if (preg_match('{news/page-(\d+)/$}', $uri, $matches)) {
    $page = $matches[1];
    require 'news.php';
} else $page = 1;
if (preg_match('{news/(\d+)/$}', $uri, $matches)) {
    $id = $matches[1];
    require 'view.php';
}
