<div class="main-exhibition-container">
    <div class="year-column">
        <!-- </?= page()->date() ?> -->
        <div class="filter-menu">
            <ul>

            </ul>
        </div>
    </div>

    <div class="exhibition-card-container">

        <?php foreach ($items = $pages->children()->listed()->paginate(4)->sortBy('date', 'desc') as $item) : ?>
            <div class="exhibition-card">
                <div class="grid-header">
                    <div class="date">
                        <?= $item->date() ?>
                    </div>
                    <div class="gallery-type">
                        <?= $item->gallery() ?>
                    </div>
                </div>

                <a href="<?= $item->url() ?>">
                    <div class="exhibit-image">
                        <?php if ($image = $item->image()) : ?>
                            <img src="<?= $image->url() ?>" alt="exhibit-img">
                        <?php endif ?>
                    </div>
                    <div class="artist-name">
                        <?= $item->artist() ?>
                    </div>
                    <div class="exhibition-title">
                        <?= $item->title() ?><br>
                        <div class="exhibit-category">
                            <?= $item->category() ?>
                        </div>
                    </div>
                    <div class="exhibition-info">
                        <div class="exhibition-info-text">
                            <?= $item->information() ?>
                        </div>
                    </div>
                </a>
            </div>


        <?php endforeach ?>



    </div>


</div>

<nav>
    <a href="<?= $items->pagination()->prevPageUrl() ?>" aria-label="Previous">&larr;</a>
    <a href="<?= $items->pagination()->nextPageUrl() ?>" aria-label="Next">&rarr;</a>
</nav>