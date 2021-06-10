<?php require_once 'inc/header.php';
require 'inc/config.php';

spl_autoload_register(function ($class) {
    $ds = DIRECTORY_SEPARATOR;
    $filename = $_SERVER['DOCUMENT_ROOT'] . $ds . str_replace('\\', $ds, $class) . '.php';
    require($filename);
});
?>

<?php error_reporting(-1); ?>
<div class="container">

    <?php
    $row = models\NewsModel::getItem($id);
    ?>

    <div class="row card">
        <div class="news">
            <div class="col-md-12 card-body">
                <div class="d-flex flex-row">
                    <h4 class="card__title"><?= $row->title ?></h4>
                </div>
                <hr class="hr-dotted ">
                <p class="card__text"><?= $row->content ?></p>
                <hr class="hr-dotted ">
                <a href='/news.php?page=<?= $page ?>'> Все новости >></a>
            </div>
        </div>
    </div>
</div>

<?php require_once 'inc/footer.php'; ?>