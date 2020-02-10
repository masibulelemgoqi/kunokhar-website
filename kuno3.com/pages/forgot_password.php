<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Kunokhar | forgot password</title>
	<?php include '../partials/head.php'?>
</head>
<body>

<div class="container mt-5" id="reset-container">
	<div class="w3-row">
    <div class="form_body" id="reset_id">
      <form action="" method="post"> 
				<h1 style="color: #ff5533; letter-spacing: 3px;">Reset password</h1><br>

        <div>Please prove your email address</div>

        <div id="reset-status"></div>

				<div class="form_login">
					<input type="email" name="email" class="login-inputs" title="Enter email" id="email" placeholder="Email"/>
				</div>

				<div class="form_login" style="margin-bottom: 30px;">
          <a class="w3-text-red w3-left" href="./login.php"> Login?</a>
          <a style="margin-left: 10px;" href="./access_code.php">Got code?</a>
					<button type="submit" class="btn login-btn w3-right" id="resetBtn">Reset</button>
				</div>

      </form>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>