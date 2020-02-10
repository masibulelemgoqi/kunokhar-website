<?php
 session_start();
if (!isset($_SESSION['id'])) {
   header("Location: ./login.php");
}
 include '../partials/header.php'
 ?>

<div class="container-fluid mt-4">
<!------------------------------------------------------------add user locator-------------------------------------------------- -->


   <div class=" container-fluid mt-4 ml-4">
      <a href="./add_user.php">
         <i class="fa fa-user-plus fa-2x"></i>
      </a>
      <span class="pull-right mr-5">Welcome admin user <?php print($_SESSION['name'])?></span>
      <br><br>
      <?php
         require('../models/class/admin.php');

         $users = new Admin();

         if(sizeof($users->getUsers()) > 0)
         {


      ?>
   <table class="table table-responsive-sm">
      <thead>
         <th scope="col">First name</th>
         <th scope="col">last name</th>
         <th scope="col">username</th>
         <th scope="col">email address</th>
         <th scope="col">password</th>
         <th scope="col">Actions</th>
      </thead>
      <tbody>
         <?php
            foreach($users->getUsers() as $user)
            {

         ?>

         <tr>
            <td><?php print($user['USER_FIRSTNAME'])?></td>
            <td><?php print($user['USER_LASTNAME'])?></td>
            <td><?php print($user['USER_NAME'])?></td>
            <td><?php print($user['USER_EMAIL_ADDRESS'])?></td>
            <td>********</td>    
            <td>
               <?php
                  if($_SESSION['name'] == $user['USER_NAME'])
                  {
               ?>   
               <a href="./edit_user.php?eu_id=<?php print($user['USER_ID'])?>" class="">
                  <img src="../public/img/user_update.png" width="30" height="30">
               </a>
               <?php
                  }
               ?>
               <?php
                  if($_SESSION['name'] != $user['USER_NAME'])
                  {
               ?>

                  <a href="../models/controller.php?du_id=<?php print($user['USER_ID'])?>" class="">
                     <img src="../public/img/user_delete.png" width="30" height="30">
                  </a>
 
               <?php
                  }
               ?>

            </td>        
         </tr>

             
             
         <?php

            }

         ?>
      </tbody> 
   </table>
      <?php      
         }
      ?>      
   </div> 
</div>
<?php include '../partials/footer.php'?>