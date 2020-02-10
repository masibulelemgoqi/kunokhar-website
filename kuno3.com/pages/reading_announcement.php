<!DOCTYPE html>
<html>
<head>
	<title>Kunokhar | Reading Announcements</title>
   <?php include '../addons/header.php'?>
   	<link href="https://fonts.googleapis.com/css?family=Alegreya&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">
      <style>
         #reading-ann {
            padding-right: 5%;
            padding-left: 5%;
            line-height: 1.7;
            color: gray;
            font-weight: 300;
            font-size: .9rem;
         }

         #reading-ann .single-content h1 {
            font-size: 2rem;
            color: #000; 
         }

         #reading-ann .single-content {
            font-size: .9rem;
            padding: 2em
         }

         #reading-ann form {
            background-color: #faf8f7;
            border: 1px solid #e6e6e6;
            border-radius: 5px;
         }

         #reading-ann .p-5 {
            padding:1rem!important;
         }

         .ml-auto {
            margin-left:auto!important
         }

         #reading-ann .mb-4 {
            margin-bottom:1.5rem!important;
         }

         #reading-ann .mb-5 {
            margin-bottom:3rem!important;
         }

         #reading-ann h1, h2, h3, h4, h5 {
            font-family: "Cabin", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; 
         }

         #reading-ann .post-meta {
            font-size: .8rem;
         }

         #reading-ann .post-meta a {
            color: #000; 
         }

         #reading-ann .d-flex {
            display: flex;
         }

         #reading-ann .d-block {
            display: block;
         }

         #reading-ann .date-read {
            color: #b4b4b4; 
         }

         .section-title {
            color: #000;
            margin-bottom: 50px; 
         }

         .section-title h2 {
            font-size: 20px;
            font-weight: 400;
            border-bottom: 1px solid #222;
            position: relative;
            display: inline-block; 
         }

         .section-title h2:before {
            position: absolute;
            content: "";
            height: 1px;
            background: #777; 
         }

         .comment-list {
            padding: 0;
            margin: 0; 
         }
         
         .comment-list .children {
            padding: 50px 0 0 40px;
            margin: 0;
            float: left;
            width: 100%; 
         }

         .comment-list li {
            padding: 0;
            margin: 0 0 30px 0;
            float: left;
            width: 100%;
            clear: both;
            list-style: none; 
         }

         .comment-list li .comment-body {
            margin-left: 10%;
         }

         .comment-list li .comment-body h3 {
            font-size: 18px;
            color: green; 
         }

         .comment-list li .comment-body .meta {
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: .1em;
            color: #ccc; 
         }

         .more-cmt-btn {
            background-color: transparent;
            font-weight: 500;
            color: #000;
         }

         .trend-entry {
            margin-bottom: 30px;
            margin-left: 10%; 
         }

         .trend-entry .trend-contents h2 {
            font-size: 18px; 
         }

         .trend-entry .trend-contents h2 a {
            color: #000; 
         }

         .more {
            color: #000;
            font-size: .9rem; 
         }

      </style>
</head>
<body>
<div class="jobs-bg">
   <h1 class="w3-right">Announcements</h1>
