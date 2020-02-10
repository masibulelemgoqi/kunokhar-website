<footer id="footer">
      <div class="container">
         <div class="content">
            <div class="row">
               <div class="col-sm-4">
                  <h3>About Us</h3>
                  <p>Kunokhar Chartered Accountants & Tax Practitioners (Pty) Ltd “Kunokhar CTP” is a financial services company that provides financial consulting solutions tailored to your entity, irrespective of its size.... </p>
                  <a href="#aboutUs-container" class="w3-left more-btn">More</a>
               </div>
               <div class="col-sm-6">
                  <h3>Our Services</h3>
                  <div class="row">
                     <div class="col-sm-6">
                        <ul class="">
                           <li><a href="#">CIPC Company Registration</a></li>
                           <li><a href="#">SARS</a></li>
                           <li><a href="#">Labour</a></li>
                        </ul>
                     </div>
                     <div class="col-sm-6">
                        <ul class="">
                           <li><a href="#">Construction</a></li>
                           <li><a href="#">Accounting</a></li>
                           <li><a href="#">Legal Proffesion</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
                 <div class="col-sm-2">
                  <h3>Follow Us</h3>
                  <ul class="social">
                     <li><a href="https://twitter.com/KunokharFinance?s=08"><i class="fa fa-twitter text-danger"></i>&nbsp;@KunokharFinance</a></li>
                     <li><a href="https://www.facebook.com/Kunokhar-CTP-2101496813290913/"><i class="fa fa-facebook text-danger"></i>&nbsp;Kunokhar CTP</a></li>
                     <li><a href="https://www.linkedin.com/in/kunokhar-ctp-931857180"><i class="fa fa-linkedin text-danger"></i>&nbsp;Kunokhar CTP</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="copyright w3-center">
            <p>(+27) 87 688 0700 | <a href="mailto:mail@email.com">nikita@kunokhar.co.za</a> | &copy; <?php print(date("Y"));?> Kunokhar. All right reserved.</p>
         </div>
      </div>
   </footer>
   <script type="text/javascript" src="../public/js/jquery.min.js"></script>
   <script type="text/javascript" src="../public/css/owl-carousel/owl.carousel.min.js"></script>
   <script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="../public/js/main.js"></script>
   <script src="../public/js/jquery.flexslider-min.js"></script>
   <script>

   function getParameterByName(name) {
       name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
       var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
           results = regex.exec(location.search);
       return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
   }


   $(document).ready(function(){
       var param_scroll = getParameterByName('id');
       if(param_scroll){
           $('html, body').animate({
               scrollTop: $("#"+param_scroll).offset().top
           }, 3000);
       }
   });


   </script>
   </body>
   </html>
