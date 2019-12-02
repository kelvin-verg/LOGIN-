<html>
<head>
<title>user login and Registration</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
>


</head>

<body>
<div class="container">
<div class="login-box">
<div class="row">

<div class="col-md-6 login-left">
<h2>Login Here</h2>
<Form action="validation.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
<label>password</label>
<input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary"> Login </button>
</form>
</div>

<div class="col-md-6 login-right">
<h2>Register Here</h2>
<Form action="registration.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
<label>password</label>
<input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary"> Register </button>
</form>
</div>

</div>

</div>

</div>
</body>

</html>