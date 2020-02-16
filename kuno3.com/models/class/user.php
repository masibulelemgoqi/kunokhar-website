<?php

require_once('dbconnect.php');

class User{

    private $con;

    public function __construct(){
        $conn = new Connect();
        $sql = $conn->connect();
        $this->con = $sql;

    }


    public function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
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

    public function addReview($firstname, $lastname, $comment, $rating)
    {
        $rdate = date('Y-m-d H:i:s');
        $sql = 'INSERT INTO reviews (REV_FIRSTNAME,REV_LASTNAME, RATE_ID, REV_COMMENT, REV_DATE)
                VALUES(:firstname, :lastname, :rating, :comment, :rdate)';
        try {

                    $stmt = $this->con->prepare($sql);
                    $stmt->bindParam(':firstname', $firstname);
                    $stmt->bindParam(':lastname', $lastname);
                    $stmt->bindParam(':rating', $rating);
                    $stmt->bindParam(':comment', $comment);
                    $stmt->bindParam(':rdate', $rdate);

                    if($stmt->execute()){
                        return true;
                        $this->con = null;
                    }

            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
            }

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
        $articles = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $articles[] = $row;
        }

        return $articles;
         $this->con = null;
    }

    public function getCategory($id)
    {
        $result = $this->con->query('SELECT * FROM category WHERE CAT_ID="'.$id.'"');
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

    public function getJobs()
    {

      $d = date('d');
      $m = date('m');
      $y = date('Y');
      $result = $this->con->query('SELECT * FROM `job` WHERE '.$y. '= YEAR(`EXPIRY_DATE`) AND '.$m.' = MONTH(`EXPIRY_DATE`) AND '.$d.'< DAY(`EXPIRY_DATE`) ORDER BY `EXPIRY_DATE` DESC');
        $jobs = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $jobs[] = $row;
        }
        return $jobs;
          $this->con = null;
    }

    public function sendEmail($name, $email, $cellnumber, $message)
    {
              require_once '../phpmailer/PHPMailerAutoload.php';

              $from = 'info@kunokhar.com'; // this is the sender's Email address
              $mail = new PHPMailer;
              //$mail->isSMTP();
              $mail->Host = 'mail.kunokhar.com';
              $mail->SMTPAuth = true;
              $mail->SMTPSecure = 'tls';

              $mail->Username = $from;
              $mail->Password = '!nf0@kuN0kh@r';

              $mail->setFrom($email, $name);
              $mail->addAddress($from);

              $mail->isHTML(true);
              $mail->Subject = 'Website message at Kunokhar.co.za';
              $msg = '<h5>message: '.$message.'</h5><br><br>
                      <h5>contact number: '.$cellnumber.'</h5><br><br>';
              $mail->Body = $msg;

              if($mail->send())
              {
                  return true;
              }

    }

    //get announcements

    public function getAnnouncements()
    {

        $result = $this->con->query($sql = "SELECT * FROM `announcements`");
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
       /*$this->con = null;*/

    }

    public function addViews($id)
    {

        $get_views = $this->con->query("SELECT a_views FROM `announcements` WHERE a_id = $id");
        $row = $get_views->fetch(PDO::FETCH_ASSOC);

        $views = $row['a_views'] + 1;

        $result = $this->con->prepare("UPDATE `announcements` SET a_views=$views WHERE a_id=$id");
        $result->execute();
       /*$this->con = null;*/

    }

    public function getComments($id)
    {

        $result = $this->con->query("SELECT * FROM `comments` WHERE a_id=$id");

        $row = array();


        while($comment = $result->fetch(PDO::FETCH_ASSOC))
        {
            $row[] = $comment;
        }
        return $row;
       /*$this->con = null;*/

    }
    public function getCommentCount($id)
    {

        $result = $this->con->query("SELECT COUNT(a_id) AS comment_count FROM `comments` WHERE a_id=$id");
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return $row['comment_count'];
       /*$this->con = null;*/

    }

    public function addComment($announcemnt_id, $full_name, $comment)
    {
        $name;
        if(isset($_COOKIE['user_commenting']))
        {
            $name = $_COOKIE['user_commenting'];
        }else
        {
            $name = $full_name;
        }

        $date_now = date('Y-m-d H:i:s');
        $sql = "INSERT INTO `comments` (`a_id`, `c_comment`, `c_fullname`, `c_date`) VALUES (:announcemnt_id, :comment, :name, :date_now)";

        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':announcemnt_id', $announcemnt_id);
        $stmt->bindParam(':comment', $comment);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':date_now', $date_now);

        if($stmt->execute())
        {
            $cookie_name = "user_commenting";
            $cookie_value = $name;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            return true;
            $this->con = null;
        }


    }

    public function add_reply($announcemnt_id, $comment_id, $full_name, $reply)
    {
        $sql = "INSERT INTO `replies` (`a_id`, `c_id`, `r_reply`, `r_fullname`) VALUES (:announcemnt_id, :comment_id, :reply, :full_name)";

        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':announcemnt_id', $announcemnt_id);
        $stmt->bindParam(':comment_id', $comment_id);
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':reply', $reply);

        if($stmt->execute())
        {
            return true;
            $this->con = null;
        }


    }

    public function checkUserSession()
    {
      session_start();
      if(isset($_SESSION['visit']))
      {
        return true;
      }else
      {
        return false;
      }
    }

    public function add_visit()
    {
      $date = date("Y-m-d");
      if(!$this->checkUserSession())
      {
        $_SESSION['visit'] = round(microtime(true) * 1000);
        if($this->get_visits_today() == null)
        {
          try
          {
            $number = rand(1,30);
            $sql = "INSERT INTO `site_visits` (`visits_date`, `visits_number`) VALUES(:date, :number)";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':number', $number);
            if($stmt->execute())
            {
              return true;
              $this->con = null;

            }else
            {
              return false;
            }
          } catch (PDOException $e)
          {
            echo "Error".$e->getMessage();
          }

        }else
        {
          $row = $this->get_visits_today();
          $id = $row["visits_id"];
          $number = $row["visits_number"] + rand(1,30);
          $sql = "UPDATE `site_visits` SET `visits_number`=:number WHERE `visits_id`=:id";
          $stmt = $this->con->prepare($sql);
          $stmt->bindParam(':number', $number);
          $stmt->bindParam(':id', $id);
          if($stmt->execute())
          {
            return true;
            $this->con = null;

          }else
          {
            return false;
          }
        }
      }
    }

    public function get_visits_today()
    {
          $date = date("Y-m-d");
          $stmt = $this->con->query("SELECT * FROM `site_visits` WHERE `visits_date` ='" .$date."'");
          return $stmt->fetch(PDO::FETCH_ASSOC);
          $this->con = null;
    }

    public function get_visits_month()
    {
      try
      {
          $month_visits = 0;
          $month = date("m");
          $year = date("Y");
          $stmt = $this->con->query("SELECT * FROM `site_visits` WHERE YEAR(`visits_date`) = $year AND MONTH(`visits_date`) = $month");
          while($row = $stmt->fetch(PDO::FETCH_ASSOC))
          {
            $month_visits += $row['visits_number'];
          }
          return $month_visits;
          $this->con = null;

      } catch (PDOException $e)
      {
          echo "Error: ".$e->getMessage();
      }

    }

    public function get_visits_all()
    {
      try
      {
          $total_visits = 0;
          $stmt = $this->con->query("SELECT * FROM `site_visits`");
          while($data = $stmt->fetch(PDO::FETCH_ASSOC))
          {
            $total_visits += $data['visits_number'];
          }
          return $total_visits;
          $this->con = null;

      } catch (PDOException $e)
      {
          echo "Error: ".$e->getMessage();
      }

    }

  private function bd_nice_number($n) {
      // first strip any formatting;
      $n = (0+str_replace(",","",$n));

      // is this a number?
      if(!is_numeric($n)) return false;

      // now filter it;
      if($n>1000000000000) return round(($n/1000000000000),1).' T';
      else if($n>1000000000) return round(($n/1000000000),1).' B';
      else if($n>1000000) return round(($n/1000000),1).' M';
      else if($n>1000) return round(($n/1000),1).' K';

      return number_format($n);
  }

  public function display_visits()
  {

    $html = '<div class="col-sm-6 col-sm-push-4">
                     <div class="counter">'.$this->bd_nice_number($this->get_visits_today()["visits_number"]).'<h4><i class="fa fa-eye"></i> Today</h4></div>
                     <div class="counter">'.$this->bd_nice_number($this->get_visits_month()).' <h4><i class="fa fa-eye"></i> Month</h4></div>
                     <div class="counter">'.$this->bd_nice_number($this->get_visits_all()).'<h4><i class="fa fa-eye"></i> All Time</h4></div>
              </div>';
    print($html);
  }


}
