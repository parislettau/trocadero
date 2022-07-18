<?php
return function ($site) {
    return $site->find('programs')->children()->listed();
};
