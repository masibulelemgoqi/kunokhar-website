<?php
 session_start();
if (!isset($_SESSION['id'])) {
   header("Location: ./login.php");
}
 include '../partials/header.php'
 ?>
<div class="container  ml-5 mt-5">
   <a href="./users.php"> back</a>
   <form method="POST" action="">
      <div id="add_status"></div>
      <input class="form-control" type="text" id="fname" placeholder="Enter your first name..." required><br>
      <input class="form-control" type="text" id="lname" placeholder="Enter your last name..." required><br>
      <input class="form-control" type="text"  id="username" placeholder="Enter the your user name..." required><br>
      <input class="form-control" type="email" id="email" placeholder="Enter your email address..." required><br>
      <input class="form-control" type="password"  id="pwd" placeholder="Enter your password..." required><br>
      <input class="form-control" type="password" id="pwd_check" placeholder="Re-enter your password..." required><br>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="add_user">Add User</button>
      </div>
   </form>
</div>
<?php include '../partials/footer.php'?>