<?php
require_once 'inc/header.php';
require_once 'inc/config.php';
spl_autoload_register(function ($class) {
    $ds = DIRECTORY_SEPARATOR;
    $filename = $_SERVER['DOCUMENT_ROOT'] . $ds . str_replace('\\', $ds, $class) . '.php';
    require($filename);
});

?>

<body>
    <div class="container">
        <?php
        ?>
        <div class="news">
            <h1>Новости</h1>
            <hr class="hr-dotted ">

            <?php
            $rows = models\NewsModel::getList($limit, $offset);
            foreach ($rows as $row) {
            ?>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row card__item">
                            <span class="card__date"><?= date('d.m.Y', $row->idate); ?></span>
                            <a class="card__title m-0" href="/view.php?id=<?= $row->id ?>&page=<?= $page ?>"><?= $row->title ?></a>
                        </div>

                        <p class="card__text"><?= $row->announce ?></p>
                    </div>
                </div>


            <?php
            }
            ?>

            <hr class="hr-dotted hr-nav">
            <nav>
                <ul class="pagination d-flex flex-wrap">
                    <?php

                    $count = models\NewsModel::getCount();
                    $total_pages = ceil($count / $limit);
                    for ($i = 1; $i <= $total_pages; $i++) {
                        if ($i == $page) {
                            $state = "disabled active";
                        } elseif ($i != $page) {
                            $state = "";
                        }
                    ?>
                        <li class='page-item <?= $state ?>'><a class='page-linkk' href='/news.php?page=<?= $i ?>'><?= $i ?></a></li>
                    <?php
                    };
                    ?>
                </ul>
            </nav>
        </div>

    </div>

    </html>
    </div>

    <?php require_once 'inc/footer.php'; ?>