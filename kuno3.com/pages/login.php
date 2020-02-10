<?php
session_start();
if (isset($_SESSION['id'])) {
	header("Location: ./admin.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>login | page</title>
	<?php include '../partials/head.php'?>
</head>
<body>

<div class="container mt-5">
	<div class="w3-row">
    <div class="form_body">
      <form action="" method="POST"> <!-- LOGIN FORM -->
				<h1 style="color: #ff5533; letter-spacing: 3px;">Login</h1><br>
        <div class="text-center h4" id="login_status"></div>
				<div class="form_login">
					<label>Email</label><br>
					<input type="email" name="email" id="email" class="login-inputs" title="Enter email" required placeholder="Email" required/>
				</div>
				<div class="form_login">
					<label>Password</label><br>
					<input type="password" name="password" id="password" class="login-inputs" title="Enter password" required placeholder="Password" required/>
				</div>
				<div class="form_login" style="margin-bottom: 30px;">
					<a class="w3-left" href="../index.php" style=" margin-top: 20px;"> Cancel?</a>
          			<a class="w3-text-red w3-left" style="margin-left: 15px; margin-top: 20px;" href="./forgot_password.php"> Forgot password?</a>
					<input type="submit" name="login" id="login" class="btn login-btn w3-right" value="Login" />
				</div>
      </form> <!-- END OF LOGIN-->
    </div>
  </div>
</div>
<?php include '../partials/footer.php' ?>