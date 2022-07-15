<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
    <?php require "../private/views/includes/crumbs.view.php"; ?>

    <div class="card-group justify-content-center">
        <form method="POST">
            <h3>Add new school</h3>
            <?php if (count($errors) > 0) : ?>
                <div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
                    <strong>Error!</strong>
                    <?php foreach ($errors as $error) {
                        echo "<br>" . $error;
                    }; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <input autofocus class="form-control" type="text" name="school" placeholder="School Name" value="<?= get_var('school') ?>">
            <input class="btn btn-primary float-end" type="submit" value="Create">
            <a href="<?= ROOT ?>/schools">
                <input class="btn btn-danger" type="button" value="Cancel">
            </a>
        </form>

    </div>

</div>