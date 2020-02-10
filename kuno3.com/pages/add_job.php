<?php
 session_start();
if (!isset($_SESSION['id'])) {
   header("Location: ./login.php");
}
 include '../partials/header.php'
 ?>
<div class="container"> 
   <div class="mt-5">
      <a href="./view_jobs.php"> back  </a>
   </div>
   <form data-parsley-validate action="" method="POST">
      <br><br>
      <div id="add_status"></div>
      <div class="row">
            <input class="form-control col-5 ml-4 mb-2" type="text" id="job_title" placeholder="Enter the job title..." required>
            <input class="form-control col-5 ml-5 mb-2" id="job_position" placeholder="Enter job position..." required>      
      </div>
      <div class="row">
          <input class="form-control col-5 ml-4 mb-2" id="job_location" placeholder="Enter job location..." required>
          <input class="form-control col-5 ml-5 mb-2" type="date" id="job_expiry" placeholder="select the expiry date of the job">         
      </div>

<!--     <input type="file" name="image"><br><br> -->
       <textarea class="ckeditor" name="job_description" required placeholder="Enter job description here" style="height: 300px;" required></textarea><br>
      <button type="submit" class="btn btn-success" id="add_job">Add Job</button>
   </form>

</div>
<?php include '../partials/footer.php'?>