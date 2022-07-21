<?php

return function ($page) {

    // fetch the basic set of pages
    // $articles = $page->children()->listed()->flip();
    $programs = $page->children()->listed();

    // fetch all tags
    $artists = $programs->pluck('artists', ',', true);

    // add the artist filter
    if ($artist = urldecode(param('artist'))) {
        // $programs = $programs->filterBy('artists', "", ',');
        $programs = $programs->filterBy('artists', $artist, ',');
    }

    // add the year filter
    $year = $page->startDate('Y');
    if ($year = param('year')) {
        // $programs = $programs->filterBy('artists', "", ',');
        $programs = $programs->filter(function ($page) use ($year) {
            return $page->startDate()->toDate('Y') === $year;
        });
    }

    // add the category filter
    if ($category = urldecode(param('category'))) {
        // $programs = $programs->filterBy('artists', "", ',');
        $programs = $programs->filterBy('category', $category, ',');
    }

    // apply pagination
    $programs   = $programs->paginate(9);
    $pagination = $programs->pagination();

    return compact('programs', 'artists', 'artist', 'pagination');
};
