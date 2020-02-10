
//####################################views#################################################
exports.view_categories = (req, res) => 
{
   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      con.query('SELECT * FROM category', (err, categories) =>
      {
         res.render('pages/view_categories',
         {
            siteTitle: siteTitle,
            pageTitle: "view categories",
            cats: categories
         });
      });
   }
}

exports.admin_main = (req, res) =>
{
    var userId = req.session.userId;
    if(userId == null)
    {
      res.redirect('/login/page');
    }else
    {
      con.query('SELECT * FROM  article ORDER BY DATE DESC', (err, art_result) =>
      {
         con.query('SELECT * FROM category', (err, cat_result) =>
         {     
            res.render('pages/admin',
            {
               siteTitle: siteTitle,
               pageTitle: "Home",
               articles: art_result,
               categories: cat_result,
               moment: moment
            });
         });
      });
    }
}

exports.view_jobs = (req, res) =>
{

   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {

      var sql = "SELECT * FROM job";
      con.query(sql, (err, jobs) =>
      {  
         res.render('pages/view_jobs',
         {
            siteTitle: siteTitle,
            pageTitle: "Jobs",
            jobs: jobs,
            moment: moment
         });
      });

   }
}

exports.organised_articles = (req, res) =>
{

    var userId = req.session.userId;
    if(userId == null)
    {
      res.redirect('/login/page');
    }else
    {
      con.query("SELECT * FROM article WHERE CAT_ID ='"+req.params.cat_id +"' ORDER BY DATE DESC", (err, result) =>
      {
         con.query('SELECT * FROM category', (err, cat_result) =>
         {  
            res.render('pages/view_articles',
            {
               siteTitle: siteTitle,
               pageTitle: "Articles",
               article_results: result,
               categories: cat_result,
               moment: moment
            });
         });
      });
   }
}

exports.view_users = (req, res) => 
{

   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      con.query("SELECT * FROM user", (err, user) =>
      {
         res.render('pages/users',
         {
            siteTitle: siteTitle,
            pageTitle: "Users",
            msg_type: "",
            userArray: user,
            sess: req.session.user
         });
      });
   }
}

exports.view_reviews = (req, res) =>
{
   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      con.query('SELECT * FROM reviews r, ratings rs WHERE r.RATE_ID = rs.RATE_ID ORDER BY r.REV_DATE DESC', (err, reviews) =>
      {

            res.render('pages/view_reviews',
            {
               siteTitle: siteTitle,
               pageTitle: "view reviews",
               revs: reviews,
               moment: moment
            });

      });
   }
}

//###########################add functions#####################################################

exports.add_article_page = (req, res) =>
{
   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      con.query('SELECT * FROM category', (err, result) =>
      {
         res.render('pages/add_article',
         {
            siteTitle: siteTitle,
            pageTitle: "add article",
            category_items: result
         });
      });
   }
}

exports.add_article = (req, res) =>
{

   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      var category = req.body.category;
      var heading = req.body.heading;
      var content = req.body.content;
      var date = moment(Date.now()).format('YYYY-MM-DD HH:mm:ss');
      var sql = "INSERT INTO article (CAT_ID, HEADING, CONTENT, DATE) VALUES ('"+category+"','"+heading+"','"+content+"', '"+date+"')";
      con.query(sql, (err, result) =>
      {
         res.redirect('/admin/page');
      });
   }
}

exports.add_job_page = (req, res) =>
{
   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      res.render('pages/add_job', 
      {
         siteTitle: siteTitle,
         pageTitle: "add a job",
         jobs: ''
      });
   }
}

exports.add_job = (req, res) =>
{

   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      var job_title = req.body.job_title;
      var job_position = req.body.job_position;
      var job_location = req.body.job_location;
      var job_description = req.body.job_description;
      var date = req.body.job_expiry;
      var image = "NULL";
      var expiry_date = moment(date).format('YYYY-MM-DD');
      var sql = "INSERT INTO job (JOB_TITLE, JOB_POSITION, JOB_LOCATION, EXPIRY_DATE, IMAGE, CONTENT) VALUES ('"+job_title+"','"+job_position+"','"+job_location+"', '"+expiry_date+"', '"+image+"', '"+job_description+"')";
      con.query(sql, (err, result) =>
      {
         res.redirect('/display/jobs');

      });
   }
}

exports.add_category = (req, res) =>
{

   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      var post = req.body;
      var category = post.category;
      var sql = "INSERT INTO category (CAT_NAME) VALUES ('"+category+"')";
      con.query(sql, (err, result) =>
      {
         res.redirect('/view/categories');
      });
   }
}

