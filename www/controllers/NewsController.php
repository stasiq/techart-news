<?php

namespace controllers;

use models\NewsModel;

class NewsController
{

    public  function actionList($page)
    {
        $params['title'] = 'Новости';
        $limit = 5;
        $offset = $limit * ($page - 1);
        $params['items'] = NewsModel::getList($limit, $offset);
        $count = NewsModel::getCount();
        $params['total_pages'] = ceil($count / $limit);
        $params['page'] = $page;
        $view = 'views/News/list.php';
        $this->render($view, $params);
    }
    public function actionDetail($id)
    {
        $item = NewsModel::getItem($id);
        $params['title'] = 'Новость';
        $params['item'] = $item;
        $view = 'views/News/detail.php';
        $this->render($view, $params);
    }
    public  function render($view, $params)
    {
        extract($params);
        ob_start();
        include($view);
        $content = ob_get_clean();
        include('views/layout.php');
    }
}
