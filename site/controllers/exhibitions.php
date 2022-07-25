<?php

return function ($page) {

    // fetch the basic set of pages
    $programs = $page->children()->listed();

    // fetch all tags
    $artists = $programs->pluck('artists', ',', true);

    // add the artist filter
    if ($artist = urldecode(param('artist'))) {
        $programs = $programs->filterBy('artists', $artist, ',');
    }

    // add the year filter
    $year = $page->startDate('Y');
    if ($year = param('year')) {
        $programs = $programs->filter(function ($page) use ($year) {
            return $page->startDate()->toDate('Y') === $year;
        });
    }

    // add the category filter
    if ($category = urldecode(param('category'))) {
        $programs = $programs->filterBy('category', $category, ',');
    }

    // apply pagination
    $programs   = $programs->paginate(9);
    $pagination = $programs->pagination();

    return compact('programs', 'artists', 'artist', 'pagination');
};
