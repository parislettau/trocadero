<div class="main-img-container">
    <?= $page->image() ?>
</div>
<div class="main-exhibition-text-container">
    <?= $page->title() ?><br>
    <?= $page->date() ?><br><br><br>
</div>

<div class="layouts">
    <?php foreach ($page->layout()->toLayouts() as $layout) : ?>
        <section class="grid" id="<?= $layout->id() ?>">
            <?php foreach ($layout->columns() as $column) : ?>
                <div class="column" style="--span:<?= $column->span() ?>">
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