<?php
return function ($site) {
    return $site->find('program')->children()->listed();
};
