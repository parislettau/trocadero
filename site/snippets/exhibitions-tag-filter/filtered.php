<div class="exhibitions-filtered-container filtered">
    <?php foreach ($kirby->collection("exhibitions") as $program) : ?>

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
            <a class=" " href="<?= $program->url() ?>">
                <!-- head -->
                <div class="exhibitions-item-head">
                    <div class="dates">
                        <?= $program->startDate()->toDate("d.m.Y") ?><?php if ($program->startDate()->isNotEmpty() && $program->endDate()->isNotEmpty()) : ?>—<?php endif ?><?= $program->endDate()->toDate("d.m.Y") ?>
                    </div>
                    <div class="gallery"> <?= $program->gallery() ?></div>
                </div>

                <!-- image -->
                <div class="exhibitions-item-image">
                    <?php
                    if ($program->cover()->toFile()) {
                        $original = $program->cover()->toFile();
                    } else {
                        $original = $program->image();
                    }
                    $cropped = $original->crop(500, 400);
                    ?>
                    <img src="<?= $original->placeholderUri(5 / 4) ?>" data-src="<?= $cropped->url() ?>" data-lazyload alt="<?= $original->alt() ?>" />

                </div>

                <!-- text -->
                <div class="exhibitions-item-text">
                    <span>
                        <?= $program->title() ?><br>
                        <?= $program->artist() ?><br><br>
                        <?= $program->information()->excerpt($chars = 400, $strip = true, $rep = ' …') ?>
                    </span>
                </div>
            </a>
        </div>
    <?php endforeach ?>
</div>