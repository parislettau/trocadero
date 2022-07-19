<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google result text -->
    <title><?= $site->title() ?></title>
    <!-- Google result description -->
    <meta name="description" content="Trocadero Art Space is an artist-run initiative focused on presenting new and contemporary art through a diverse and inclusive program of exhibitions; public programs; collaborative events; and community-based projects.">
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

<body [date-template]="<?= $page->template() ?>">
    <?php snippet('visit_about') ?>
    <?php snippet('nav') ?>