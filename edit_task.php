<?php 

// conexión a db
include("db.php");

// Verificación de llegada
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM tasks WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $description = $row['description'];
        //echo $title;
        //echo $description;
    }
}

// Verificación de llegada
if(isset($_POST['update'])){
    //echo 'updating';
    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    //echo $id;
    //echo $title;
    //echo $description;

    // Consula
    $query = "UPDATE tasks SET title = '$title', description = '$description' WHERE id = $id";
    mysqli_query($conn, $query);

    // Alerta en el form
    $_SESSION['messaje'] = 'Task update successfully';
    $_SESSION['messaje_type'] = 'primary';

    // Redireccionamiento
    header("Location: index.php");
}

?>

<!-- Header -->
<?php include("includes/header.php"); ?>

<!-- Form -->
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-bady">
                <form action="edit_task.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" placeholder="Update title">
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Update description"><?php echo $description; ?></textarea>
                    </div>
                    <button class="btn btn-success" name="update">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include("includes/footer.php"); ?>
