<?php include '../addons/header.php';?>
   <div class="article-bg">
      <h1 class="w3-right">Articles: All</h1>
   </div>
   <div class="W3-row">
      <div class="w3-col" style="width: 100%; padding: .7em;">
         <?php
         require '../models/class/user.php';
         $category = new User();
            if (sizeof($category->getCategories()) > 0)
            {
               $cat = $category->getCategories();
         ?>
         <form action="./user_articles_bycategory.php?id=<?php echo $cat['CAT_ID'] ?>" method="POST">
            <?php
               foreach($category->getCategories() as $categ)
               {
            ?>

               <input type="hidden" name="category_id" value="<?php echo $cat['CAT_ID'] ?>">
               <a class="categos w3-card" style="margin-right: .5em;" href="./user_articles_bycategory.php?id=<?php echo $categ['CAT_ID'] ?>">#<?php echo $categ['CAT_NAME'] ?></a>

            <?php
               }
            ?>

         </form>
         <?php
            }
         ?>
      </div>
   </div>
   <br>
   <br>

   <div id="article-section">
      <div class="limiter">
         <?php
         $articles = new User();

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
                     <small style="color: #ff3333; font-style: italic;" class="p-1">#<?php echo $articles->getCategory($article['CAT_ID'])['CAT_NAME']; ?></small>
                 </div>
                  <div class="minimize"><?php echo $article['CONTENT'] ?></div><br>
                  <div class="w3-row" style="padding: .6em; border-top: 1px solid #e6e6e6;">
                     <div class="w3-left">
                        <button onclick="document.getElementById('id<?php print($article["A_ID"])?>').style.display='block'" class="w3-button">More</button>

                        <!-- The Modal -->
                        <div id="id<?php print($article['A_ID'])?>" class="w3-modal">
                           <div class="w3-modal-content">
                              <header>
                                <span onclick="document.getElementById('id<?php print($article["A_ID"])?>').style.display='none'" class="w3-button w3-display-topright"><i class="fa fa-close"></i></span>
                                 <div class="article-heading"><?php echo $article['HEADING'] ?></div>
                              </header>

                              <div class="w3-container"><?php echo $article['CONTENT'] ?></div>
                           </div>
                        </div>
                     </div>
                     <div style="text-align: right !important; position: relative; margin-top: 0px;">
                        <p style="font-size: 10px; font-style: italic;">
                           <?php echo $articles->time_elapsed_string($article['DATE'])?>
                         </p>
                     </div>
                  </div>


               </div>

<!--                <div class="w3-row show_this" style="padding: .6em; border-top: 1px solid #e6e6e6;">
                  <a href="#" class="w3-btn more" style="border: 1px solid #e6e6e6;">Read more</a>
                  <a href="#" class="w3-btn less" style="border: 1px solid #e6e6e6; display: none">less</a>
               </div> -->
            </div>
            <br>
         </div>
         <?php
         }
          }else{?>
                  <p class="w3-center"><strong>There are no articles</strong></p>
               <?php
               }?>
      </div>
   </div>
<?php include '../addons/footer.php' ?>
