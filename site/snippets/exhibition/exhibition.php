<div class="main-img-container">
    <?php
    if ($page->cover()->toFile()) {
        $image = $page->cover()->toFile();
    } else {
        $image = $page->image();
    }
    ?>
    <img src="<?= $image->placeholderUri() ?>" data-src="<?= $image->url() ?>" data-lazyload alt="<?= $image->alt() ?>" />
    <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" />

</div>
<?php
if ($image = $page->image()) :
    echo $image->thumb([
        'width'   => 300,
        'height'  => 200,
        'quality' => 80,
    ])->html();
endif;

if ($image = $page->image()) :
    echo $image->thumb([
        'width'   => 300,
        'height'  => 200,
        'quality' => 80,
        'format'  => 'webp',
    ])->html();
endif;


?>


<div class="main-exhibition-text-container">
    <strong>Image URL: <?= $image->url() ?></strong>
    <?= $page->title() ?><br>
    <?= $page->startDate()->toDate("d.m.Y") ?><?php if ($page->startDate()->isNotEmpty() && $page->endDate()->isNotEmpty()) : ?>—<?php endif ?><?= $page->endDate()->toDate("d.m.Y") ?><br><br>
    <?= $page->text()->kt() ?>
</div>

<div class="layouts">
    <?php foreach ($page->layout()->toLayouts() as $layout) : ?>
        <section class="grid" id="<?= $layout->id() ?>">
            <?php foreach ($layout->columns() as $column) : ?>
                <div class="column" style="--span:<?= $column->span() ?>; --columns:<?= $column->span() ?>">
                    <?php foreach ($column->blocks() as $block) : ?>
                        <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?>">
                            <?= $block ?>
                        </div>
                    <?php endforeach ?>
                </div>
            <?php endforeach ?>
        </section>
    <?php endforeach ?>
</div>