<?php
    session_start();
    require_once "saved-data.php";
    require_once 'functions.php';
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css">
<div class="container mt-2 shadow p-3 mb-5 bg-body rounded " style="width: 40%;">
    <form action="" method="post" class="col text-center">
        <img src="<?php echo $_SESSION['resultPath']; ?>" class="img-fluid"><br><br>
        <div class="row justify-content-evenly">
            <div class="col-5">
                <input type="submit" name="download" value="Download image" class="btn btn-primary"><br>
            </div>
            <div class="col-5">
                <input type="submit" name="newImage" value="Edit another image" class="btn btn-primary"><br>
            </div>
        </div>
    </form>
</div>

<?php
    if(isset($_POST['download'])){
        file_force_download($_SESSION['resultPath']);
    }
    else if(isset($_POST['newImage'])){
        session_destroy();
        header('Location: /index.php');
    }
?>