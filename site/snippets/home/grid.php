<?php if ($site->manual() == "true") : ?>

        <div class="main-card-box">
                <?php
                $layout =  $site->layout()->toPages();
                foreach ($layout as $relatedPage) : ?>
                        <div class="card-tile">

                                <div class="fill-img" style="--filter:<?php if ($site->filter() == 'false') : ?>grayscale(1) <?php else : ?>unset <?php endif ?>">

                                        <a href=" <?= $relatedPage->url() ?>">
                                                <?php if ($relatedPage->cover()->toFile()) {
                                                        $image = $relatedPage->cover()->toFile();
                                                } else {

                                                        if ($relatedPage->hasImages()) {
                                                                $image = $relatedPage->image();
                                                        } else {
                                                                $image = $site->placeholder()->toFile();
                                                        }
                                                }
                                                ?>
                                                <img src="<?= $image->placeholderUri() ?>" data-src="<?= $image->url() ?>" data-lazyload alt="<?= $image->alt() ?>" />
                                        </a>

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
                foreach ($site->find('program')->children()->listed()->sortBy(function ($page) {
                        return $page->startDate()->toDate();
                }, 'desc')->limit($slice) as $program) : ?>
                        <div class="card-tile">

                                <div class="fill-img" style="--filter:<?php if ($site->filter() == 'false') : ?>grayscale(1) <?php else : ?>unset <?php endif ?>">
                                        <?php if ($program->cover()->toFile()) {
                                                $image = $program->cover()->toFile();
                                        } else {

                                                if ($program->hasImages()) {
                                                        $image = $program->image();
                                                } else {
                                                        $image = $site->placeholder()->toFile();
                                                }
                                        }
                                        ?>
                                        <a href=" <?= $program->url() ?>">

                                                <img src="<?= $image->placeholderUri() ?>" data-src="<?= $image->url() ?>" data-lazyload alt="<?= $image->alt() ?>" />
                                        </a>

                                        <div class="image-info">
                                                <span><?= $program->title() ?> <?= $program->artist() ?> <?= $program->startDate()->toDate("d.m.Y") ?><?php if ($program->startDate()->isNotEmpty() && $program->endDate()->isNotEmpty()) : ?>—<?php endif ?><?= $program->endDate()->toDate("d.m.Y") ?> <?= $program->gallery() ?></span>
                                        </div>
                                </div>
                        </div>

                <?php endforeach ?>



        </div>

<?php endif ?>