<?php
 session_start();
if (!isset($_SESSION['id'])) {
   header("Location: ./login.php");
}
 require '../partials/header.php'
 ?>
 <style>
.inputfile {
width: 0.1px;
height: 0.1px;
opacity: 0;
overflow: hidden;
position: absolute;
z-index: -1;
} 
.button-right 
{
	margin-left: 87%;
}

.container form
{
	margin: 0 10%;
}

.back-home
{
	position: absolute;
	margin-left: 15%;
	margin-top: 3%;
}

.row .fa-file-pdf-o
{
	margin-left: 50%;
}

.my-textarea
{
	width: 100%;
	border-radius: 5px;
	margin: 1% 0;
	border: #00000 solid 1px;
	resize: none;
}

.my-input
{
	width: 100%;
	border-radius: 5px;

}

.my-textarea, .my-input:focus
{
	border: 1px solid #00000;
}




 </style>
 <div class="back-home"><a href="./admin.php"><i class="fa fa-arrow-left fa-2x"></i> </a></div>
 
<div class="container mt-5 article-form">	
	<form action="" method="POST" enctype="multipart/form-data" id="article-add-form">
		
         <?php
         require '../models/class/admin.php';
         $category = new Admin();
            if (sizeof($category->getCategories()) > 0)
            {
               $cat = $category->getCategories();
         ?>
        
		<select name="category" class="ml-2 my-select">
            <?php  
               foreach($category->getCategories() as $categ)
               {
            ?>
			<option value="<?php echo $categ['CAT_ID'] ?>"><?php echo $categ['CAT_NAME'] ?></option>
			<?php
				}
			?>
		</select>
		<span id="add_status" class="ml-3 h5" role="alert"></span>
		<br><br>
		<input class="my-input" type="text" name="heading" placeholder="Enter the topic of the article..."><br>
		<textarea class="my-textarea" name="content" placeholder="Enter the content of the article..." style="height: 300px;"></textarea><br>
		<div class="row">
		<!-- <label for="document-file"><i class="fa fa-file-pdf-o fa-2x"></i></label> -->
			<input type="file" name="document-file">
			
			<div class="button-right">
				<button class="btn btn-success" id="add_article">Add article</button>
			</div>
		</div>
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