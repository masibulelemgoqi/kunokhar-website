<?php
session_start();
if (!isset($_SESSION['id'])) {
   header("Location: ./login.php");
}
include '../partials/header.php'

?>

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
         <a href="http://localhost:5000/add-article/add" class="w3-btn w3-green" style="width:30%; border: 1px solid #e6e6e6; ">Add Article</a>
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
                     <a class="w3-btn w3-light-grey" href="edit_article.php?ea_id=<?php echo $article['A_ID']?>">
                        Edit
                     </a>
                     <button class="w3-btn w3-red" onclick="delete_article(<?php echo $article['A_ID']?>);">
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
