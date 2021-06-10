<div class="container">

    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $id = isset($_GET['id']) ? $_GET['id'] : 1;
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