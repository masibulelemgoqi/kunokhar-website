<?php

require_once('dbconnect.php');
class Admin{

    private $con;

    public function __construct(){
        $conn = new Connect();
        $sql = $conn->connect();
        $this->con = $sql;

    }
    //validate
    public function isValid($data){
        if(isset($data) && trim($data) != ""){
            return true;
        }else
            return false;
    }

    //user authentifications


    public function signin($email, $password)
    {
        if($this->isValid($email) == "true" && $this->isValid($password) =="true")
        {
            $sql = "SELECT * FROM user WHERE USER_EMAIL_ADDRESS = :email";
            $stmt = $this->con->prepare($sql);
            $stmt->execute(array(':email' => $email));
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

            if($stmt->rowCount = 1){
                $hash = $userRow['USER_PASSWORD'];

                if(password_verify($password, $hash))
                {
                    session_start();
                    $_SESSION['id'] = $userRow['USER_ID'];
                    $_SESSION['name'] = $userRow['USER_NAME'];

                    return $_SESSION['id'];

                }
            }else
            {
                return false;
            }

        }
    }

    public function recoverPassword($email)
    {
        echo $email;
    }
    //end user authontification

    //start add functions
    public function addCategory($category)
    {
        $sql = 'INSERT INTO category (CAT_NAME) VALUES (:category)';
        try {

                    $stmt = $this->con->prepare($sql);
                    $stmt->bindParam(':category', $category);

                    if($stmt->execute()){
                        return true;
                        $this->con = null;
                    }

            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
            }
    }

