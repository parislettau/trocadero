<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- plausible -->
    <script defer data-domain="trocaderoprojects.org.au" src="https://plausible.memoreview.net/js/script.js"></script>

    <title><?= $site->title() ?></title>
    <!--    seo -->
    <?php snippet('meta_information'); ?>
    <?php snippet('robots'); ?>
    <!-- kirby css -->
    <?= css([
        'assets/css/lightbox.css',
        'assets/css/style.css',
        '@auto'
    ]) ?>
    <!-- kirby js -->
    <?= js('assets/js/script.js') ?>
    <?= js('assets/js/lightbox.js') ?>
    <!-- lazyloader for kirby-blurry-placeholder plugin -->
    <script src="https://unpkg.com/loadeer" defer init></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body id="body" [date-template]="<?= $page->template() ?>" style="--theme:<?= $site->theme() ?>">
    <?php snippet('visit_about') ?>
    <?php snippet('acknowledgment') ?>