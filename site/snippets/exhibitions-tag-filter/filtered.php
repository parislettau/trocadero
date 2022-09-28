<div class="exhibitions-filtered-container filtered">
    <?php foreach ($kirby->collection("exhibitions")->flip() as $program) : ?>

        <!--      ARTICLE ITEMS WITH FILTER TAGS-->
        <div class="exhibition exhibitions-item h2" data-tags="
        <?php foreach ($program->artists()->split(',') as $tag) : ?>
        <?= str::slug($tag) ?>
        <?php endforeach ?>

        <?= $program->startDate()->toDate("Y") ?>
        
        <?php foreach ($program->category()->split(',') as $tag) : ?>
        <?= str::slug($tag) ?>
        <?php endforeach ?>

        ">

            <!-- link -->
            <a class=" " href="<?= $program->url() ?>" style="--theme:unset">
                <!-- head -->
                <div class="exhibitions-item-head">
                    <div class="dates">
                        <?= $program->startDate()->toDate("d.m.Y") ?><?php if ($program->startDate()->isNotEmpty() && $program->endDate()->isNotEmpty()) : ?>—<?php endif ?><?= $program->endDate()->toDate("d.m.Y") ?>
                    </div>
                    <div class="gallery"> <?= $program->gallery() ?></div>
                </div>

                <!-- image -->
                <div class="exhibitions-item-image" style="--filter:
 <?php if ($site->filter() == 'false') : ?>grayscale(1) <?php else : ?>unset<?php endif ?>">
                    <?php
                    if ($program->cover()->toFile()) {
                        $original = $program->cover()->toFile();
                    } else {
                        if ($program->hasImages()) {
                            $original = $program->image();
                        } else {
                            $original = $site->placeholder()->toFile();
                        }
                    }
                    $cropped = $original->crop(500, 400);
                    ?>
                    <img src="<?= $original->placeholderUri(500 / 400) ?>" data-src="<?= $cropped->url() ?>" data-lazyload alt="<?= $original->alt() ?>" loading="lazy" />

                </div>

                <!-- text -->
                <div class="exhibitions-item-text">
                    <?= $program->title()->kt() ?>
                    <?= $program->artist()->kt() ?>
                    <?= $program->information()->excerpt($chars = 350, $strip = true, $rep = ' …')->kt() ?>
                </div>
            </a>
        </div>
    <?php endforeach ?>
</div>