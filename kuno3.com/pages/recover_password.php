<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="device-width, initial-scale=1">
	<meta charset="utf-8">
	<title><%=siteTitle%> | <%=pageTitle%></title>
	<% include ../partials/head.ejs%>
</head>
<body>

<div class="container mt-5" id="reset-container">
	<div class="w3-row">
    <div class="form_body" id="password_fields">
      <form action="" method="post"> 
        <h1 style="color: #ff5533; letter-spacing: 3px;">Reset password</h1><br>
        <div id="reset-status"></div>

        <div class="form_login">
          <input type="password" name="password" class="login-inputs" title="new password" id="password" placeholder="Enter a new password"/>
        </div>
        <div class="form_login">
          <input type="password" name="verify_password" class="login-inputs" title="verify passwrd" id="verify_password" placeholder="Verify your password"/>
        </div>
        <div class="form_login" style="margin-bottom: 30px;">
          <button type="submit" class="btn login-btn w3-right" id="recover_password">New password</button>
        </div>

      </form>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>