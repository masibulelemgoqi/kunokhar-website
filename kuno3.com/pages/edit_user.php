<?php
 session_start();
if (!isset($_SESSION['id'])) {
   header("Location: ./login.php");
}
 include '../partials/header.php'
 ?>
<div class="container mt-5"> 

<a href="./users.php"> back</a> 

   <form data-parsley-validate action="" method="POST">
<?php
if(isset($_GET['eu_id']))
{  
   require('../models/class/admin.php');
   $user = new Admin();
   if(sizeof($user->getUser($_GET['eu_id'])) > 0)
   {
      $u = array();
      $u = $user->getUser($_GET['eu_id']);
?>
      <br><br>
      <div id="add_status"></div>
      <input type="hidden" value="<?php print($u['USER_ID'])?>" id="user_id">
      <input class="form-control col-5" value="<?php print($u['USER_FIRSTNAME'])?>" id="fname" placeholder="Enter your first name..." required><br>
      <input class="form-control col-5" value="<?php print($u['USER_LASTNAME'])?>" id="lname" placeholder="Enter your last name..." required><br>
      <input class="form-control col-5" type="text" value="<?php print($u['USER_NAME'])?>" id="username" placeholder="Enter the your user name..." required><br>
      <input class="form-control col-5" type="email" value="<?php print($u['USER_EMAIL_ADDRESS'])?>" id="email" placeholder="Enter your email address..." required><br>
      <input class="form-control col-5" type="password" value="" id="pwd" placeholder="Enter your password..." required><br>
      <input class="form-control col-5" type="password" value="" id="pwd_check" placeholder="Verify password..." required><br>
      <br>
      <button type="submit" class="btn btn-success" id="edit_user">Update User</button>
<?php
   }
}
?>
   </form>


</div>
<?php include '../partials/footer.php'?>