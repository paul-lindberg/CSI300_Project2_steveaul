<!doctype html>
<html lang="en">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<?php
/**
 * Created by PhpStorm.
 * User: super
 * Date: 4/21/2018
 * Time: 5:59 PM
 */
include mysqli;
$user = 'SuperNinjaFat';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
    $link,
    $host,
    $user,
    $password,
    $db,
    $port
);

function sayploopy() {
    if (intval($_POST('inputUsername')) == 5) {
        echo 'PLOOPY!';
    }
}

?>
<head>
    <link rel="stylesheet" type="text/css" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<div class="container">
    <h4>Login here, man!</h4>
    <input type="username" id="inputUsername" class="form-control" placeholder="5" required>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <button class="btn btn-primary" type="submit">Login</button>
    <button class="btn btn-primary" onclick="">PLOOPY!<?php sayploopy();?></button>
</div>
</body>
</html>
