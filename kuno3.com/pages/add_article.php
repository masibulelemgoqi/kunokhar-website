<?php
 session_start();
if (!isset($_SESSION['id'])) {
   header("Location: ./login.php");
}
 include '../partials/header.php'
 ?>
<div class="container mt-5">	
	<form action="" method="POST">
		
         <?php
         require '../models/class/admin.php';
         $category = new Admin();
            if (sizeof($category->getCategories()) > 0)
            {
               $cat = $category->getCategories();
         ?>
        <a href="./admin.php"> back  </a>
		<select name="category" class="ml-2">
            <?php  
               foreach($category->getCategories() as $categ)
               {
            ?>
			<option value="<?php echo $categ['CAT_ID'] ?>" id="cat_id"><?php echo $categ['CAT_NAME'] ?></option>
			<?php
				}
			?>
		</select>
		<span id="add_status" class="ml-3 h5" role="alert"></span>
		<br><br>
		<input class="form-control" type="text" id="heading" placeholder="Enter the topic of the article..." required><br>
		<textarea class="form-control ckeditor" name="content" placeholder="Enter the content of the article..." style="height: 300px;" required></textarea><br>
		<button type="submit" class="btn btn-success" id="add_article">Add article</button>
		<?php
			}else
			{
		?>
		<p><strong>Category can't be empty, add a category then an article</strong></p>
		<?php
			}
		?>
	</form>
</div>
<?php include '../partials/footer.php'?>