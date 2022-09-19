<!-- header -->
<?php snippet('header') ?>
<?php snippet('nav') ?>
<!-- content -->
<main id="main" class="page-container">
    <?php
    exec('whoami', $output, $retval);
    dump($output);
    dump($retval);
    ?>

    <?php

    exec('convert -v', $output);
    dump($output);

    ?>

    <div class="main-container">
        <?php snippet('home/grid') ?>
    </div>
</main>

<?php snippet('footer') ?>