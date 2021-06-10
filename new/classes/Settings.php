<?php

namespace classes;

use PDO;

class Settings
{
    public static $driver = 'mysql';
    public static $host = 'localhost';
    public static $db_name = 'news';
    public static $db_user = 'root';
    public static $db_pass = 'root';
    public static $charset = 'utf8';
    public static $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
}
