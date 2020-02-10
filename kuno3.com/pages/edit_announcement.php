<?php
session_start();
if (!isset($_SESSION['id'])) {
   header("Location: ./login.php");
}

include '../partials/header.php';

if(isset($_GET['ae_id']))
{
        require('../models/class/admin.php');
        $edit = new Admin();
        $announcement = $edit->getAnnouncement($_GET['ae_id']);
?>
<div class="container" id="announcements_edit_container">

   <form action="" method="POST" enctype="multipart/form-data" class="announcement_edit_form">
      <br><br>
      <input type="hidden" name="a_id" value="<?php print($announcement['a_id']);?>">
      <input class="form-control" type="text" name="announcement_heading_edit" value="<?php print($announcement['a_heading']);?>" ><br>
      <img src="../public/uploads/<?php print($announcement['a_file']);?>" width="250" height="250">
      <input type="file" class="form-control"  name="image_file_announcement_edit"><br>
      <textarea class="form-control ckeditor" name="announcement_content_edit" style="height: 300px;"><?php print($announcement['a_content']);?></textarea><br>
      <div class="announcement_edit_status"></div>
      <button type="submit" class="btn btn-success" name="edit_accouncement">edit accouncement</button>
   </form>

</div>
<?php
}

?>


<?php include '../partials/footer.php'?>
