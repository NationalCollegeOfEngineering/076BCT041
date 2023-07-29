<?php
session_start();
include('helper/database.php');
// error_reporting(0);

if ($_SESSION['is_login'] != 'yes') {
    // $username = $_POST['name'];
    // $password = $_POST['password'];
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin123') {
        // set session/ cookies
        $_SESSION['is_login'] = 'yes';
        echo 'sdasd';

    } else {
        $_SESSION['is_login'] = 'no';
        session_destroy();
        header("location: /home/index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <title>Database</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <h2 class="mb-2">Welcome to the home page. The post are:</h2>
            <div class="table-responsive custom-table-responsive">
                <table class="table custom-table">
                    <thead>
                        <tr>
                            <th scope="col">SN</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                        </tr>
                    </thead>
                    <?php
                    $pdo = connectdatabase()
                        ?>
                    <tbody>
                        <tr scope="row">
                            <td>1</td>
                            <td>Rodney Floyd</td>
                            <td>
                                1423 Lughiv Boulevard
                            </td>
                        </tr>
                        <tr class="spacer">
                            <td colspan="100"></td>
                        </tr>

                        <tr scope="row">
                            <td>2</td>
                            <td>Emma Castro</td>
                            <td>
                                424 Mobu Grove
                            </td>
                        </tr>

                        <tr class="spacer">
                            <td colspan="100"></td>
                        </tr>

                        <tr scope="row">
                            <td>3</td>
                            <td>Corey Stevens</td>
                            <td>
                                876 Juhvi Avenue
                            </td>
                        </tr>

                        <tr class="spacer">
                            <td colspan="100"></td>
                        </tr>
                    </tbody>
                </table>
                <footer>
                    <?php include_once('layout/footer.php'); ?>
                    <a href="/home/logout.php">Logout</a>
                </footer>
            </div>
            <br>
            <div style="display: flex; justify-content: center;">
                <a href="#" class="styled-button-pagination">&lt;&lt;</a>
                &nbsp;&nbsp;
                <a href="#" class="styled-button-pagination">&gt;&gt;</a>
            </div>
        </div>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>