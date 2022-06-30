<div class="container-fluid">
    <form action="" method="POST">

        <div class="p-3 mt-2 mx-auto shadow rounded" style="width: 100%; max-width: 310px;">
            <h2 class="text-center">My University</h2>
            <img src="<?= ROOT; ?>/assets/logo.png" class="rounded-circle w-50 d-block mx-auto border border-dark">
            <h3>Login</h3>

            <?php if (count($errors) > 0) : ?>
                <div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
                    <strong>Error!</strong>
                    <?php foreach ($errors as $error) {
                        echo "<br>" . $error;
                    }; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <input type="email" value="<?= get_var('email'); ?>" class="my-2 form-control" name="email" placeholder="Email" autofocus>
            <input type="password" value="<?= get_var('password'); ?>" class="my-2 form-control" name="password" placeholder="Password">
            <br>
            <button class="btn btn-primary">Login</button>
        </div>
    </form>
</div>