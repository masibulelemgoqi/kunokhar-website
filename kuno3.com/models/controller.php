<?php
require_once('class/user.php');
require_once('class/admin.php');

if( isset($_POST['action']))
{

	$action = $_POST['action'];
	switch ($action) {
		case 'add_review':
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$rating = $_POST['rating'];
		$comment = $_POST['comment'];

		echo $fname ." ".$lname." ".$rating." ".$comment;

		$add_review = new User();
		if($add_review->addReview($fname, $lname, $comment, $rating))
		{
			echo "rating added";
		}else
			echo "failed to add rating";
			break;
		case 'send_email':
					$user = new User();
					$name = $_POST['names'];
					$email = $_POST['email'];
					$contact = $_POST['contact'];
					$message = $_POST['message'];
					if($user->sendEmail($name, $email, $contact, $message))
					{
						echo "You'll be able to contact us via the email soon...";
					}else {
						echo $user->sendEmail($name, $email, $contact, $message);
					}

			break;

		case 'login':
			$login = new Admin();

			$email = $_POST['email'];
			$pass = $_POST['password'];
			if(!$login->signin($email, $pass))
			{
				echo "false";
			}else
			{
				header("Location: ../pages/admin.php");
			}
			break;
//add operations
		case 'add_article':
				$cat_id = $_POST['cat_id'];
				$heading = $_POST['heading'];
				$content = $_POST['content'];

				$admin = new Admin();

				if(!$admin->addArticle($cat_id, $heading, $content))
				{
					print("Couldn't add an Article");
				}else
					print("Article added successfully");
			break;

		case 'add_category':
				$category = $_POST['category'];
				$admin = new Admin();
				if(!$admin->addCategory($category))
				{
					echo "an error occured";
				}else
					echo "Category successfully added!!!";
			break;

		case 'add_job':
				$job_title = $_POST['job_title'];
				$job_position = $_POST['job_position'];
				$job_location = $_POST['job_location'];
				$job_expiry = $_POST['job_expiry'];
				$job_description = $_POST['job_description'];
				$admin = new Admin();
				if(!$admin->addJob($job_title, $job_location, $job_expiry, $job_description, $job_position))
				{
					print("Couldn't add Job");
				}else
				{
					print("Successfully added job!!");
				}
			break;
		case 'add_comment':

				$a_id = $_POST['a_id'];
				$name = $_POST['name'];
				$message = $_POST['message'];

				$add_comment = new User();
				if($add_comment->addComment($a_id, $name, $message))
				{
					print("Comment added successfully");
				}else
				{
					print("Comment not added");
				}
			break;
		case 'edit_user':
				$user_id = $_POST['user_id'];
				$firstname = $_POST['fname'];
				$lastname = $_POST['lname'];
				$username = $_POST['username'];
				$email = $_POST['email'];
				$password = $_POST['pwd'];

				$admin = new Admin();
				if(!$admin->editUser($user_id, $firstname, $lastname, $username, $email, $password))
				{
					print("Couldn't edit User");
				}else
				{
					print("Successfully edited User!!");
				}
			break;

//edit operations
		case 'edit_category':
				$category = $_POST['category'];
				$category_id = $_POST['category_id'];

				$admin = new Admin();
				if(!$admin->updateCategory($category_id, $category))
				{
					echo "an error occured";
				}else
					echo "Category successfully updated!!!";
			break;
		case 'edit_article':
				$cat_id = $_POST['cat_id'];
				$heading = $_POST['heading'];
				$content = $_POST['content'];
				$article_id = $_POST['article_id'];
				$admin = new Admin();

				if(!$admin->editArticle($article_id, $cat_id, $heading, $content))
				{
					print("Couldn't edit data");
				}else
				{
					print("successfully edited data");
				}


			break;
		case 'edit_job':
				$job_id = $_POST['job_id'];
				$job_title = $_POST['job_title'];
				$job_position = $_POST['job_position'];
				$job_location = $_POST['job_location'];
				$job_expiry = $_POST['job_expiry'];
				$job_description = $_POST['job_description'];
				$admin = new Admin();
				if(!$admin->editJob($job_id, $job_title, $job_location, $job_expiry, $job_description, $job_position))
				{
					print("Couldn't edit Job");
				}else
				{
					print("Successfully edited job!!");
				}
			break;

		case 'delete_announcement':
				$id = $_POST['id'];
				$delete = new Admin();
			  if($delete->deleteAnnouncement($id))
			  {
			    echo "announcement deleted!!";

			  }else {
			    echo "Could not delete announcement!!";
			  }
			break;

		case 'delete_category':
				$id = $_POST['id'];
				$del = new Admin();
			  if($del->deleteCategory($id))
			  {
			    echo "Category deleted!!";

			  }else {
			    echo "Could not delete category!!";
			  }
			break;

		case 'delete_article':
				$id = $_POST['id'];
				$del = new Admin();
			  if($del->deleteArticle($id))
			  {
			    echo "Article deleted!!";

			  }else {
			    echo "Could not delete article!!";
			  }
			break;

		case 'delete_job':
				$id = $_POST['id'];
				$del = new Admin();
			  if($del->deleteJob($id))
			  {
			    echo "Job deleted!!";

			  }else {
			    echo "Could not delete job!!";
			  }
			break;

		case 'visits':
				$visits = new User();
				$visits->add_visit();
				return $visits->display_visits();
				
			break;

		default:
			# code...
			break;
	}


}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//=============================================ADD ANNOUNCEMENT==============================================
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


