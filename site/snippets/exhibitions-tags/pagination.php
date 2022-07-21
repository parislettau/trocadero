<div class="pagination">
    <?php if ($pagination->hasPrevPage()) : ?>
        <a href="<?= $pagination->prevPageUrl() ?>">previous posts</a>
    <?php endif ?>

    <?php if ($pagination->hasNextPage()) : ?>
        <a href="<?= $pagination->nextPageUrl() ?>">next posts</a>
    <?php endif ?>
</div>