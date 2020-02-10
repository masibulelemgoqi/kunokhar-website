<?php
 session_start();
if (!isset($_SESSION['id'])) {
   header("Location: ./login.php");
}
 include '../partials/header.php'
 ?>


<div class="container mt-5">
   <div class="">
      <a href="./view_jobs.php"> back  </a>
   </div>
  <?php
      require '../models/class/admin.php';
      $jobs = new Admin();
      if(isset($_GET['je_id']))
      {
         if(sizeof($jobs->getJobsId($_GET['je_id'])) > 0)
         {
            $row = $jobs->getJobsId($_GET['je_id']);

   ?>
   <form data-parsley-validate action="" method="POST">
      <br><br>
      <div id="add_status"></div>
      <input type="hidden" id="job_id" value="<?php print($row['ID'])?>">
      <input class="form-control col-5" type="text" value="<?php print($row['JOB_TITLE'])?>" id="job_title" placeholder="Enter the job title..." required><br>
      <input class="form-control col-5" type="text" value="<?php print($row['JOB_POSITION'])?>" id="job_position" placeholder="" required><br>
      <input class="form-control col-5" type="text" value="<?php print($row['JOB_LOCATION'])?>" id="job_location" placeholder="Enter job location..." required><br>
      <input class="form-control col-5" value="<?php print(date($row['EXPIRY_DATE']))?>" type="date" id="job_expiry" placeholder="select the expiry date of the job">
      <br>
       <textarea name="job_description" class="ckeditor" required placeholder="Enter job description here" style="height: 300px;" required> <?php print($row['CONTENT'])?></textarea><br>
      <button type="submit" class="btn btn-success" id="edit_job">Update Job</button>
   </form>
      <?php
         }
      }
      ?>

</div>
<?php include '../partials/footer.php'?>
