<?php snippet('header') ?>

    
<body>
    
    <div id="main" class="page-container">
        <div class="main-container">
            <?php snippet('visit_about') ?>
            <div class="space-banner">
                
            </div>
            <?php snippet('banner') ?>
            
<!-- MAIN EXHIBITIONS SECTION BEGINS HERE -->

    <?php

        $filterBy = get('filter');
        $unfiltered = $page->children()->listed();

        $items = $pages
                ->children()
                ->listed()
                ->when($filterBy, function($filterBy) {
                    return $this->filterBy('category', $filterBy);
                })
                // ->paginate(4)
                ->sortBy('date', 'desc');
        $pagination = $items->pagination();

        $filters = $unfiltered->pluck('category', null, true);
    ?>
    <div class="main-exhibition-container">
        <!-- Desktop -->
        <div class="year-column filter-menu social-float-parent">
            <!-- </?= page()->date() ?> -->
            <!-- <div class="filter-menu">
                <nav class="filter-menu">
                    <ul>
                        <li><a href="</?= $page->url() ?>">All</a></li>
                        <li><a href="</?= $page->url() ?>?filter=Exhibition">Exhibition</a></li>
                        <li><a href="</?= $page->url() ?>?filter=Talk">Talk</a></li>
                    </ul>
                </nav>
                <ul>
                    
                </ul>
            </div> -->
            <div class="filter-checkbox social-float" id="filterCheckbox">
                <?php foreach ($filters as $filter): ?>
                    <div class="filter-item">
                        <label class="filter-label">
                            <input type="checkbox" class="reg-checkbox" name="colorCheckbox" value="<?= $filter ?>" checked> <?= $filter ?></label>
                        <label>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="exhibition-card-container">

            <?php foreach ($items as $item): ?>
                <div class="exhibition-card <?php if ($filter = $item->category()): ?> <?= $filter ?> <?php endif ?>">
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
                            <?php if($image = $item->image()): ?>
                                <img src="<?= $image->url() ?>" alt="exhibit-img">
                            <?php endif ?>
                        </div>
                        <div class="artist-name">
                            <?= $item->artist() ?>
                        </div>
                        <div class="exhibition-title">
                            <?= $item->title() ?><br>
                            <div class="exhibit-category">
                                <small><?= $item->category() ?></small>
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

<!-- PAGINATION FORMATTING -->
    <!-- <nav class="pagination">
        </?php if ($pagination->hasPrevPage()): ?>
            <a href="</?= $pagination->prevPageUrl() ?>" aria-label="Previous">&larr; </a>
        </?php endif ?>

        <span></?= $pagination->page() ?> of </?= $pagination->pages() ?></span>

        </?php if ($pagination->hasNextPage()): ?>
            <a href="</?= $pagination->nextPageUrl() ?>" aria-label="Next"> &rarr;</a>
        </?php endif ?>
    </nav> -->

<!-- MAIN EXHIBITIONS SECTION ENDS HERE -->
            
            <!-- </?php snippet('exhibition_grid') ?> -->

            <?php snippet('footer') ?>
        </div>

        <!-- </?php snippet('sidenav') ?> -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?= js('assets/js/script.js') ?>
</body>