<?php

namespace controllers;

class ShowNews
{

    public static $limit = 5;


    static function getPage()
    {

        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        return $page;
    }

    static function getId()
    {

        $id  = isset($_GET['id']) ? $_GET['id'] : 1;
        return $id;
    }

    static function getOffset()
    {

        $page = self::getPage();
        $offset = self::$limit * ($page - 1);
        return $offset;
    }
}
