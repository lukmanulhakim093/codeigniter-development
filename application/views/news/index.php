<div class="container-fluid bg-transparent">
        <div class="container">

                <h2><?= $title; ?></h2>
                <hr>
                <?php foreach ($news as $news_item) : ?>

                        <div class="card">
                                <div class="card-body main text-justify mb-2">
                                        <h3><?= $news_item['title']; ?></h3>
                                        <?= $news_item['preview']; ?>
                                </div>
                        </div>

                        <p><a class="btn btn-outline-info mt-2" href="<?= site_url('news/' . $news_item['slug']); ?>">View article</a></p>
                <?php endforeach; ?>
        </div>
</div>