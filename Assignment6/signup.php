<?php
require_once "helper/database.php";
$pdo = connectDatabase();

if (isset($_POST['signup']) && isset($_POST['username'])) {
    $insert_query = "INSERT INTO register(name,password,address) VALUES (:username, :password, :address)";
    $stml = $pdo->prepare($insert_query);
    $stml->execute(
        array(
            ':username' => $_POST['username'],
            ':password' => $_POST['password'],
            ':address' => $_POST['address']
        )

    );

    echo "Signup Successfully <a href='/home/'>Login</a>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <div class="container justify-content-center bg-warning">
    
    <div class="row g-3 align-items-center justify-content-center">

            <div class="col-auto">
                <input type="text" name="username" placeholder="username" id="" class="form-control my-2 ">
            </div>
            <div class="col-auto">
            </div>
        </div>

        <div class="row g-3 align-items-center justify-content-center">

            <div class="col-auto">
                <input type="password" name="password" placeholder="password" id="" class="form-control my-2">
            </div>
            <div class="col-auto">

            </div>
        </div>


        <div class="row g-3 align-items-center justify-content-center">

            <div class="col-auto">
                <input type="text" name="address" placeholder="address" id="" class="form-control my-2">
            </div>
            <div class="col-auto">

            </div>
        </div>

        <input type="submit" value="Submit" name="signup" />


</div>
    </form>
    <?php include_once('layout/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>