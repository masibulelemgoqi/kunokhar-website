<?php
session_start();
if (!isset($_SESSION['id'])) {
   header("Location: ./login.php");
}
 include '../partials/header.php'
 ?>

<div class="ml-5 mt-5 mb-2">
   <a href="./admin.php"> back  
</div>
</a>
<!-- start add category -->
   <div class="row ml-5">

      <a href="" class="" data-toggle="modal" data-target="#add_category" title="add title">
         <img src="../public/img/folder_add_plus.png" width="20" height="20">
      </a>
   </div>

<!-- Modal -->
<div class="modal fade" id="add_category" tabindex="-1" role="dialog" aria-labelledby="add_category_modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add_category_modal">Add Category</h5>
        <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="POST" action="">
            <div id="add_status"></div>
            <input type="text" name="category" id="category" placeholder="Enter the name of the title" class="form-control">
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="add_category" id="add_cate">Add</button>
            </div>
         </form>
      </div>
    </div>
  </div>
</div>

<!-- end add category -->


<!-- start view, edit and delete category -->

<?php
require('../models/class/admin.php');
$category = new Admin();

if(sizeof($category->getCategories()) > 0)
{
  foreach($category->getCategories() as $category)
  {

?>
<div class="ml-5 col-5 mt-5">
	<div class="mt-2">
		<?php print($category['CAT_NAME'])?>
	</div>

	<div class="text-right mr-5 mb-2">
		<a href="./edit_category.php?e_id=<?php print($category['CAT_ID'])?>" class="btn btn-primary" title="edit category">Edit</a>
   	<button onclick="delete_category(<?php print($category['CAT_ID'])?>)" class="btn btn-danger" title="delete category">delete</button>
	</div>
<hr>
</div>

<?php
		}
?>


<?php
	}else
	{
?>
<div><strong>There are no categories</strong></div>
<?php
	}
?>

<!-- end view, edit and delete category -->
<?php include '../partials/footer.php'?>