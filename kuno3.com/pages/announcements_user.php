<?php include '../addons/header.php'?>

   <div class="announcements-bg">
     <div class="announcements-bg-color">
       <h1 class="w3-right">Announcements</h1>
     </div>
   </div>
	<div id="announcements">
		<div class="container">
			<div class="row">
				<div class="col-xs-8">
					<div class="content">
						<?php
							require('../models/class/user.php');
							$ann = new User();

							if(sizeof($ann->getAnnouncements()) > 0)
							{
								foreach($ann->getAnnouncements() as $anna)
								{
						?>
						<div class="row">
							<div class="col-xs-4">
								<img src="../public/uploads/<?php print($anna['a_file']);?>" style="width: 100%; max-height: 250px;" class="w3-card">
							</div>
							<div class="col-xs-8">
								<h6><?php print($anna['a_heading']);?></h6>
								<div id="minimize">
									<?php print($anna['a_content']);?>
								</div>

								<a href="reading_announcement.php?a_id=<?php print($anna['a_id']);?>" class="btn announce-btn">Read more</a>
								<hr>

								<p class="art-prev-footer">
									<a href="#"><i class="fa fa-comments"></i> <?php
                   echo $ann->getCommentCount($anna['a_id']); ?></a>
									<a href="#"><i class="fa fa-share-alt"></i> 98</a>
									<span class="ml-5"><i class="fa fa-clock-o"></i>&nbsp;<?php echo $ann->time_elapsed_string($anna['a_date'])?></span>
									<span href="#" class="w3-right">
                    <?php
                      if($anna['a_views'] > 1)
                      {
                        print($anna['a_views'] ."  Views");
                      }else
                      {
                        print($anna['a_views'] ."  View");
                      }

                    ?>
                  </span>
								</p>
							</div>
						</div>



						<?php

								}
							}else
							{
								print("There are no announcements yet");
							}

						?>


					</div>
				</div>
            <div class="col-lg-4 ml-auto">
                  <div class="section-title" style="margin-top: 1rem;">
                    <h2>Most Read</h2>
                  </div>
                <?php
                  if(sizeof($ann->getAnnouncements()) > 0)
                  {
                    foreach($ann->getAnnouncements() as $anna)
                    {
                      if($anna['a_views'] > 3)
                      {
                ?>
                  <div class="trend-entry d-flex">
                     <div class="trend-contents">
                        <h2><a href="reading_announcement.php?a_id=<?php print($anna['a_id']);?>"><?php print($anna['a_heading']);?></a></h2>
                        <div class="post-meta">
                           <span class="d-block"><a href="#">Writer</a> at <a href="#">Kunokhar ctp</a></span>
                           <span class="date-read"><?php echo $ann->time_elapsed_string($anna['a_date'])?></span>
                        </div>
                     </div>
                  </div>
                <?php
                      }
                  }
                }
                ?>

                  <p>
                     <a href="#" class="more">See All Popular <i class="fa fa-arrow-right"></i></a>
                  </p>
          </div>
			</div>
		</div>
	</div>
<script>
$(()=>
{

     var minimized_elements = $('div#minimize');

    minimized_elements.each(function(){
        var t = $(this).text();
        if(t.length < 300)
        {
           $('#more').hide();
        }else
        {
            $('#more').show();
            $(this).html(
               t.substring(0,300)+"<span>....</span>"
            );
        }


    });

});
</script>
<?php include '../addons/footer.php' ?>
