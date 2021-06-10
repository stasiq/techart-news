    <div class="container">
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $limit = 5;
        $offset = $limit * ($page - 1);


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