<?php
    session_start();
?>
<html>
<head>

<title>Home page</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
>
</head>
<body>
<div class="container">
    <a class="float-right" href="logout.php"> LOGOUT </a>
    <h1>Welcome 
        <?php 
        if(isset($_SESSION['name'])){
        echo $_SESSION['name']; 
        }
        ?> 
        </h1>

</div>
</body>

</html>




