<?php
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$limit = 5;
$offset = $limit * ($page - 1);
