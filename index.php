<!-- Conexion to db -->
<?php include("db.php") ?>

<!-- Header -->
<?php include("includes/header.php") ?>

<!-- Form -->
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <!-- alert -->
            <?php if(isset($_SESSION['messaje'])) {?>
                <div class="alert alert-<?= $_SESSION['messaje_type']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['messaje'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_unset(); } ?>

            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="task title" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="task description"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="save">
                </form>
            </div>
        </div>
        <div class="col-md-8">
        </div>
    </div>
</div>

<!-- Footer -->   
<?php include("includes/footer.php") ?>