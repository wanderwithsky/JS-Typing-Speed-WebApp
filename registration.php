<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root', '');
if($con){
    echo "connection successful\n";
} else{
    echo "no connection";
}

mysqli_select_db($con, 'validation');

$email = $_POST['email'];
$name = $_POST['username'];
$pass = $_POST['password'];

$query1 = "select * from signin where email = '$email' && name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $query1);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Duplicate Data";
} else{
    $query2 = "insert into signin(email, name, password) values ('$email', '$name', '$pass')";
    mysqli_query($con, $query2);
}

?>