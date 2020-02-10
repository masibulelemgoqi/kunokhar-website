<?php
session_start();
if (!isset($_SESSION['id'])) {
   header("Location: ./login.php");
}

include '../partials/header.php';


?>

<div class="w3-row">
   <div class="w3-center w3-col" style="width: 100%; padding: 1em;">
      <a  class="w3-btn w3-green announcement" style="width:30%; border: 1px solid #e6e6e6; ">Add / hide add <i class="fa fa-bullhorn fa-x"></i></a>
   </div>
</div>
<br>

    <div class=" w3-center">
      <?php
        if(isset($_GET['status']))
        {
          print($_GET['status']);
        }

      ?>
    </div>

<div class="container" id="announcements_add_container">
  <div class="announcement_add_status"></div>
   <form method="POST" action="" enctype="multipart/form-data" class="announcement_form">
      <br><br>
      <input class="form-control" type="text" name="heading" placeholder="Enter the topic of the announcement..." ><br>
      <input type="file" class="form-control"  name="image_file_announcement"><br>

      <textarea class="form-control ckeditor" name="content" placeholder="Enter the content of the announcement..." style="height: 300px;"></textarea><br>

      <button type="submit" class="btn btn-success" name="add_accouncement">Add accouncement</button>
   </form>

</div>

<div class="container">
   <?php
      require('../models/class/admin.php');
      $a = new Admin();

      if($a->getAnnouncements() > 0):
         foreach($a->getAnnouncements() as $announcement):
   ?>
   <div class="card flex-row flex-wrap mb-5" id="view_announcements">
        <div class="card-header border-0">
            <img src="../public/uploads/<?php print($announcement['a_file']);?>" width="250" height="250">
        </div>
        <div class="card-block px-2">
            <h4 class="card-title"><?php print($announcement['a_heading']);?></h4>
            <div class="card-text minimize" ><?php print($announcement['a_content']);?></div>
            <a href="./edit_announcement.php?ae_id=<?php print($announcement['a_id']);?>" class="btn btn-info">Edit</a>
            <button onclick="delete_announcement(<?php print($announcement['a_id']);?>);" class="btn btn-danger">Delete</button>
        </div>
        <div class="w-100"></div>
    </div>

   <?php endforeach;

      else:?>
      <div>There are currently no announcements</div>
<?php endif;?>

</div>

<script>
  $('#announcements_add_container').hide();

  $('.announcement').click(()=>
  {
    $('#announcements_add_container').toggle();
  });

    var minimized_elements = $('div.minimize');

    minimized_elements.each(function(){
        var t = $(this).text();
        if(t.length < 300)
        {
           $('#more').hide();
        }else
        {
            $('#more').show();
            $(this).html(
               t.substring(0,50)+"<span>....</span>"
            );
        }


    });
</script>

<?php include '../partials/footer.php'?>
