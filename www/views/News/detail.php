<div class="container">
    <div class="item card">
        <div class="news">
            <div class="col-md-12 card-body">
                <div class="d-flex flex-item">
                    <h4 class="card__title"><?= $params['item']->title ?></h4>
                </div>
                <hr class="hr-dotted ">
                <p class="card__text"><?= $params['item']->content ?></p>
                <hr class="hr-dotted ">
                <a href='/news/'> Все новости >></a>
            </div>
        </div>
    </div>
</div>