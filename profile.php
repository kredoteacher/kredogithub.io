<?php
session_start();

require "connection.php";

function updatePhoto($user_id, $photo_name, $photo_tmp){
    $conn = connection();
    $sql = "UPDATE users SET photo = '$photo_name' WHERE id = $user_id";

    if($conn->query($sql)){
        $destination = "img/$photo_name";
        move_uploaded_file($photo_tmp, $destination);
        header("refresh: 0");
    } else {
        die("Error uploading photo: " . $conn->error);
    }
}

if(isset($_POST['btn_upload_photo'])){
    $user_id = $_SESSION['user_id'];
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];

    updatePhoto($user_id, $photo_name, $photo_tmp);

    /*
    ['name'] - file name (mark.jpeg)
    ['size'] - size of the file
    ['tmp_name'] - location of the temporary file
    ['error'] - default is 0.
    */
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include "mainMenu.php";
    ?>
    <main class="container py-5">
        <div class="card w-25 mx-auto">
            <!-- card-img-top -->
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="input-group mb-2">
                        <input type="file" name="photo" class="form-control" aria-label="Choose Photo">
                        <button type="submit" class="btn btn-outline-secondary" name="btn_upload_photo">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    
</body>

</html>