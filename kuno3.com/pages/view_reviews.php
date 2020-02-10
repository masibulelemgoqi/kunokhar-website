<?php
 session_start();
if (!isset($_SESSION['id'])) {
   header("Location: ./login.php");
}
 include '../partials/header.php'
 ?>

   <div class=" container-fluid mt-4 ml-4">
      <?php
         require('../models/class/admin.php');

         $rev = new Admin();

         if(sizeof($rev->getReviews()) > 0)
         {


      ?>
   <table class="table table-responsive-sm">
      <thead>
         <th scope="col">First name</th>
         <th scope="col">last name</th>
         <th scope="col">rating</th>
         <th scope="col">type</th>
         <th scope="col">comment</th>
         <th scope="col">date posted</th>
         <th scope="col">Action</th>
      </thead>
      <tbody>
         <?php
            foreach($rev->getReviews() as $rev)
            {

         ?>

         <tr>
            <td><?php print($rev['REV_FIRSTNAME'])?></td>
            <td><?php print($rev['REV_LASTNAME'])?></td>
            <td><?php print($rev['RATE_ID'])?></td>
            <td><?php print($rev['RATE_TYPE'])?></td>
            <td><?php print($rev['REV_COMMENT'])?></td> 
            <td><?php print(date('d-M-Y', strtotime($rev['REV_DATE'])))?></td>   
            <td>
                  <a href="../models/controller.php?rev_id=<?php print($rev['REV_ID'])?>" class="btn btn-danger">Delete
                  </a>
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