<?php
// return function ($site) {
//     return $site->find('program')->children()->listed()->flip();
// };

return function ($site) {
    return $site->find('program')->children()->listed()->sortBy(function ($page) {
        return $page->startDate()->toDate();
    }, 'asc');
};
