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
                    <picture>
                        <source srcset="<?= $original->srcset([
                                            '1x' => [
                                                'width' => 500,
                                                'height' => 400,
                                                'crop' => 'center',
                                                'format' => 'avif'

                                            ],
                                            '2x' => [
                                                'width' => 500,
                                                'height' => 400,
                                                'crop' => 'center',
                                                'format' => 'avif'
                                            ],
                                            '3x' => [
                                                'width' => 500,
                                                'height' => 400,
                                                'crop' => 'center',
                                                'format' => 'avif'
                                            ]
                                        ])
                                        ?>" type="image/avif">
                        <source srcset="<?= $original->srcset([
                                            '1x' => [
                                                'width' => 500,
                                                'height' => 400,
                                                'crop' => 'center',
                                                'format' => 'webp'

                                            ],
                                            '2x' => [
                                                'width' => 500,
                                                'height' => 400,
                                                'crop' => 'center',
                                                'format' => 'webp'
                                            ],
                                            '3x' => [
                                                'width' => 500,
                                                'height' => 400,
                                                'crop' => 'center',
                                                'format' => 'webp'
                                            ]
                                        ])
                                        ?>" type="image/webp">
                        <img src="<?= $original->placeholderUri(5 / 4) ?>" data-src="<?= $cropped->url() ?>" data-lazyload alt="<?= $original->alt() ?>" />
                    </picture>
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