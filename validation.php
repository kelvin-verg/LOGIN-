<?php
session_start();

header('location:1.php');


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];
$s = " select * from usertable where name = '$name' && password = '$pass'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num < 1){
 header('location:home.php'); 
 exit();  
}
else{
  if($data = mysqli_fetch_assoc($result)){
    $_SESSION['name'] = $data['name'];
    header('location:home.php');
    exit();
  }
  
}

?>