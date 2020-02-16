<?php
session_start();
if (!isset($_SESSION['id'])) {
   header("Location: ./login.php");
}
include '../partials/header.php'

?>
      <!-- start add category -->
      <div class="row ml-5 mt-5">

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
   <div class="W3-row mt-5 ml-5">
      <div class="w3-col" style="width: 100%; padding: .7em;">
         <?php
         require '../models/class/admin.php';
         $category = new Admin();
            if (sizeof($category->getCategories()) > 0)
            {
               $cat = $category->getCategories();
         ?>
         <form action="./organised_articles.php?id=<?php echo $cat['CAT_ID'] ?>" method="POST">
            <?php
               foreach($category->getCategories() as $categ)
               {
            ?>

               <input type="hidden" name="category_id" value="<?php echo $cat['CAT_ID'] ?>">
               <a class="categos w3-card" style="margin-right: .5em;" href="./organised_articles.php?id=<?php echo $categ['CAT_ID'] ?>">#<?php echo $categ['CAT_NAME'] ?></a>

            <?php
               }
            ?>
            <a href="./view_categories.php">
               <i class="fa fa-eye"></i>
            </a>
         </form>
         <?php
            }
         ?>
      </div>
   </div>

   <div class="W3-row">
      <div class="w3-center w3-col" style="width: 100%; padding: 1em;">
         <a href="add_article.php" class="w3-btn w3-green" style="width:30%; border: 1px solid #e6e6e6; ">Add Article</a>
      </div>
   </div>
   <br>
   <br>

   <div id="article-section">
      <div class="limiter">
         <?php
         $articles = new Admin();

            if (sizeof($articles->getArticles()) > 0)
            {
               foreach($articles->getArticles() as $article)
               {

         ?>
         <div class="article-container">
            <div class="wrap w3-card">

               <h3 class="W3-row"><?php echo $article['HEADING'] ?></h3>

               <div class="w3-row">
                 <div class="mb-2">
                     <small style="color: #ff3333; font-style: italic;" class="p-1">#<?php echo $articles->getCategory( $article['CAT_ID'])['CAT_NAME']; ?></small>
                 </div>
                  <div class="minimize"><?php echo $article['CONTENT'] ?></div><br>
                  <div style="text-align: right !important;">
                        <p style="font-size: 10px; font-style: italic;">
                           <?php echo date("D", strtotime($article['DATE'])).", ".date("d-M-Y", strtotime($article['DATE'])) ?> | <?php echo date('H:m', strtotime($article['DATE'])) ?>
                         </p>
                  </div>
               </div>

               <div class="w3-row" style="padding: .6em; border-top: 1px solid #e6e6e6;">
                     <div class="w3-left">
                        <button onclick="document.getElementById('id<?php echo $article['A_ID']?>').style.display='block'" class="w3-button">More</button>

                        <!-- The Modal -->
                        <div id="id<?php echo $article['A_ID']?>" class="w3-modal">
                           <div class="w3-modal-content">
                              <header>
                                <span onclick="document.getElementById('id<?php echo $article['A_ID']?>').style.display='none'" class="w3-button w3-display-topright"><i class="fa fa-close"></i></span>
                                 <div class="article-heading"><?php echo $article['HEADING'] ?></div>
                              </header>

                              <div class="w3-container"><?php echo $article['CONTENT'] ?></div>
                           </div>
                        </div>
                     </div>
                  <div class="w3-right">
                     <a class="w3-btn w3-light-grey" href="edit_article.php?ea_id=<?php echo $article['A_ID'];?>">
                        Edit
                     </a>
                     <button class="w3-btn w3-red" onclick="delete_article(<?php echo $article['A_ID'];?>);">
                        Delete
                     </button>
                  </div>
               </div>
            </div>
            <br>
         <?php
         }
          }else{?>
                  <p class="w3-center"><strong>There are no articles</strong></p>
               <?php
               }?>
         </div>
      </div>
   </div>
<?php include '../partials/footer.php'?>
