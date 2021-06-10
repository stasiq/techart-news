<?php

namespace models;

use classes\Db;
use PDO;

class NewsModel
{
    public static function getItem($id)
    {
        $db = Db::getConnect();
        $query = $db->query("SELECT * FROM news WHERE id = $id");
        $row = $query->fetch(PDO::FETCH_OBJ);
        return $row;
    }
    public static function getCount()
    {
        $db = Db::getConnect();
        $query = $db->query("SELECT COUNT(*) as count FROM news");
        $count = $query->fetchColumn();
        return $count;
    }
    public static function getList($limit, $offset)
    {
        $db = Db::getConnect();
        $query = $db->query("SELECT * FROM news ORDER BY idate DESC LIMIT $limit OFFSET $offset");
        $rows = [];
        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            $rows[] = $row;
        }
        return $rows;
    }
}
