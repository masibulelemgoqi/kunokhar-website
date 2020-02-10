
exports.reviews = (req, res) =>
{

   var userId = req.session.userId;
   if(userId != null)
   {
      res.redirect('/admin/page');
   }
   else
   {
      con.query('SELECT * FROM reviews r, ratings rs WHERE r.RATE_ID = rs.RATE_ID ORDER BY r.REV_DATE DESC', (err, reviews) =>
      {

            res.render('index',
            {
               siteTitle: siteTitle,
               pageTitle: "Clients home",
               revs: reviews,
               moment: moment
            });

      });
   }
}

exports.articles = (req, res) => 
{
   con.query('SELECT * FROM  article ORDER BY DATE DESC', (err, art_result) =>
   {
      con.query('SELECT * FROM category', (err, cat_result) =>
      {     
         res.render('pages/user_articles',
         {
            siteTitle: siteTitle,
            pageTitle: "Articles",
            articles: art_result,
            categories: cat_result,
            moment: moment
         });
      });
   });
}

exports.articles_by_category = (req, res) =>
{
   var id = 
      con.query("SELECT * FROM article WHERE CAT_ID ='"+req.params.cat_id +"' ORDER BY DATE DESC", (err, result) =>
      {
         con.query('SELECT * FROM category', (err, cat_result) =>
         {  
            res.render('pages/user_articles_bycategory',
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

exports.jobs = (req, res) =>
{
   var sql = "SELECT * FROM job";
   con.query(sql, (err, jobs) =>
   {  
      res.render('pages/user_jobs',
      {
         siteTitle: siteTitle,
         pageTitle: "Jobs",
         jobs: jobs,
         moment: moment
      });
   });
}

exports.add_review =  (req, res) => 
{

   const post = req.body;
   var firstname = post.firstname;
   var lastname = post.lastname;
   var comment = post.comment;
   var rating = post.rating;
   var date = moment(date).format('YYYY-MM-DD HH:mm:ss');
   var sql = "";

   if(firstname == "" || lastname == "")
   {
      firstname = "Anonymous";
      lastname = "NULL";
      sql += "INSERT INTO `reviews` (`REV_FIRSTNAME`, `REV_LASTNAME`, "+
      "`RATE_ID`, `REV_COMMENT`, `REV_DATE`) VALUES ('"+firstname+"',"+
      " '"+lastname+"', '"+rating+"', '"+comment+"', '"+date+"')";

   }else
   {
      sql += "INSERT INTO `reviews` (`REV_FIRSTNAME`, `REV_LASTNAME`, "+
      "`RATE_ID`, `REV_COMMENT`, `REV_DATE`) VALUES ('"+firstname+"',"+
      " '"+lastname+"', '"+rating+"', '"+comment+"', '"+date+"')";
   }

   con.query(sql, (err, response) =>
   {
      res.send("Review added, check it!!");
   });
}

exports.send_email = (req, res, next) =>
{
  process.env.NODE_TLS_REJECT_UNAUTHORIZED = "0";
  let mailOpts, smtpTrans;
  smtpTrans = nodemailer.createTransport({
    host: "smtp.gmail.com",
    port: 465,
    secure: true,
    auth: {
      user: "uhtomeek.music@gmail.com",
      pass: "MMMaaa232"
    },

    tls:
    {
      secureProtocol: "TLSv1_method"
    }
  });


  mailOpts = {

    to: "uhtomeek.music@gmail.com",
    subject: 'New message from contact form at Kunokhar.co.za',
    text: `${req.body.names} (${req.body.email}) \n\n${req.body.message}\n\n contact #: ${req.body.contact}`
  };

  smtpTrans.sendMail(mailOpts, function (error, response) 
  {
    if(error)
    {
      return next(error);
    } 
    res.send("Email sent! Thank you we'll be in touch soon.");
    next();

  });
}

exports.view_reset = (req, res) =>
{
  res.render('pages/forgot_password',
  {
    siteTitle: siteTitle,
    pageTitle: "Reset password"
  });
}
