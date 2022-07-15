<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
    <?php require "../private/views/includes/crumbs.view.php"; ?>

    <div class="card-group justify-content-center">
        <?php if ($rows) : ?>
            <?php foreach ($rows as $row) : ?>


            <?php endforeach; ?>
        <?php else : ?>
            <h4>No schools were found</h4>
        <?php endif; ?>

    </div>

</div>