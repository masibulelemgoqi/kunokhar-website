<?php
 session_start();
if (!isset($_SESSION['id'])) {
   header("Location: ./login.php");
}
 include '../partials/header.php'
 ?>


<div class="container ml-5 mr-5 mt-5">
<div><a href="./view_categories.php">Back</a></div>
<?php
include('../models/class/admin.php');
$category = new Admin();

if(isset($_GET['e_id']))
{

	if(sizeof($category->getCategory($_GET['e_id'])) > 0)
	{
		$cate = array();
		$cate = $category->getCategory($_GET['e_id']);

?>
	<form method="POST" action="" >
		<div id="add_status"></div>
		<input type="text" class="form-control" id="category" value="<?php print($cate['CAT_NAME'])?>">
		<br>
		<input type="hidden" id="category_id" value="<?php print($cate['CAT_ID'])?>">
		
		<div class="mt-2">
			<button type="submit" class="btn btn-primary" id="edit_cate">Save</button>			
		</div>
	</form>
<?php
	}else

	print("<div> No such!!!</div>");
}
?>
</div>

<?php include '../partials/footer.php'?>