    public function addArticle($category, $heading, $content)
    {
        $rdate = date('Y-m-d H:i:s');
        $sql = 'INSERT INTO article (CAT_ID, HEADING, CONTENT, DATE) VALUES (
                :category, :heading, :content,:rdate)';
        try {

                    $stmt = $this->con->prepare($sql);
                    $stmt->bindParam(':category', $category);
                    $stmt->bindParam(':heading', $heading);
                    $stmt->bindParam(':content', $content);
                    $stmt->bindParam(':rdate', $rdate);

                    if($stmt->execute()){
                        return true;
                        $this->con = null;
                    }

            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
            }
    }

    public function addJob($title, $location, $expiry_date, $description, $position)
    {
        $xpdate = date('Y-m-d H:i:s', strtotime($expiry_date));
        $image = "NULL";
        $sql = 'INSERT INTO job (JOB_TITLE, JOB_POSITION, JOB_LOCATION, EXPIRY_DATE, IMAGE, CONTENT) VALUES (:title, :position, :location, :xpdate, :image, :description)';
        try {

                    $stmt = $this->con->prepare($sql);
                    $stmt->bindParam(':title', $title);
                    $stmt->bindParam(':position', $position);
                    $stmt->bindParam(':location', $location);
                    $stmt->bindParam(':xpdate', $xpdate);
                    $stmt->bindParam(':image', $image);
                    $stmt->bindParam(':description', $description);

                    if($stmt->execute()){
                        return true;
                        $this->con = null;
                    }

            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
            }
    }

    public function signup($firstname, $lastname, $username, $email, $password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql= "INSERT INTO user (USER_NAME, USER_EMAIL_ADDRESS , USER_PASSWORD, USER_FIRSTNAME, USER_LASTNAME) VALUES".
                      "(:username, :email, :hash, :firstname, :lastname)";
        try {

                    $stmt = $this->con->prepare($sql);
                    $stmt->bindParam(':username', $username);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':hash', $hash);
                    $stmt->bindParam(':firstname', $firstname);
                    $stmt->bindParam(':lastname', $lastname);

                    if($stmt->execute()){
                        return true;
                        $this->con = null;
                    }

            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
            }

        //password_verify('anna', $hash); //Returns true
    }

    //add announcements , comments and replies

    public function add_announcement($heading, $content, $filename, $extension)
    {

        try
        {

            $f_type = $extension;
            $file_type;
            if($f_type == "jpg" || $f_type == "png" || $f_type == "jpeg")
            {
               $file_type = "image";

            }else if($f_type == "mp4")
            {
                $file_type = "video";
            }else if($f_type == "NUll" && $filename == "NUll")
            {
                $file_type = "NULL";
            }

            $date_ = date('Y-m-d H:i:s');
            $views = "0";

            $sql = "INSERT INTO `announcements` (`a_file`, `a_filetype`, `a_heading`, `a_content`, `a_date`, `a_views`) VALUES (:filename ,:file_type,:heading ,:content, :date_, :views)";

            $stmt = $this->con->prepare($sql);
            $stmt->bindParam(':filename', $filename);
            $stmt->bindParam(':file_type', $file_type);
            $stmt->bindParam(':heading', $heading);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':date_', $date_);
            $stmt->bindParam(':views', $views);
            if($stmt->execute())
            {
                return true;
                $this->con = null;
            }

        } catch (PDOException $e)
        {
            echo "Error: ".$e->getMessage();
        }


    }

    //end add functions

    //start edit functions
    public function updateCategory($id,$category)
    {
         $result = $this->con->prepare("UPDATE category SET CAT_NAME='".$category."' WHERE CAT_ID='".$id."'");
        if($result->execute())
        {
            return true;
        }

    }

    public function editArticle($id, $category, $heading, $content)
    {

        $result = $this->con->prepare("UPDATE article SET HEADING='".$heading."', CONTENT='".$content."', CAT_ID='".$category."' WHERE A_ID='".$id."'");
        if($result->execute())
        {
            return true;
        }
    }

    public function editJob($id, $job_title, $job_location, $job_expiry, $job_description, $job_position)
    {

        $expiry_date = date('Y-m-d H:i:s', strtotime($job_expiry));
        $image = "NULL";
        $result = $this->con->prepare("UPDATE job SET JOB_TITLE='".$job_title."', JOB_POSITION='".$job_position.
              "', JOB_LOCATION='".$job_location."', CONTENT='".$job_description.
              "' , IMAGE='".$image."' , EXPIRY_DATE='".$expiry_date."' WHERE ID='".$id."'");
        if($result->execute())
        {
            return true;
        }

    }

    public function editUser($user_id, $firstname, $lastname, $username, $email, $password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE user SET USER_NAME='".$username."', USER_EMAIL_ADDRESS='".$email.
                    "', USER_PASSWORD='".$hash."', USER_FIRSTNAME='".$firstname.
                    "' , USER_LASTNAME='".$lastname."' WHERE USER_ID='".$user_id."'";
        $result = $this->con->prepare($sql);
        if($result->execute())
        {
            return true;
        }
    }

    public function edit_announcement($id, $heading, $content, $filename, $extension)
    {

        try
        {

            $f_type = $extension;
            $file_type;
            if($f_type == "jpg" || $f_type == "png" || $f_type == "jpeg")
            {
               $file_type = "image";

            }else if($f_type == "mp4")
            {
                $file_type = "video";
            }else if($f_type == null && $filename == null)
            {
                $file_type = null;
            }

            if($filename == null)
            {
                $sql = "UPDATE `announcements` SET `a_heading`=:heading, `a_content`=:content WHERE `a_id`=:id";
                $stmt = $this->con->prepare($sql);
                $stmt->bindParam(':heading', $heading);
                $stmt->bindParam(':content', $content);
                $stmt->bindParam(':id', $id);
                if($stmt->execute())
                {
                    return true;
                }else
                {
                    print('error occured');
                }
            }else
            {
                $row = $this->getAnnouncement($id);

                $sql = "UPDATE `announcements` SET `a_heading`=:heading, `a_content`=:content, `a_file`=:filename, `a_filetype`=:file_type WHERE `a_id`=:id";
                $stmt = $this->con->prepare($sql);
                $stmt->bindParam(':heading', $heading);
                $stmt->bindParam(':content', $content);
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':filename', $filename);
                $stmt->bindParam(':file_type', $file_type);

                if($stmt->execute() && unlink('../public/uploads/'.$row['a_file']))
                {

                    return true;
                }

            }

        } catch (PDOException $e)
        {
            echo "Error: ".$e->getMessage();
        }


    }

    //end edit functions

    //end edit functions

    // getters
    public function getReviews()
    {

        $result = $this->con->query('SELECT * FROM reviews r, ratings rs WHERE r.RATE_ID = rs.RATE_ID ORDER BY r.REV_DATE DESC');
        $review = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $reviews[] = $row;
        }

        return $reviews;
         $this->con = null;

    }


    public function getArticles()
    {
        $result = $this->con->query('SELECT * FROM  article ORDER BY DATE DESC');
        $articles = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $articles[] = $row;
        }

        return $articles;
         $this->con = null;
    }

    public function getArticle_cat($id)
    {
        $result = $this->con->query('SELECT * FROM article WHERE CAT_ID ='.$id.' ORDER BY DATE DESC');
        $array = array();
        while($row = $result->fetch(PDO::FETCH_ASSOC))
        {
          $array[] = $row;
        }
        return $array;
        $this->con = null;
    }

    public function getArticle($id)
    {
        $result = $this->con->query('SELECT * FROM article WHERE A_ID ='.$id.' ORDER BY DATE DESC');
        return $result->fetch(PDO::FETCH_ASSOC);
        $this->con = null;
    }

    public function getCategories()
    {
        $result = $this->con->query('SELECT * FROM category');
        $categories = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $categories[] = $row;
        }
        return $categories;
        $this->con = null;
    }

    public function getCategory($id)
    {
        $result = $this->con->query('SELECT * FROM category WHERE CAT_ID="'.$id.'"');
        return $result->fetch(PDO::FETCH_ASSOC);

         $this->con = null;
    }

    public function getJobs()
    {

        $result = $this->con->query('SELECT * FROM job ORDER BY EXPIRY_DATE DESC');
        $jobs = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $jobs[] = $row;
        }
        return $jobs;
          $this->con = null;
    }

    public function getJobsId($id)
    {

        $result = $this->con->query('SELECT * FROM job WHERE ID="'.$id.'"');
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return $row;
        $this->con = null;
    }

    public function getUsers()
    {
        $result = $this->con->query('SELECT * FROM user');
        $users = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $users[] = $row;
        }
        return $users;
          $this->con = null;
    }
    public function getUser($id)
    {
        $result = $this->con->query('SELECT * FROM user WHERE USER_ID= "'.$id.'"');
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    //get announcements

    public function getAnnouncements()
    {

        $result = $this->con->query("SELECT * FROM `announcements`");
        $announ= array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $announ[] = $row;
        }

        return $announ;
         $this->con = null;

    }

    public function getAnnouncement($id)
    {

        $result = $this->con->query("SELECT * FROM `announcements` WHERE a_id=$id");
        return $result->fetch(PDO::FETCH_ASSOC);


    }



    //end get functions


    //start delete functions

    public function deleteReview($id)
    {

         $sql = "DELETE FROM reviews WHERE REV_ID='".$id."'";
        $this->con->exec($sql);
    }

    public function deleteCategory($id)
    {

         $sql = "DELETE FROM category WHERE CAT_ID='".$id."'";
        $this->con->exec($sql);
    }

    public function deleteArticle($id)
    {

         $sql = "DELETE FROM article WHERE A_ID='".$id."'";
        $this->con->exec($sql);
    }

    public function deleteJob($id)
    {

         $sql = "DELETE FROM job WHERE ID='".$id."'";
        $this->con->exec($sql);
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM user WHERE USER_ID='".$id."'";
        $this->con->exec($sql);
    }

    public function deleteAnnouncement($id)
    {

        $a_id = $this->getAnnouncement($id);
        $a = $a_id['a_id'];
         $sql = "DELETE FROM announcements WHERE a_id=$a";
        if($this->con->exec($sql) && unlink('../public/uploads/'.$a_id['a_file']))
        {
            return true;
        }
    }

    //end delete functions

}
