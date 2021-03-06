<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
    <?php require "../private/views/includes/crumbs.view.php"; ?>

    <div class="card-group justify-content-center">
        <table class="table table-striped table-hover">
            <tr>
                <th>School</th>
                <th>Created by</th>
                <th>Date</th>
                <th>
                    <a href="<?= ROOT ?>/schools/add"><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add New</button>
                    </a>
                </th>
            </tr>

            <?php if ($rows) : ?>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td><?= $row->school ?></td>
                        <td><?= $row->user_id ?></td>
                        <td><?= $row->date ?></td>
                        <td>
                            <a href="<?= ROOT ?>/schools/add"><button class="btn btn-sm btn-info"><i class="fa fa-edit text-white"></i></button>
                            </a>
                            <a href="<?= ROOT ?>/schools/add"><button class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button>
                            </a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            <?php else : ?>
                <h4>No schools were found</h4>
            <?php endif; ?>
        </table>

    </div>

</div>