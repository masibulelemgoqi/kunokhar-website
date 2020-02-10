<?php include '../addons/header.php'?>
<!-------------------------------------Jobs section------------------------------------------>
   <div class="jobs-bg">
     <div class="job-bg-color">
       <h1 class="w3-right">Jobs</h1>
     </div>

   </div>
<div style="padding-top: 2em;">
   <div class="jobs-section ">
      <div class="limiter">
         <?php
            require '../models/class/user.php';
            $jobs = new User();
            if(sizeof($jobs->getJobs()) > 0)
            {
               foreach($jobs->getJobs() as $jobs)
               {
         ?>
         <div class="job-container">
            <div class="wrap ">
               <div class="job-headings mb-4">
                  <h1 style="font-size: 250%;"><?php echo $jobs['JOB_TITLE']?>&nbsp;<span style="font-size: 16px; color: #ccc;">Exp:&nbsp;<?php echo date('d-M-Y', strtotime($jobs['EXPIRY_DATE']))?></span></h1>
                  <p><?php echo $jobs['JOB_POSITION']?> <i style="color: #ff3333">|</i> <?php echo $jobs['JOB_LOCATION']?></p>
               </div>

               <div class="minimize"><?php echo $jobs['CONTENT']?></div>
               <div class="w3-left">
                  <button onclick="document.getElementById('id<?php echo $jobs["ID"]?>').style.display='block'"
                  class="w3-button">More</button>

                  <!-- The Modal -->
                  <div id="id<?php echo $jobs['ID']?>" class="w3-modal">
                    <div class="w3-modal-content">
                      <div class="">
                        <span onclick="document.getElementById('id<?php echo $jobs["ID"]?>').style.display='none'"
                        class="w3-button w3-display-topright w3-red">&times;</span>
                        <div class="">
                           <h1><?php echo $jobs['JOB_TITLE']?></h1>
                           <p><?php echo $jobs['JOB_POSITION']?> <i style="color: #ff3333">|</i> <?php echo $jobs['JOB_LOCATION']?></p>
                           <div><?php echo $jobs['CONTENT']?></div>
                        </div>
                      </div>
                    </div>
                  </div>
               </div>
            </div>
            <?php
                  }
            ?>
            <?php
               }else
               {
            ?>

            <p><strong>NO JOBS ARE AVAILABLE AT THE MOMENT, PLEASE KEEP CHECKING</strong></p>
            <?php
               }
            ?>
         </div>
      </div>
   </div>
</div>
<?php include '../addons/footer.php' ?>
