<?php
 session_start();
if (!isset($_SESSION['id'])) {
   header("Location: ./login.php");
}
 include '../partials/header.php'
 ?>

<div class="container ml-5 mr-5 mt-5">
<div class="">
   <a href="./admin.php"> back  </a>
</div>
   <form class="form"  action="" method="POST">
   <div id="add_status"></div>
<?php
if(isset($_GET['ea_id']))
{
   require('../models/class/admin.php');
   $article = new Admin();
?>
      <label>Category:</label><br>
      <?php
         if(sizeof($article->getCategories()) > 0)
         {
      ?>
      <select name="category" id="category">
         <?php
             foreach($article->getCategories() as $category)
             {
         ?>
         <option value="<?php print($category['CAT_ID']) ?>"><?php print($category['CAT_NAME']) ?></option>
         <?php
            }
         ?>
      </select>
      <?php
         }

         $a = $article->getArticle($_GET['ea_id']);
      ?>
      <br>
      <input type="hidden" name="article_id" id="article_id" value="<?php print($a['A_ID']);?>">
      <label>Heading:</label><input class="form-control" type="text" id="heading" value="<?php print($a['HEADING']);?>" required><br>
      <label>Content:</label><textarea class="form-control ckeditor" name="content" required style="height: 300px;" ><?php print($a['CONTENT']);?></textarea>

      <div class="mt-2">
         <button type="submit" class="btn btn-primary " name="edit" id="edit_article">Save</button>
      </div>
<?php
}

?>
   </form>
</div>

<?php include '../partials/footer.php'?>
