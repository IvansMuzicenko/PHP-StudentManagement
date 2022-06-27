<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
    <?php require "../private/views/includes/crumbs.view.php"; ?>
    <h4>Profile</h4>
    <div class="row">
        <div class="col-sm-4 col-md-3">
            <img src="<?= ASSETS; ?>/user_female.jpg" class="d-block mx-auto rounded-circle border border-dark" style="width:100px;">
            <h5 class="text-center">Name Surname</h5>
        </div>
        <div class="col-sm bg-secondary bg-light p-2">
            <table class="table table-hover table-striped table-bordered">
                <tr>
                    <th>First name:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Last name:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Date created:</th>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Basic info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Classes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tests</a>
            </li>
        </ul>
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i>&nbsp</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                </div>
            </form>
        </nav>
    </div>
</div>