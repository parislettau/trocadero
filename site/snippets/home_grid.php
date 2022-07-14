<div class="main-card-box">
        <?php foreach ($site->find('programs')->children()->listed()->limit(4) as $program) : ?>
                <div class="card-tile">
                        <div class="fill-img">
                                <?php if ($program->cover()->toFile()) : ?>
                                        <a href="<?= $program->url() ?>">
                                                <img src="<?= $program->cover()->toFile()->url() ?>" alt="" />
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