exports.add_user_page = (req, res) =>
{

   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      res.render('pages/add_user',
      {
         siteTitle: siteTitle,
         pageTitle: "add user",
         msg_type: "",
         message: ''
      });
   }
}

exports.add_user = (req, res) =>
{

   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      var post = req.body;
      var firstname = post.firstname;
      var lastname = post.lastname;
      var email = post.email;
      var username = post.username;
      var password = post.password;
      var password_match = post.password_match;


      if(password === password_match)
      {

         bcrypt.hash(password, saltRounds, function(err, hash) {
            var sql = "INSERT INTO user (USER_NAME, USER_EMAIL_ADDRESS , USER_PASSWORD, USER_FIRSTNAME, USER_LASTNAME) VALUES"+ 
                      "('"+username+"','"+email+"', '"+hash+"','"+firstname+"', '"+lastname+"')";
            con.query(sql, (err, result) =>
            {
               res.redirect('/view/Users');
            });  
         });
 
      }else
      {
         res.render('pages/add_user',
         {

            siteTitle: siteTitle,
            pageTitle: "add user",
            msg_type: "failure",
            message: "PASSWORD DOES NOT MATCH"

         });
      }
   }

}

//#######################################edit functions #################################

exports.edit_category_page = (req, res) =>
{
   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      var id = req.params.category_id;
      con.query("SELECT * FROM category WHERE CAT_ID='"+id+"'",(err, result) =>
      {
         res.render('pages/edit-category', 
         {
            siteTitle: siteTitle,
            pageTitle: 'edit category',
            category: result
         });
      });
   }
}

exports.edit_category = (req, res) =>
{
   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      var post = req.body;
      var id = post.category_id;
      var category = post.category;

      var sql = "UPDATE category SET CAT_NAME='"+category+"' WHERE CAT_ID='"+id+"'";
      con.query(sql, (err, result) =>
      {
         res.redirect('/view/categories');

      });
   }
}

exports.edit_article_page = (req, res) =>
{
   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      con.query("SELECT * FROM article WHERE A_ID='"+req.params.article_id +"'" , (err, result) =>
      {
         con.query("SELECT * FROM category" , (err, result_category) =>
         {
            res.render('pages/edit_article',
            {
               siteTitle: siteTitle,
               pageTitle: "edit title",
               edit_art: result,
               cat_details: result_category
            });
         });
      });
   }
}

exports.edit_article = (req, res) =>
{
   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      var category = req.body.category;
      var heading = req.body.heading;
      var content = req.body.content;
      var id = req.body.article_id;
      var sql = "UPDATE article SET HEADING='"+heading+"', CONTENT='"+content+"', CAT_ID='"+category+"' WHERE A_ID='"+id+"'";
      con.query(sql, (err, result) =>
      {
         if (result.affectedRows)
         {
            res.redirect('/admin/page');
         }
      });
   }
}

exports.edit_job_page = (req, res) =>
{

   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      con.query("SELECT * FROM job WHERE ID='"+req.params.job_id +"'" , (err, result) =>
      {
         res.render('pages/edit_job',
         {
            siteTitle: siteTitle,
            pageTitle: "edit Job",
            edit_job: result,
            moment: moment
         });
      });
   }
}

exports.edit_job = (req, res) =>
{

   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      var id = req.body.job_id;
      var job_title = req.body.job_title;
      var job_position = req.body.job_position;
      var job_location = req.body.job_location;
      var job_description = req.body.job_description;
      var date = req.body.job_expiry;
      var image = "NULL";
      var expiry_date = moment(date).format('YYYY-MM-DD');
      var sql = "UPDATE job SET JOB_TITLE='"+job_title+"', JOB_POSITION='"+job_position+
              "', JOB_LOCATION='"+job_location+"', CONTENT='"+job_description+
              "' , IMAGE='"+image+"' , EXPIRY_DATE='"+expiry_date+"' WHERE ID='"+id+"'";
      con.query(sql, (err, result) =>
      {
         res.redirect('/display/jobs');

      });
   }
}

exports.edit_user_page = (req, res) =>
{
   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      con.query("SELECT * FROM user WHERE USER_ID='"+req.params.user_id +"'" , (err, result) =>
      {
         res.render('pages/edit_user',
         {
            siteTitle: siteTitle,
            pageTitle: "edit User",
            edit_user: result,
            msg_type: "",
            message: ""
         });
      });
   }
}