</div>
<?php
   if(isset($_GET['a_id']))
   {
      require('../models/class/user.php');
      $anna = new User();
      $anna->addViews($_GET['a_id']);
      $get_anna = $anna->getAnnouncement($_GET['a_id']);
?>
   <div id="reading-ann">
      <div class="row">
         <div class="col-sm-8 single-content">
            <p class="mb-5">
               <img src="../public/uploads/<?php print($get_anna['a_file'])?>" alt="Image" style="width: 25%;">
            </p>

            <h1>
               <?php print($get_anna['a_heading'])?>
            </h1>

            <div class="post-meta d-flex mb-5">
               <div class="vcard">
                  <span class="d-block"><a href="#">Writer</a> at <a href="#">Kunokhar</a></span>
                  <span class="date-read"><?php echo $anna->time_elapsed_string($get_anna['a_date'])?> <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
               </div>
            </div>
               <?php print($get_anna['a_content'])?>
            <div>
               
            </div>
            <div style="padding-top: 3rem">
               <div class="section-title">
                  <h2 class="mb-3">
                     <?php
                        if($anna->getCommentCount($_GET['a_id']) <= 1)
                        {
                           print $anna->getCommentCount($_GET['a_id']) ." Comment";
                        }else
                        {
                           print $anna->getCommentCount($_GET['a_id']) ." Comments";
                        }
                     ?>
                  </h2>
               </div>


               <?php 

                  if(sizeof($anna->getComments($_GET['a_id'])) > 0)
                  {
               ?>
               <ul class="comment-list">
                  <?php 
                     foreach($anna->getComments($_GET['a_id']) as $comment)
                     {
                  ?>
                  <li class="comment">
                     <div class="comment-body">
                        <h3><?php print($comment['c_fullname']);?></h3>
                        <div class="meta"><?php echo $anna->time_elapsed_string($comment['c_date']);?></div>
                        <p>
                           <?php print($comment['c_comment']);?>
                        </p>
                     </div>
                  </li>
               <?php
                   }
               ?>
               </ul>
            <?php }else
               {
                  print("No comments available");
               }
            ?>

               <div class="container-fluid w3-center">
                  <button type="button" class="btn more-cmt-btn"><i class="fa fa-refresh"></i> Load more</button>
               </div>

               <div class="comment-form-wrap pt-5">
                  <div class="section-title">
                     <h2 class="mb-3">Leave a comment</h2>
                  </div>
                  <form action="" class="p-5" method="POST">
                     <input type="hidden" id="a_id" value="<?php print($_GET['a_id'])?>">
                     <div class="form-group">
                        
                        <?php 
                           if(isset($_COOKIE['user_commenting']))
                           {
                        ?>
                        <input type="hidden" class="form-control" id="name" value="<?php print($_COOKIE['user_commenting']);?>" disabled>
                        <?php    
                           }else
                           {
                        ?>
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name" placeholder="Firstname Lastname">
                        <?php      
                           }
                        ?>
                        
                     </div>
                     <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                     </div>
                     <div class="form-group">
                        <input type="submit" value="Post Comment" id="add_comment" class="btn btn-primary">
                     </div>
                  </form>
               </div>
            </div>
         </div>
<script>
   $(()=>
   {
      $('#add_comment').click((e)=>
      {
         e.preventDefault();
         var a_id = $('#a_id').val();
         var name = $('#name').val();
         var message = $('#message').val();

         if(a_id != "" && name != "" && message != "")
         {
            $.ajax(
            {
               url: '../models/controller.php',
               method: 'POST',
               data: {a_id: a_id, name: name, message: message, action: 'add_comment'},
               success: (data) =>
               {
                  location.reload(true);
               },
               error: (data) =>
               {
                  alert(data);
               }

            });

         }else
         {
            alert("All fields are required");
         }
      });

   });
</script>

            <div class="col-lg-4 ml-auto">
                  <div class="section-title" style="margin-top: 1rem;">
                    <h2>Most Read</h2>
                  </div>
                <?php 
                  if(sizeof($anna->getAnnouncements()) > 0)
                  {
                    foreach($anna->getAnnouncements() as $ann) 
                    {
                      if($ann['a_views'] > 3)
                      {
                ?>             
                  <div class="trend-entry d-flex">
                     <div class="trend-contents">
                        <h2><a href="reading_announcement.php?a_id=<?php print($ann['a_id']);?>"><?php print($ann['a_heading']);?></a></h2>
                        <div class="post-meta">
                           <span class="d-block"><a href="#">Writer</a> at <a href="#">Kunokhar ctp</a></span>
                           <span class="date-read"><?php echo $anna->time_elapsed_string($ann['a_date'])?></span>
                        </div>
                     </div>
                  </div>
                <?php 
                       }
                    }

                    print('<p><a href="#" class="more">See All Popular <i class="fa fa-arrow-right"></i></a></p>');
                 }
                ?>

                  
          </div>
      </div>
   </div>

<?php
}
else
{
   print("nothing more to read");
}

require '../addons/footer.php';
?>