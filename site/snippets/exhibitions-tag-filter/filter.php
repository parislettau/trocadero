<?php $pluck = $page->index(); ?>

<section class="filter-pane filter" style="">

    <div class="filter-pane-inner">

        <!-- artists -->
        <div style="margin-top:var(--small);">
            <div class="tag-filter filter-trigger" style="">
                <div class="filter-label">Artist</div>
                <div class="filter-trigger-icon"></div>
            </div>

            <div class="filters filters-artists" style="list-style:none;display:none;">
                <!-- artists -->
                <div class="tag-filter artist">
                    <?php $tags = $pluck->pluck('artists', ',', true) ?>
                    <?php sort($tags); ?>
                    <?php foreach ($tags as $tag) : ?>
                        <a class="tag" href="#" style="display:block"><span class="underline" data-filter="<?= str::slug($tag) ?>"><?= $tag ?></span></a>
                    <?php endforeach ?>
                </div>

            </div>
        </div>

        <!-- year -->
        <div style="margin-top:var(--small);">
            <div class="tag-filter filter-trigger" style="">
                <div class="filter-label year">Year</div>
                <div class="filter-trigger-icon"></div>
            </div>

            <div class="filters filters-artists" style="list-style:none;display:none;">
                <!-- year -->

                <div class="tag-filter">
                    <?php
                    $events = page()->children();

                    $events = $events->map(function ($event) {
                        $event->year = $event->startDate()->toDate('Y');
                        return $event;
                    });

                    $tags = $events->pluck('year', ',', true);
                    ?>

                    <?php sort($tags); ?>
                    <?php foreach ($tags as $tag) : ?>
                        <a class="tag" href="#" style="display:block"><span class="underline" data-filter="<?= str::slug($tag) ?>"><?= $tag ?></span></a>
                    <?php endforeach ?>
                </div>

            </div>
        </div>

        <!-- category -->
        <div style="margin-top:var(--small);">
            <div class="tag-filter filter-trigger" style="">
                <div class="filter-label category">Category</div>
                <div class="filter-trigger-icon rotate"></div>
            </div>

            <!-- <div class="filters filters-artists" style="list-style:none;display:none;"> -->
            <div class="filters filters-artists" style="list-style:none;">
                <!-- category -->
                <div class="tag-filter">
                    <?php $tags = $pluck->pluck('category', ',', true) ?>
                    <?php sort($tags); ?>
                    <?php foreach ($tags as $tag) : ?>
                        <a class="tag" href="#" style="display:block"><span class="underline" data-filter="<?= str::slug($tag) ?>"><?= $tag ?></span></a>
                    <?php endforeach ?>
                </div>

            </div>
        </div>
    </div>




    <script>
        $(document).ready(function() {
            $(".filter-trigger").click(function() {
                $(this).parent().find(".filters-artists").slideToggle("fast");
                $(this).find(".filter-trigger-icon").toggleClass("rotate").slide
            });
        });
    </script>

    <script>
        $(document).ready(function() {

            //FUNCTION TO SHOW ALL TAGS AND REMOVE ALL FILTERS
            $('.tag-all').on('click', function(event) {
                event.preventDefault();
                $(this).addClass('active'); // check this
                $('body').find('a').not(this).removeClass('active'); // uncheck not this
                $('[data-tags]').show(); // then show all articles
            })
            // 
            $('.tag').on('click', function(event) {
                event.preventDefault(); // prevent the default action
                $(this).toggleClass('active'); // check this
                $('.tag-all').removeClass('active')
                //Uncheck not this
                //          $(this).parent().find('a').not(this).removeClass('active');
                $('body').find('a').not(this).removeClass('active');
                dofilter(); // Then do the filter
                $(window).scrollTop(0); // scroll to the top
            })

            function dofilter() {
                var active = $('a.active').find('span').map(function() {
                    return $(this).attr('data-filter')
                }).toArray()

                if (active.length) {
                    $('[data-tags]').each(function() {
                        var tags = $(this).attr('data-tags').split(' ').filter(function(t) {
                            return t
                        })
                        console.log(matches)
                        var matches = tags.filter(function(t) {
                            return active.includes(t)
                        })
                        if (matches.length === active.length) {
                            $(this).show()
                        } else {
                            $(this).hide()
                        }
                    })
                } else {
                    $('[data-tags]').show()
                }
            }
        });
    </script>
</section>