 <!-- MAIN EXHIBITIONS SECTION BEGINS HERE -->
 <?php
    $filterBy = get('filter');
    $unfiltered = $page->children()->listed();

    $items = $pages
        ->children()
        ->listed()
        ->when($filterBy, function ($filterBy) {
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

         <div class="filter-checkbox social-float" id="filterCheckbox">
             <?php foreach ($filters as $filter) : ?>
                 <div class="filter-item">
                     <label class="filter-label">
                         <input type="checkbox" class="reg-checkbox" name="colorCheckbox" value="<?= $filter ?>" checked> <?= $filter ?></label>
                     <label>
                 </div>
             <?php endforeach ?>
         </div>
     </div>

     <div class="exhibition-card-container">

         <?php foreach ($items as $item) : ?>
             <div class="exhibition-card <?php if ($filter = $item->category()) : ?> <?= $filter ?> <?php endif ?>">
                 <div class="grid-header">
                     <div class="date">
                         <?= $item->startDate()->toDate("d.m.Y") ?><?php if ($item->startDate()->isNotEmpty() && $item->endDate()->isNotEmpty()) : ?>—<?php endif ?><?= $item->endDate()->toDate("d.m.Y") ?>
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