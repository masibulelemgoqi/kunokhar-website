exports.back_home = (req,res) =>
{

   var userId = req.session.userId;
   if(userId == null)
   {
      res.redirect('/login/page');
   }else
   {
      res.redirect('/admin/page');
   }
}