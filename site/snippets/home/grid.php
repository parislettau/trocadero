<?php if ($site->manual() == "true") : ?>

        <div class="main-card-box">
                <?php
                $layout =  $site->layout()->toPages();
                foreach ($layout as $relatedPage) : ?>
                        <div class="card-tile">

                                <div class="fill-img" style="--filter:<?php if ($site->filter() == 'false') : ?>grayscale(1) <?php else : ?>unset <?php endif ?>">
                                        <?php if ($relatedPage->cover()->toFile()) : ?>
                                                <a href=" <?= $relatedPage->url() ?>">
                                                        <?php $image = $relatedPage->cover()->toFile() ?>
                                                        <img src="<?= $image->placeholderUri() ?>" data-src="<?= $image->url() ?>" data-lazyload alt="<?= $image->alt() ?>" />
                                                </a>
                                        <?php else : ?>
                                                <a href="<?= $relatedPage->url() ?>">
                                                        <?= $relatedPage->image() ?>
                                                </a>
                                        <?php endif; ?>
                                        <div class="image-info">
                                                <span><?= $relatedPage->title() ?> <?= $relatedPage->artist() ?> <?= $relatedPage->startDate()->toDate("d.m.Y") ?><?php if ($relatedPage->startDate()->isNotEmpty() && $relatedPage->endDate()->isNotEmpty()) : ?>—<?php endif ?><?= $relatedPage->endDate()->toDate("d.m.Y") ?> <?= $relatedPage->gallery() ?></span>
                                        </div>
                                </div>
                        </div>
                <?php endforeach ?>
        </div>


<?php else : ?>


        <div class="main-card-box">

                <?php
                $slice = $site->slice()->toInt();
                foreach ($site->find('program')->children()->listed()->limit($slice) as $program) : ?>
                        <div class="card-tile">

                                <div class="fill-img" style="--filter:<?php if ($site->filter() == 'false') : ?>grayscale(1) <?php else : ?>unset <?php endif ?>">
                                        <?php if ($program->cover()->toFile()) : ?>
                                                <a href=" <?= $program->url() ?>">
                                                        <?php $image = $program->cover()->toFile() ?>
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

<?php endif ?>