exports.edit_user = (req, res) =>
{

   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      var post = req.body;
      var firstname = post.firstname;
      var lastname = post.lastname;
      var email = post.email;
      var username = post.username;
      var password = post.password;
      var password_match = post.password_match;

      if(password == password_match)
      {
         bcrypt.hash(password, saltRounds, function(err, hash) {
            var sql = "UPDATE user SET USER_NAME='"+username+"', USER_EMAIL_ADDRESS='"+email+
                    "', USER_PASSWORD='"+hash+"', USER_FIRSTNAME='"+firstname+
                    "' , USER_LASTNAME='"+lastname+"' WHERE USER_ID='"+req.params.user_id+"'";
            con.query(sql, (err, result) =>
            {
               res.redirect('/view/Users');

            });
         });
      }else
      {
         res.render('pages/edit_user',
         {

            siteTitle: siteTitle,
            pageTitle: "add user",
            msg_type: "failure",
            message: "PASSWORD DOES NOT MATCH"

         });
      }
   }

}

//#############################################delete function ##################################

exports.delete_category = (req, res) =>
{

   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      con.query("DELETE FROM category WHERE CAT_ID='"+req.params.category_id +"'",(err, result) =>
      {
         if (result.affectedRows)
         {
            res.redirect('/view/categories');
         }
      });
   }
}

exports.delete_article = (req, res) =>
{

   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      con.query("DELETE FROM article WHERE A_ID='"+req.params.article_id +"'",(err, result) =>
      {
         if (result.affectedRows)
         {
            res.redirect('/admin/page');
         }
      });
   }
}

exports.delete_user = (req, res) =>
{

   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      con.query("DELETE FROM user WHERE USER_ID='"+req.params.user_id +"'", (err, result) =>
      {
         if (result.affectedRows)
         {
            res.redirect('/view/Users');
         }
      });
   }
}

exports.delete_job = (req, res) =>
{

   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {  
      con.query("DELETE FROM job WHERE ID='"+req.params.job_id +"'", (err, result) =>
      {
         if (result.affectedRows)
         {
            res.redirect('/display/jobs');
         }
      });
   }
}

exports.delete_review = (req, res) =>
{

   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      con.query("DELETE FROM reviews WHERE REV_ID='"+req.params.id+"'", (err, result)=>
      {
         if (result.affectedRows) 
         {
            res.redirect('/view/reviews');
         }
      });
   }

}

//password reset

exports.check_email_exists = (req, res, next) =>
{
   con.query("SELECT USER_EMAIL_ADDRESS FROM user WHERE USER_EMAIL_ADDRESS='"+req.body.email+"'", (err, result) =>
   {
         console.log(result.length);
         if(result.length)
         {
            var output = "";
            var i;
            for(i = 1; i <= 8; i++)
            {
               output += ""+Math.floor(Math.random() * 10);
            }
            sendEmail(req.body.email, output);
            con.query("INSERT INTO temp_pass(temp_email, temp_code) VALUES('"+req.body.email+"','"+output+"')"), (err, result) =>
            {   
               if(!err)
               {
                  console.log("success");
               }else
               {
                  console.log("failure");
               }            
  
            }

            res.send("1");

         }else
         {
            res.send("0");
         }


   });

   function sendEmail(email, code)
   {

      var transporter = nodemailer.createTransport(
      {
         host: "smtp.gmail.com",
         port: 465,
         secure: true,
         auth: 
         {
               user: 'uhtomeek.music@gmail.com',
               pass: 'MMMaaa232'
         }
      })

      var mailOptions = 
      {
         from: 'Kunokhar <uhtomeek.music@gmail.com>',
         to : `${email}`,
         subject: 'email reset access code',
         text : `Dear Kunokhar admin user,\n\n your access code: ${code}`
      }      
      
      transporter.sendMail(mailOptions, (err, response) =>
      {
         if(err)
         {
            console.log(err);
         }else
         {
            console.log('email sent');
         }
      })
   }
}

//check if access code exists

exports.check_code_exists = (req, res) =>
{
   var password = req.body.new_password;
   var sql = "SELECT * FROM temp_pass WHERE temp_code = '"+req.body.code+"'";

   con.query(sql, (err, answer) =>
   {
      if(answer.length)
      {
       var email = answer[0].temp_email;
       bcrypt.hash(password, saltRounds, (err, hash)=> 
       {
       var update_pwd = "UPDATE user SET USER_PASSWORD='"+hash+"' WHERE USER_EMAIL_ADDRESS='"+email+"'";
       con.query(update_pwd, (err, result) =>
       {
         if(result.affectedRows)
         {
           console.log("password updated");
           res.send("1");
         }
       });
      });
        con.query("DELETE FROM temp_pass WHERE temp_email ='"+email+"'", (err, localdata) =>
         {
            console.log("Temporary data cleared");
         });
      }else
      {
        res.send("0");
      }
         
   });

}

//get access code page
exports.get_access_page = (req, res) =>
{
   res.render('pages/access_code',
   {
      siteTitle: siteTitle,
      pageTitle: "Access code"
   });  
}

