<div class="container-fluid">
    <div class="p-3 mt-2 mx-auto shadow rounded" style="width: 100%; max-width: 310px;">
        <h2 class="text-center">My University</h2>
        <img src="<?= ROOT; ?>/assets/logo.png" class="rounded-circle w-50 d-block mx-auto border border-dark">
        <h3>Add user</h3>
        <input type="firstname" class="my-2 form-control" name="firstname" placeholder="Firstname" autofocus>
        <input type="lastname" class="my-2 form-control" name="lastname" placeholder="Lastname">

        <select class="my-2 form-control">
            <option value="">--Select a Gender--</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <select class="my-2 form-control">
            <option value="">--Select a Rank--</option>
            <option value="student">Student</option>
            <option value="receprion">Receprion</option>
            <option value="lecturer">Lecturer</option>
            <option value="admin">Admin</option>
            <option value="super">Super Admin</option>
        </select>

        <input type="email" class="my-2 form-control" name="email" placeholder="Email">
        <input type="password" class="my-2 form-control" name="password" placeholder="Password">
        <input type="password" class="my-2 form-control" name="password2" placeholder="Confirm password">
        <br>
        <button class="btn btn-danger text-white">Cancel</button>
        <button class="btn btn-primary float-end">Add user</button>
    </div>
</div>