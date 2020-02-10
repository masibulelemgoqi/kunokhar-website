exports.signin_page = (req, res) => 
{
   var message = '';
   var userId = req.session.userId;
   if(userId == null)
   {
      res.render('pages/login',
      {
         siteTitle: siteTitle,
         pageTitle: "Log in",
         msg_type: '',
         message: ''
      });
    }else
    {
      res.redirect('/display/jobs');
    }

}

exports.signin = (req, res) => 
{
 
   var emailaddress = req.body.email;
   var password = req.body.password;
   var message = '';

     var query = "SELECT * FROM user WHERE USER_EMAIL_ADDRESS='"+emailaddress+"'";
     con.query(query, (err, result) =>
     {
      if(result.length)
      {
         bcrypt.compare(password, result[0].USER_PASSWORD, function(err, resu) {
            console.log(password);
            console.log(result[0].USER_PASSWORD);
            if(resu)
            {
               req.session.userId = result[0].USER_ID;
               req.session.user = result[0];
               res.redirect('/admin/page');

            }else
            {
               var msg = "Please provide correct email address/password!";
               res.render('pages/login',
               {
                  siteTitle: siteTitle,
                  pageTitle: "Log in",
                  message: msg,  
                  msg_type: "failure"
               });
            }
          
         });

      }else
      {
         var msg = "Please provide correct email address/password!";

            res.render('pages/login',
            {
            siteTitle: siteTitle,
            pageTitle: "Log in",
            message: msg,  
            msg_type: "failure"
            });
      }
     });
}

exports.signout = (req, res) =>
{
   req.session.destroy(function(err)
   {
      res.header('Cache-Control', 'no-cache, private, no-store, must-revalidate, max-stale=0, post-check=0, pre-check=0'); 
      res.redirect("/");
   });
}