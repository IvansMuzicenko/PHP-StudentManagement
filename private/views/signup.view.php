<div class="container-fluid">
    <form action="" method="POST">
        <div class="p-3 mt-2 mx-auto shadow rounded" style="width: 100%; max-width: 310px;">
            <h2 class="text-center">My University</h2>
            <img src="<?= ROOT; ?>/assets/logo.png" class="rounded-circle w-50 d-block mx-auto border border-dark">
            <h3>Add user</h3>

            <?php if (count($errors) > 0) : ?>
                <div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
                    <strong>Error!</strong>
                    <?php foreach ($errors as $error) {
                        echo "<br>" . $error;
                    }; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <input type="text" value="<?= get_var('firstname'); ?>" class="my-2 form-control" name="firstname" placeholder="Firstname" autofocus>
            <input type="text" value="<?= get_var('lastname'); ?>" class="my-2 form-control" name="lastname" placeholder="Lastname">
            <input type="email" value="<?= get_var('email'); ?>" class="my-2 form-control" name="email" placeholder="Email">

            <select class="my-2 form-control" name="gender">
                <option <?= get_select('gender', '') ?> value="">--Select a Gender--</option>
                <option <?= get_select('gender', 'male') ?> value="male">Male</option>
                <option <?= get_select('gender', 'female') ?> value="female">Female</option>
            </select>
            <select class="my-2 form-control" name="rank">
                <option <?= get_select('rank', '') ?> value="">--Select a Rank--</option>
                <option <?= get_select('rank', 'student') ?> value="student">Student</option>
                <option <?= get_select('rank', 'reception') ?> value="reception">Receprion</option>
                <option <?= get_select('rank', 'lecturer') ?> value="lecturer">Lecturer</option>
                <option <?= get_select('rank', 'admin') ?> value="admin">Admin</option>
                <option <?= get_select('rank', 'super_admin') ?> value="super_admin">Super Admin</option>
            </select>

            <input value="<?= get_var('password'); ?>" type="password" class="my-2 form-control" name="password" placeholder="Password">
            <input value="<?= get_var('password2'); ?>" type="password" class="my-2 form-control" name="password2" placeholder="Confirm password">
            <br>
            <button class="btn btn-danger text-white">Cancel</button>
            <button type="submit" class="btn btn-primary float-end">Add user</button>
        </div>
    </form>
</div>