<?php

header('location:1.php');


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];
$s = " select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username already exists";
}
else{
    $reg = "insert into usertable(name , password) values ('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}

?>