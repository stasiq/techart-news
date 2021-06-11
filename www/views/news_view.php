<div class="container">
    <?php
    ?>
    <div class="news">
        <h1>Новости</h1>
        <hr class="hr-dotted ">

        <?php

        foreach ($rows as $row) {
        ?>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row card__item">
                        <div class="card__date"><span><?= date('d.m.Y', $row->idate); ?></span></div>
                        <a class="card__title m-0" href="/news/<?= $row->id ?>/"><?= $row->title ?></a>
                    </div>
                    <p class=" card__text"><?= $row->announce ?></p>
                </div>
            </div>


        <?php
        }
        ?>

        <hr class="hr-dotted hr-nav">
        <nav>
            <ul class="pagination d-flex flex-wrap">
                <?php

                $total_pages = ceil($count / $limit);
                for ($i = 1; $i <= $total_pages; $i++) {
                    if ($i == $page) {
                        $state = "disabled active";
                    } elseif ($i != $page) {
                        $state = "";
                    }
                ?>
                    <li class='page-item <?= $state ?>'><a class='page-linkk' href='/news/page-<?= $i ?>/'><?= $i ?></a></li>
                <?php
                };
                ?>
            </ul>
        </nav>
    </div>

</div>

</html>
</div>