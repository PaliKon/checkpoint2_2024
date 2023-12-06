<?php

session_start();

$con = mysqli_connect('localhost', 'root', '','userregistration');



$name = $_POST['user'];
$password = $_POST['password'];

$hashedPassword = md5($password);

$s = "SELECT * FROM usertable WHERE name = '$name' && password = '$hashedPassword'";
// insert in database
$result= mysqli_query($con, $s);
$num = mysqli_num_rows($result);


if($num == 1)
{
    $_SESSION['username'] = $name;
    header('location: main.php');
} else{
    header('location: ucet.html');
    echo "zle udaje";
}

?>