if(isset($_POST['heading']) && isset($_POST['content']) && isset($_FILES['image_file_announcement']['name']))
{

	$status = null;
	$filename = $_FILES['image_file_announcement']['name'];
	$heading = $_POST['heading'];
	$content = $_POST['content'];
	$a = new Admin();
	echo $_FILES['image_file_announcement']['tmp_name'] ."  ".$_FILES['image_file_announcement']['size'];
	if($content != "" && $heading != "")
	{
		if($filename != "")
		{

		  $destination = '../public/uploads/'.$filename;
	      // get the file extension
	      $extension = pathinfo($filename, PATHINFO_EXTENSION);
	      // the physical file on a temporary uploads directory on the server
	      $file = $_FILES['image_file_announcement']['tmp_name'];
	      $size = $_FILES['image_file_announcement']['size'];
	      if (!in_array($extension, ['jpg', 'png', 'mp4', 'jpeg', 'JPEG', 'PNG', 'JPG']))
	      {
	         $status = "<div class='alert alert-danger'>You file extension must be .png or .jpg or mp4 or jpeg!!</div>";
	      } elseif ($size > 1000000000) { // file shouldn't be larger than 1000Megabyte
	        $status = "<div class='alert alert-danger'>File too large!!</div>";
	      } else
	      {

	         // move the uploaded (temporary) file to the specified destination
	         if (move_uploaded_file($file, $destination) && $a->add_announcement($heading, $content, $filename, $extension))
	         {
	           $status = "<div class='alert alert-success'>announcement added!!</div>";
	         }else
	         {
	            $status = "<div class='alert alert-danger'>Failed to add announcement</div>";
	         }
	      }
		}
		else
		{
			$filename = "NULL";
			if($a->add_announcement($heading, $content, $filename, $extension))
			{
	           $status = "<div class='alert alert-success'>announcement added!!</div>";
			}else
			{
	           $status = "<div class='alert alert-danger'>Failed to add announcement!!</div>";
			}

		}
	}
	else
	{
       $status = "<div class='alert alert-danger'>Heading and content is required!!</div>";
	}


	print($status);
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//================================EDIT ANNOUNCEMENT===========================================
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(isset($_POST['announcement_heading_edit']) && isset($_POST['announcement_content_edit']) && isset($_POST['a_id']))
{

	$status = null;
	$filename = trim($_FILES['image_file_announcement_edit']['name']);
	$heading = trim($_POST['announcement_heading_edit']);
	$content = trim($_POST['announcement_content_edit']);
	$id = trim($_POST['a_id']);

	$a = new Admin();

	if($content != "" && $heading != "" && $id != "")
	{
		if($filename != "")
		{

		  $destination = '../public/uploads/'.$filename;
	      // get the file extension
	      $extension = pathinfo($filename, PATHINFO_EXTENSION);
	      // the physical file on a temporary uploads directory on the server
	      $file = $_FILES['image_file_announcement_edit']['tmp_name'];
	      $size = $_FILES['image_file_announcement_edit']['size'];
	      if (!in_array($extension, ['jpg', 'png', 'mp4', 'jpeg', 'JPEG', 'PNG', 'JPG']))
	      {
	         $status = "<div class='alert alert-danger'>You file extension must be .png or .jpg or mp4 or jpeg!!</div>";
	      } elseif ($size > 1000000000) { // file shouldn't be larger than 1000Megabyte
	        $status = "<div class='alert alert-danger'>File too large!!</div>";
	      } else
	      {

	         // move the uploaded (temporary) file to the specified destination
	         if (move_uploaded_file($file, $destination) && $a->edit_announcement($id, $heading, $content, $filename, $extension))
	         {
	           $status = "<div class='alert alert-success'>announcement edited!!</div>";
	         }else
	         {
	            $status = "<div class='alert alert-danger'>Failed to aedit announcement</div>";
	         }
	      }
		}
		else
		{
			$filename = null;
			$extension = null;
			if($a->edit_announcement($id, $heading, $content, $filename, $extension))
			{
	           $status = "<div class='alert alert-success'>announcement edited!!</div>";
			}else
			{
	           $status = "<div class='alert alert-danger'>Failed to edit announcement!!</div>";
			}

		}
	}
	else
	{
       $status = "<div class='alert alert-danger'>Heading and content is required!!</div>";
	}


	print($status);
}


if(isset($_GET['rev_id']))
{
	$del = new Admin();
	$del->deleteReview($_GET['rev_id']);
	header("Location: ../pages/view_reviews.php");
}



if(isset($_GET['du_id']))
{
	$del = new Admin();
	$del->deleteUser($_GET['du_id']);
	header("Location: ../pages/users.php");
}
