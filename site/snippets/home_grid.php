<div class="main-card-box">
        <?php foreach ($site->find('program-exhibition')->children()->listed()->limit(4) as $program) : ?>
                <div class="card-tile">
                        <div class="fill-img">
                                <?php if ($program->cover()->toFile()) : ?>
                                        <a href="<?= $program->url() ?>">
                                                <?php $image = $program->image() ?>
                                                <img src="<?= $image->placeholderUri() ?>" data-src="<?= $image->url() ?>" data-lazyload alt="<?= $image->alt() ?>" />
                                        </a>
                                <?php else : ?>
                                        <a href="<?= $program->url() ?>">
                                                <?= $program->image() ?>
                                        </a>
                                <?php endif; ?>
                                <div class="image-info">
                                        <span><?= $program->title() ?> <?= $program->artist() ?> <?= $program->startDate()->toDate("d.m.Y") ?><?php if ($program->startDate()->isNotEmpty() && $program->endDate()->isNotEmpty()) : ?>—<?php endif ?><?= $program->endDate()->toDate("d.m.Y") ?> <?= $program->gallery() ?></span>
                                </div>
                        </div>
                </div>

        <?php endforeach ?>
</div>