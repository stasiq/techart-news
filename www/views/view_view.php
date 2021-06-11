<div class="container">
    <div class="row card">
        <div class="news">
            <div class="col-md-12 card-body">
                <div class="d-flex flex-row">
                    <h4 class="card__title"><?= $row->title ?></h4>
                </div>
                <hr class="hr-dotted ">
                <p class="card__text"><?= $row->content ?></p>
                <hr class="hr-dotted ">
                <a href='/news/'> Все новости >></a>
            </div>
        </div>
    </div>
</div>