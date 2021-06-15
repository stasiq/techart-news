<div class="container">
    <?php

    use controllers\NewsController;
    ?>
    <div class="news">
        <h1>Новости</h1>
        <hr class="hr-dotted ">

        <?php

        foreach ($items as $item) {
        ?>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-item card__item">
                        <div class="card__date"><span><?= date('d.m.Y', $item->idate); ?></span></div>
                        <a class="card__title m-0" href="/news/<?= $item->id ?>/"><?= $item->title ?></a>
                    </div>
                    <p class=" card__text"><?= $item->announce ?></p>
                </div>
            </div>


        <?php
        }
        ?>

        <hr class="hr-dotted hr-nav">
        <nav>
            <ul class="pagination d-flex flex-wrap">
                <?php

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