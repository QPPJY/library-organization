<?php
$admin = $_REQUEST['adminname'];
$password = $_REQUEST['password'];
$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} else
    echo 'successful to connect to MySQL!<br/>';
$demand = "select password from Admin where adminname = '$admin'";
$res = mysqli_query($mysqli, $demand);
$power = mysqli_fetch_object($res);
echo "$power->password";
if ($power->password == $password) {
    header('location:main.php');
} else header('location:login.php');
mysqli_free_result($res);
mysqli_close($mysqli);
