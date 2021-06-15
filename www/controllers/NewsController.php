<?php

namespace controllers;

use models\NewsModel;

class NewsController
{
    public $page = 1;
    public $id;
    public $row;
    public $content;
    public $title;
    public  function actionList($page)
    {
        $title = 'Новости';
        $limit = 5;
        $offset = $limit * ($page - 1);
        $rows = NewsModel::getList($limit, $offset);
        $count = NewsModel::getCount();
        ob_start();
        include('views/News/list.php');
        $out = ob_get_clean();
        include('views/layout.php');
    }
    public function actionDetail($id)
    {
        $this->row = NewsModel::getItem($id);
        $row = $this->row;
        include('views/News/detail.php');
        ob_start();
        $out = ob_get_clean();
        include('views/layout.php');
    }
}
