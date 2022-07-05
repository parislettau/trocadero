<div class="main-card-box">
        <?php foreach($site->grandChildren()->listed()->limit(4) as $item): ?>
                <div class="card-tile">
                        <div class="fill-img">
                                <a href="<?= $item->url() ?>">
                                        <?= $item->image() ?>
                                </a>
                                <div class="image-info">
                                        <span><?= $item->title() ?> <?= $item->artist() ?> <?= $item->date() ?> <?= $item->gallery() ?></span>
                                </div>
                        </div>
                </div>
                
        <?php endforeach ?>
</div>
