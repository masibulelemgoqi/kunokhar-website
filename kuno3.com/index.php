<!DOCTYPE html>
<html>
<head>
   <title>Kunokhar (pty) Ltd</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Kunokhar website of Accountants">
   <meta name="keywords" content="Kunokhar cpt, Rholihlahla Vuzane, mthatha, Accounting firm, Some code, Vuzane, kunokar, my++, my plus plus, Acountants website, red site, green site, Masibulele Mgoqi, Simamkele Ndabeni, Verns, Vernon, Mthatha Business">
   <meta name="author" content="SomeCode">
   <link rel="shortcut icon" href="public/img/Logo/kunokharK.ico">
   <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="public/css/style.css">
   <link rel="stylesheet" type="text/css" href="public/css/mystyle.css">
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="public/css/w3.css">
   <link rel="stylesheet" href="public/css/animate.css">
   <link href="https://fonts.googleapis.com/css?family=Alegreya&display=swap" rel="stylesheet">
   <style type="text/css">
      /* width */
      ::-webkit-scrollbar {
         width: 10px;
         height: 10px;
      }

      /* Track */
      ::-webkit-scrollbar-track {
         background: #f1f1f1;
      }

      /* Handle */
      ::-webkit-scrollbar-thumb {
         background: #ff3333;
         border-radius: 0px;
      }

      /* Handle on hover */
      ::-webkit-scrollbar-thumb:hover {
         background: #4CAF50;
      }
      #aboutUs {
         display: -webkit-box;
         display: -moz-box;
         display: -ms-flexbox;
         display: -webkit-flex;
         display: flex;
         flex-wrap: wrap;
         -webkit-flex-wrap: wrap;
         -moz-flex-wrap: wrap;
         width: 100%;
      }

      #aboutUs-container .container .heading {
         margin-bottom: 30px;
         color: #000;
         font-family: "Playfair Display", serif;
         font-style: italic;
         font-weight: 300;
         position: relative;
         padding-bottom: 20px;
         text-align: center;
      }

      #aboutUs-container .container .heading:after {
         content: "";
         position: absolute;
         bottom: 0;
         width: 40px;
         height: 2px;
         left: 50%;
         background: red;
         margin-left: -20px;
      }

      #aboutUs-container .container .content .vision, .mission {
         background-color: #ff3333;
         margin-bottom: 50px;
         padding: 1.5em;
         color: #e6e6e6;
         border-radius: 3px;
      }

      #aboutUs-container .container .content .mission:hover {
         background-color: #ff1a1a;
      }

      #aboutUs-container .container .content .vision:hover {
         background-color: #ff1a1a;
      }

      .w3-card-8 {
         box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
      }

      .w3-card-12 {
         box-shadow:0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19) !important;
      }

      .w3-card-16 {
         box-shadow:0 16px 24px 0 rgba(0,0,0,0.22),0 25px 55px 0 rgba(0,0,0,0.21) !important;
      }

      .w3-card-24 {
         box-shadow:0 24px 24px 0 rgba(0,0,0,0.2),0 40px 77px 0 rgba(0,0,0,0.22) !important
      }

.bubbly-button {
  font-family: 'Helvetica', 'Arial', sans-serif;
  display: inline-block;
  font-size: 1em;
  padding: 1em 2em;
  -webkit-appearance: none;
  appearance: none;
  background-color: #45d145;
  color: #fff;
  border-radius: 4px;
  border: none;
  cursor: pointer;
  position: relative;
  transition: transform ease-in 0.1s, box-shadow ease-in 0.25s;
  box-shadow: 0 2px 25px rgba(255, 0, 130, 0.5);
position: fixed;
bottom: 10px;
left: 10px;
}
.bubbly-button:focus {
  outline: 0;
}
.bubbly-button:before, .bubbly-button:after {
  position: absolute;
  content: '';
  display: block;
  width: 140%;
  height: 100%;
  left: -20%;
  z-index: -1000;
  transition: all ease-in-out 0.5s;
  background-repeat: no-repeat;
}
.bubbly-button:before {
  display: none;
  top: -75%;
  background-image: radial-gradient(circle, tomato 20%, transparent 20%), radial-gradient(circle, transparent 20%, tomato 20%, transparent 30%), radial-gradient(circle, tomato 20%, transparent 20%), radial-gradient(circle, tomato 20%, transparent 20%), radial-gradient(circle, transparent 10%, tomato 15%, transparent 20%), radial-gradient(circle, tomato 20%, transparent 20%), radial-gradient(circle, tomato 20%, transparent 20%), radial-gradient(circle, tomato 20%, transparent 20%), radial-gradient(circle, tomato 20%, transparent 20%);
  background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%, 10% 10%, 18% 18%;
}
.bubbly-button:after {
  display: none;
  bottom: -75%;
  background-image: radial-gradient(circle, tomato 20%, transparent 20%), radial-gradient(circle, #tomato 20%, transparent 20%), radial-gradient(circle, transparent 10%, tomato 15%, transparent 20%), radial-gradient(circle, tomato 20%, transparent 20%), radial-gradient(circle, tomato 20%, transparent 20%), radial-gradient(circle, tomato 20%, transparent 20%), radial-gradient(circle,tomato 20%, transparent 20%);
  background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 10% 10%, 20% 20%;
}
.bubbly-button:active {
  transform: scale(0.9);
  background-color: #2d912d;
  box-shadow: 0 2px 25px rgba(255, 0, 130, 0.2);
}
.bubbly-button.animate:before {
  display: block;
  animation: topBubbles ease-in-out 0.75s forwards;
}
.bubbly-button.animate:after {
  display: block;
  animation: bottomBubbles ease-in-out 0.75s forwards;
}

@keyframes topBubbles {
  0% {
    background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%, 40% 90%, 55% 90%, 70% 90%;
  }
  50% {
    background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%, 50% 50%, 65% 20%, 90% 30%;
  }
  100% {
    background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%, 50% 40%, 65% 10%, 90% 20%;
    background-size: 0% 0%, 0% 0%,  0% 0%,  0% 0%,  0% 0%,  0% 0%;
  }
}
@keyframes bottomBubbles {
  0% {
    background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%, 70% -10%, 70% 0%;
  }
  50% {
    background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%, 105% 0%;
  }
  100% {
    background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%, 110% 10%;
    background-size: 0% 0%, 0% 0%,  0% 0%,  0% 0%,  0% 0%,  0% 0%;
  }
}

#footer .counter-row {
        text-align: center;
        display: table;
        position: absolute;
        top: -70px;
        z-index: 99;
        width: 100%;
}

#footer .counter-row .counter h4 {
      font-size:14px;
      font-weight: bold;
      margin:0;
      color: #555;
}

#footer .counter-row .counter {
  display: table-cell;
  margin: 0;
  font-size:30px;
  background-color: #fff;
  border: 1px solid #222;
  width:150px;
  border-radius: 50%;
  height:150px;
  vertical-align: middle;
  color: #222;
}


   </style>

</head>
<body>
   <header>
      <nav class="navbar navbar-fixed-top myNav main_menu_bg">
         <div class="container">
            <div class="navbar-header">
               <button class="navbar-toggle" data-target="#mynav" data-toggle="collapse" style="width: 40px; height: 40px;">
                  <span class="icon-bar" style="background-color: white;"></span>
                  <span class="icon-bar" style="background-color: white;"></span>
                  <span class="icon-bar" style="background-color: white;"></span>
               </button>
               <a href="../" class="navbar-brand original-brand"><img src="public/img/Logo/kunokharK.png" width="40" style="margin-top: -15px;"></a>
               <a href="../" class="navbar-brand grey-brand"><img src="public/img/Logo/kunokharK_grey.png" width="40" style="margin-top: -15px;"></a>
            </div>
            <div class="collapse navbar-collapse w3-right" id="mynav">
               <ul class="nav navbar-nav">
                  <li><a href="../#aboutUs-container" class="myNavHead">About</a></li>
                  <li><a href="../#services-container" class="myNavHead">Services</a></li>
                  <li><a href="../#staff-container" class="myNavHead">Staff</a></li>
                  <li><a href="../#reviews-container" class="myNavHead">Reviews</a></li>
                  <li><a href="../#contactUs-container" class="myNavHead">Contact</a></li>
                  <li><a href="pages/user_articles.php" class="myNavHead">Articles</a></li>
                  <li><a href="pages/user_jobs.php" class="myNavHead">Careers</a></li>
                  <li><a href="pages/announcements_user.php" class="myNavHead">Announcements</a></li>
                  <li><a href="pages/login.php" class="myNavHead">admin</a></li>
               </ul>
            </div>
         </div>
      </nav>
   </header>
  <!--
    ====================================================================================================================
                                            ------- Desktop Slide Show -------
    ====================================================================================================================
  -->
  <main>
   <div id="slide-show-container" class="w3-hide-medium w3-hide-small">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
         </ol>
         <div class="carousel-inner">
            <div class="overlay"></div>
            <div class="item active">
               <img src="public/img/staff/every7.jpg" style="width: 100%">
            </div>
            <div class="item">
               <img src="public/img/staff/every2.jpg" style="width: 100%">
            </div>
            <div class="item">
               <img src="public/img/staff/every3.jpg" style="width: 100%">
            </div>
            <div class="item">
               <img src="public/img/staff/every4.jpg" style="width: 100%">
            </div>
            <div class="item">
               <img src="public/img/staff/every5.jpg" style="width: 100%">
            </div>
            <div class="item">
               <img src="public/img/staff/every1.jpg" style="width: 100%">
            </div>
         </div>
         <div class="carousel-footer">
            <div class="container">
               <p class="w3-center">"We Are Changing The World"</p>
            </div>
         </div>
      </div>
   </div><!-- Desktop slide ends -->

  <!--
    ====================================================================================================================
                                            ------- Mobile Slide Show -------
    ====================================================================================================================
  -->
   <div id="slide-show2-container" class="w3-hide-large">
     <div id="myCarousel2" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
          <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel2" data-slide-to="1"></li>
          <li data-target="#myCarousel2" data-slide-to="2"></li>
          <li data-target="#myCarousel2" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner">
          <div class="overlay"></div>
          <div class="item active">
             <img src="public/img/staff/mobile/1.jpg" style="width: 100%">
          </div>
          <div class="item">
             <img src="public/img/staff/mobile/2.jpg" style="width: 100%">
          </div>
          <div class="item">
             <img src="public/img/staff/mobile/3.jpg" style="width: 100%">
          </div>
          <div class="item">
             <img src="public/img/staff/mobile/4.jpg" style="width: 100%">
          </div>
          <div class="item">
             <img src="public/img/staff/mobile/5.jpg" style="width: 100%">
          </div>
          <div class="item">
             <img src="public/img/staff/mobile/6.jpg" style="width: 100%">
          </div>
       </div>
       <div class="carousel-footer">
          <div class="container">
             <p class="w3-center">"We Are Changing The World"</p>
          </div>
       </div>
     </div>
   </div>

   <a href="#" id="scroll" style="display: none;"><span></span></a>

  <!--
    ====================================================================================================================
                                            ------- About The Company -------
    ====================================================================================================================
  -->


   <div id="aboutUs-container" class="section">
      <div class="container">
         <h1 class="heading">About-us</h1>
         <div class="content row">
            <div class="col-sm-6">
               <div class="about-kunokhar">
                  <p>
                      <strong> Kunokhar Chartered Accountants & Tax Practitioners (Pty) Ltd “Kunokhar CTP” </strong> is the biggest, most innovative and a leading accounting firm around Mthatha. We are a financial services company that provides financial consulting solutions tailored to your entity, irrespective of its size.<br><br>
                      We are 100% black owned qualified Chartered Accountants who are members of the South African Institute of Chartered Accountants (SAICA). We are a BBBEE level 1 rating, and that means you have reached your preferred financial business partner to assist you with all your business needs.<br><br>
                      Kunokhar strives to reflect the demographics of South Africa and makes conscious steps towards ensuring that most of its staff are from previously disadvantaged communities. We are also in the process of finalising a bursary fundraising scheme that will assist our employees to further their academic aspirations
                     <div id="more-to-scroll"><br><br></div>
                     <div id="more">
                      Our team take the time to understand our clients’ business and overall personal and business goals. This enables us to provide a strategic advisory service that helps support our clients’ growth ambitions.<br><br>
                        <div class="aboutUS-headings"> Ethics and values<hr class="border-line-type"></div>
                        <ol class="custom-counter">
                          <li>To exhibit the highest ethical standards in all our work,</li>
                          <li>To be an industry leader in the quality of our work,</li>
                          <li>To commit ourselves to constantly improving the skills and services that we offer,</li>
                          <li>To constantly look for development opportunities for our clients, staff and business, and</li>
                          <li>To ensure that every client secrete is safe with us. </li>
                        </ol>
                        <div class="aboutUS-headings">What we believe in <hr class="border-line-type"></div>
                        <p>
                          At Kunokhar Chartered accountants and tax practitioners we believe we are one of the most dynamic and progressive firms of accountants. We understand that it is our responsibility to look after our clients by providing strategic business advice and full accountancy services.<br><br>
                           Our focus is on being pro-active advisers, providing an extensive range of business advisory services. Areas we typically support our clients on include amongst others; financial management, tax compliance, labour compliance, strategic planning for business growth, management information reports and systems, reviewing borrowing and funding requirements and buying, selling or restructuring a business, payroll and company secretarial services.<br><br>
                        </p>
                        <div class="aboutUS-headings">Corporate Social Responsibility<hr class="border-line-type"></div>
                        <p>
                          Kunokhar identifies itself as a responsible citizen within the community in which it operates. Therefore, feels a sense of need to make a real contribution to the transformation of our local society.<br><br>

                          Social responsibility is very crucial to us as we aim to be responsible corporate citizens, we can only achieve that by investing in the future of the community we serve and ultimately the country. Through Corporate Social Responsibility initiatives, we strive to show that we are fully committed to the development of our fellow South Africans. Our aim is that we make contribution to the continued transformation of our society.
                        </p>
                     </div>
                     <span id="showit"><button class="btn btn-default btn-md">Read More</button></span>
                    <span id="hideit"><button class="btn btn-default btn-md">Hide</button></span>
                  </p>
               </div>
            </div>
            <div style="border-left: 2px solid red; border-width: 50%;"></div>
            <div class="col-sm-6">
               <div class="vision w3-card-8 w3-animate-zoom">
                  <h3 class="sub-head">Vision</h3>
                  <p>
                     Striving to be the training office of first choice which responds adequately to the needs of the society it serve.
                  </p>
               </div>
               <div class="mission w3-card-8 w3-animate-zoom">
                  <h3 class="sub-head">Mission</h3>
                  <p>
                     To make our services available to all stakeholders at a convenient, competent quality and in most affordable price.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div><!-- About Ends -->

  <!--
    ====================================================================================================================
                                            ------- Services Of The Company -------
    ====================================================================================================================
  -->


<div id="services-container" class="section">
    <div class="container">
      <h1 class="heading">Our-services</h1>
      <div class="content">
        <div class="row">
           <div class="col-sm-4">
              <div class="thumbnail">
                <div class="w3-center" >
                  <img src="public/img/CIPC.png" style="" width="100" alt="SARS image">
                </div>
                 <h3 class="sub-head">CIPC</h3>
                 <ul >
                    <li>New company registration (Pty)</li>
                    <li>New company registration Inc (Pty)</li>
                    <li>New company registration NPO</li>
                 </ul>
                 <div class="w3-right" style="bottom: 18px; position: absolute;">
                    <button class="btn btn-default w3-right" onclick="document.getElementById('cipc-mod').style.display='block'">more</button>
                 </div>

                 <div id="cipc-mod" class="w3-modal">
                    <div class="w3-modal-content">
                       <header class="w3-container w3-red">
                          <span onclick="document.getElementById('cipc-mod').style.display='none'" class="w3-button w3-display-topright" style="font-size: 20px"><i class="fa fa-close"></i></span>
                          <h1 class="w3-center">CIPC</h1>
                       </header>
                       <div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul>
                                        <li>New company registration (Pty)</li>
                                        <li>New company registration Inc (Pty)</li>
                                        <li>New company registration NPO</li>
                                        <li>New company registration NGO</li>
                                        <li>New company registration CO-OP</li>
                                        <li>Company name change</li>
                                        <li>Remove director</li>
                                        <li>Change auditor</li>
                                    </ul>
                                </div>

                            <div class="col-sm-6">
                               <ul>
                                    <li>Change Address</li>
                                    <li>Retrival of companies</li>
                                    <li>Conversion of CC to PTY</li>
                                    <li>Conversion of Private to Public</li>
                                    <li>Conversion of Public to PrivateCIPC fees)</li>
                                    <li>Shelf Company</li>
                                    <li>Certificate Re-print</li>
                               </ul>
                            </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-sm-4">
              <div class="thumbnail">
                <div class="w3-center" >
                  <img src="public/img/SARS_icon.png" style="" width="100" alt="SARS image">
                </div>

                 <h3 class="sub-head">SARS</h3>
                 <ul>
                    <li>Income Tax registration-company</li>
                    <li>Income Tax registration-Individual</li>
                    <li>PAYE Application</li>
                 </ul>

                 <div class="w3-right" style="bottom: 18px; position: absolute;">
                    <button class="btn btn-default w3-right" onclick="document.getElementById('sars-mod').style.display='block'">more</button>
                 </div>

                <div id="sars-mod" class="w3-modal">
                    <div class="w3-modal-content">
                       <header class="w3-container w3-red">
                          <span onclick="document.getElementById('sars-mod').style.display='none'"  class="w3-button w3-display-topright" style="font-size: 20px"><i class="fa fa-close"></i></span>
                          <h1 class="w3-center">CIPC</h1>
                       </header>
                       <div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul>
                                        <li>Income Tax registration-company</li>
                                        <li>Income Tax registration-Individual</li>
                                        <li>PAYE Application</li>
                                        <li>UIF Application</li>
                                        <li>SDL Application</li>
                                        <li>PAYE-UIF-SDL</li>
                                        <li>Tax return IT12/ITR14 (please supply AFS)</li>
                                        <li>Tax opinions</li>
                                    </ul>
                                </div>

                            <div class="col-sm-6">
                               <ul>
                                    <li>VAT application</li>
                                    <li>Tax Planning</li>
                                    <li>Decease Estate Planning</li>
                                    <li>Conversion of Private to Public</li>
                                    <li>Carbon Emissions Planning</li>
                                    <li>Unclaimed Benefit Assistance</li>
                               </ul>
                            </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-sm-4">
              <div class="thumbnail">
                <div class="w3-center" >
                  <img src="public/img/Labour.png" style="" width="100" alt="SARS image">
                </div>
                 <h3 class="sub-head">LABOUR</h3>
                 <ul>
                    <li>Workmans compensation (Letter of Good standing)</li>
                    <li>Registration of employees</li>
                    <li>Production of payslips (from 2 to 5 employees)</li>
                 </ul>
              </div>
           </div>
        </div>

        <div class="row">
           <div class="col-sm-4">
              <div class="thumbnail">
                <div class="w3-center" >
                  <img src="public/img/Construction.png" style="" width="100" alt="SARS image">
                </div>
                 <h3 class="sub-head">CONSTRUCTION</h3>
                 <ul>
                    <li>CIDB Application form</li>
                    <li>CIBD+SHARE CERTIFICATE</li>
                    <li>SHARE CERTIFICATE</li>
                 </ul>

                 <div class="w3-right" style="bottom: 18px; position: absolute;">
                    <button class="btn btn-default w3-right" onclick="document.getElementById('construction-mod').style.display='block'">more</button>
                 </div>

                <div id="construction-mod" class="w3-modal">
                    <div class="w3-modal-content">
                       <header class="w3-container w3-red">
                          <span onclick="document.getElementById('construction-mod').style.display='none'"  class="w3-button w3-display-topright" style="font-size: 20px"><i class="fa fa-close"></i></span>
                          <h1 class="w3-center">CIPC</h1>
                       </header>
                       <div class="container">
                            <ul>
                                <li>CIDB Application form</li>
                                <li>CIBD+SHARE CERTIFICATE</li>
                                <li>SHARE CERTIFICATE</li>
                                <li>BEE Affidavit</li>
                                <li>BEE CERTIFICATE</li>
                                <li>JOINT BEE CERTIFICATE</li>
                                <li>LETTER OF OWNERSHIP</li>
                            </ul>
                       </div>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-sm-4">
              <div class="thumbnail">
                <div class="w3-center" >
                  <img src="public/img/Accounting.png" style="" width="100" alt="SARS image">
                </div>
                 <h3 class="sub-head">ACCOUNTING</h3>
                 <ul>
                    <li>Bookkeeping</li>
                    <li>Shareholding letter</li>
                    <li>Letter of earnings/Bank calculation</li>
                 </ul>

                 <div class="w3-right" style="bottom: 18px; position: absolute;">
                    <button class="btn btn-default w3-right" onclick="document.getElementById('accounting-mod').style.display='block'">more</button>
                 </div>

                <div id="accounting-mod" class="w3-modal">
                    <div class="w3-modal-content">
                       <header class="w3-container w3-red">
                          <span onclick="document.getElementById('accounting-mod').style.display='none'"  class="w3-button w3-display-topright" style="font-size: 20px"><i class="fa fa-close"></i></span>
                          <h1 class="w3-center">CIPC</h1>
                       </header>
                       <div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul>
                                        <li>Bookkeeping</li>
                                        <li>Shareholding letter</li>
                                        <li>Letter of earnings/Bank calculation</li>
                                        <li>Letter of guarantee</li>
                                        <li>Management Accounts</li>
                                        <li>Business Plans</li>
                                        <li>Business advisory(Business flow)</li>
                                        <li>Designing internal controls</li>
                                        <li>Printing of board packs</li>
                                        <li>Financial statements(Undetailed)</li>
                                        <li>Financial Counselling</li>
                                    </ul>
                                </div>

                                <div class="col-sm-6">
                                   <ul>
                                        <li>Documentation design</li>
                                        <li>Fixed Asset register maintenance</li>
                                        <li>Formulation of Business policies and procedures</li>
                                        <li>Accounting officer's report</li>
                                        <li>Contract Management</li>
                                        <li>Document Management</li>
                                        <li>Assist with tender preparations</li>
                                        <li>Financial statements(detailed)</li>
                                        <li>Payroll services-Depends on the staff compliment</li>
                                        <li>Credit Management</li>
                                        <li>Document Management</li>
                                   </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
              </div>
           </div>

            <div class="col-sm-4">
                <div class="thumbnail">
                  <div class="w3-center" >
                    <img src="public/img/Legal.png" style="" width="100" alt="SARS image">
                  </div>
                    <h3 class="sub-head">LEGAL PROFFESION</h3>
                    <ul>
                        <li>Trust Accounting</li>
                        <li>Advocates and Chambers</li>
                        <li>inancial Court Assistance</li>
                    </ul>
                </div>
            </div>


        </div>
        <div class="row">
          <div class="col-sm-4">
             <div class="thumbnail">
               <div class="w3-center" >
                 <img src="public/img/303-3039738_invite-a-speaker-conference-room-icon.png" style="" width="100" alt="SARS image">
               </div>
                <h3 class="sub-head">BOARDROOM RENTALS</h3>
                <ul>
                   <li>For various types of presentations.</li>
                   <li>For trainings</li>
                   <li>For formal and informal presentation including meetings</li>
                </ul>

                <div class="w3-right" style="bottom: 18px; position: absolute;">
                   <button class="btn btn-default w3-right" onclick="document.getElementById('boardroom-mod').style.display='block'">more</button>
                </div>

                 <div id="boardroom-mod" class="w3-modal">
                     <div class="w3-modal-content">
                        <header class="w3-container w3-red">
                           <span onclick="document.getElementById('boardroom-mod').style.display='none'"  class="w3-button w3-display-topright" style="font-size: 20px"><i class="fa fa-close"></i></span>
                           <h1 class="w3-center">BOARDROOM RENTALS</h1>
                        </header>
                        <div>
                        <div class="w3-container">
                          <div class="w3-row w3-padding-small">
                            <p class="">
                               Kunokhar CTP also offers its boardroom for various types of presentations.
                               It can we used for trainings,  formal and informal presentation including meetings.
                            </p>
                          </div>
                          <div class="w3-row">
                              <div class="w3-padding-small">It is a 38 sitter with:</div>
                              <ul>
                                <li>round by round glass tables</li>
                                <li>Aircon to accommodate various weather related conditions</li>
                                <li>Two projectors and related projector screens</li>
                                <li>Projector pointer to control presentation </li>
                                <li>Screen remoters </li>
                                <li>A boardroom watch to track the presentations</li>
                              </ul>
                              <p>
                                Our facility ie the best and it caters scarce and special needs of both presenters and various audience groups. Our offices are friendly for disabled persons too.

                                We charge R750 per hour. All amounts are paid in advance.

                                Should you wish to make use of our kitchen facilities, only the kitchen, this price goes to R1200 per hour. We do not rent out our kitchen accessories.

                                For all your bookings contact:

                                Kunokhar Chartered accountants

                                087 688 0700

                                sinovuyo@kunokhar.co

                                Or

                                Simangele Sosibo

                                With regards to boardroom time is strictly monitored. All the cancellations are done 5 hours before the actual start of the presentation or otherwise there will be no refund.

                                Come and make your own experiences with us.
                              </p>
                              <div class="w3-padding-small">Should you wish we do catering, you will have to specify the order of the meals:</div>
                              <ul>
                                <li>Breakfast only</li>
                                <li>Lunch and breakfast only</li>
                                <li>Lunch only</li>
                                <li>Breakfast, Lunch and Supper only</li>
                                <li>Lunch and supper only</li>
                                <li>Breakfast and supper only</li>
                              </ul>
                              <br>
                              <div class="w3-padding-small">
                                All of this goes with the board room product
                                <br>
                                <br>
                                Hope to see you soon.
                              </div>
                          </div>
                        </div>
                       </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-sm-4">
             <div class="thumbnail">
               <div class="w3-center" >
                 <img src="public/img/insights-Homepage.png" style="" width="100" alt="SARS image">
               </div>
                <h3 class="sub-head">IDEA REGISTRATION</h3>
                <div class="w3-row">
                    <p class="w3-text text-center " style="font-weight: bold;margin:2%;">
                    Initially Vodacom denied Makate's claims that he had invented
                     Please Call Me and that the company had promised to compensate
                      him. In particular, the problem here signifies the challenges 
                      are found on oral contracts...
                    </p>
                </div>

                <div class="w3-right" style="bottom: 18px; position: absolute;">
                   <button class="btn btn-default w3-right" onclick="document.getElementById('ideareg-mod').style.display='block'">more</button>
                </div>

                 <div id="ideareg-mod" class="w3-modal">
                     <div class="w3-modal-content">
                        <header class="w3-container w3-red">
                           <span onclick="document.getElementById('ideareg-mod').style.display='none'"  class="w3-button w3-display-topright" style="font-size: 20px"><i class="fa fa-close"></i></span>
                           <h1 class="w3-center">IDEA REGISTRATION</h1>
                        </header>
                        <div>
                        <div class="w3-container">
                          <div class="w3-row w3-padding-small">
                            <p class="" >
                               Initially Vodacom denied Makate's claims that he had invented Please Call Me 
                               and that the company had promised to compensate him. In particular,
                                the problem here signifies the challenges are found on oral contracts. 
                                Kunokhar CTP is here to solve this dilemma because not all South Africans 
                                with brilliant ideas but with no financial strength might be as lucky as
                                Makete to finance all the proceedings of fighting for his idea. The challenge above all here is proof of ownership.    
                            </p>
                          </div>
                          <div class="w3-row w3-padding-small">
                            <p class="" >
                               This was an idea and could not be registered with CIPC because CIPC does 
                               not register ideas but CIPC registers other things other than an idea. 
                               Should CIPC was able to register an idea, this battle would be over by now.
                                The time line above is taken from the local sources to illustrate how 
                                difficult and disadvantaging it is to have someone claiming your idea.
                                 At Kunokhar CTP we close this gap by registering ideas for the South 
                                 Africans and we are the only company that is able to do so. 
                            </p>
                          </div>

                          <div class="w3-row w3-padding-small">
                            <p class="" >
                              We believe that this product will put a stop in similar
                               problems as the one mentioned above, because it will 
                               be a matter of proving that the idea has been registered at 
                               some date, registered from an external source who is able to 
                               verify that registration belongs to someone (thereby proving ownership),
                                anyone who claims it must prove his ownership against it.
                               Kunokhar CTP undertakes to solve this problem.  Our certificate, 
                               like any other certificate is a proof that something was done,
                               the idea was registered with us by a certain person mentioned on
                                the certificate itself. We merely prove registration and ownership.
                                 Although we have sufficient expertise in our firm, we do our best 
                                 with the information we obtain from the registrant to estimate the
                                  value of the idea so that there are few questions of how much that 
                                  needs to be paid to the complainant once a similar dispute has erupted.    
                            </p>
                          </div>
                          <div class="w3-row w3-padding-small">
                            <p class="" >
                            <a href="public/docs/Please call mee-1_R_T.pdf" target="_blank">See the full story here </a>
                            </p>
                          </div>

         
                        </div>
                       </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-sm-4">
             <div class="thumbnail">
               <div class="w3-center" >
                 <img src="public/img/license-renewals.png" style="" width="100" alt="SARS image">
               </div>
                <h3 class="sub-head">MOTOR VEHICLE LICENCING ASSISTANCE</h3>
                <div class="w3-row">
                    <p class="text-center" style="font-weight: bold;margin-top:2%;">
                        Did you know that for just R200.00 per car (in and around Mthatha), we have decided to save time for our clients.
                    </p>
                </div>

                <div class="w3-right" style="bottom: 18px; position: absolute;">
                  <!-- mvla =  MOTOR VEHICLE LICENCING ASSISTANCE-->
                   <button class="btn btn-default w3-right" onclick="document.getElementById('mvla-mod').style.display='block'">more</button>
                </div>

                 <div id="mvla-mod" class="w3-modal">
                     <div class="w3-modal-content">
                        <header class="w3-container w3-red">
                           <span onclick="document.getElementById('mvla-mod').style.display='none'"  class="w3-button w3-display-topright" style="font-size: 20px"><i class="fa fa-close"></i></span>
                           <h1 class="w3-center">MOTOR VEHICLE LICENCING ASSISTANCE</h1>
                        </header>
                        <div>
                        <div class="w3-container">
                          <div class="w3-row">
                            <p class="" style="padding: 2%;">
                                Dear Valued Customer<br><br>

                                Did you know that for just R200.00 per car (in and around Mthatha), we have decided to save time for our clients.
                            </p>
                          </div>
                          <div class="w3-row">
                            <p class="" style="padding: 0 2%;">
                                We do this by standing in for our client at registration centers while the client continues with life.<br>
                                We go to the licensing center and queue for you and get your motor vehicle renewed.<br><br>

                                This can save 4 to 6hours of your time in this cold and rainy weather so that you spend that time <br>
                                doing other important things that require you. Time is money and important, we ask you to leave small <br>
                                 things that take your time away and focus on developing your self. <br>
                            </p>
                          </div>
                          <div class="w3-row">
                            <p class="" style="padding: 0 2%;">
                                <strong>This is what we need from you:</strong>
                                <ol type="1">
                                  <li>List of your cars</li>
                                  <li>Their next licensing date (as reflected on their licensing disks)</li>
                                </ol>
                            </p>
                            <p class="" style="padding: 0 2%;">
                              Let us help you to meet the closing date and help you to stay away from worries and penalties. <br><br>
                              Please note that in many instances Mthatha license centers are either:<br><br>

                              Have no working system, or Closed for various reasons including strikes <br><br>

                              The traffic Department opens at 07:30 am and closes at 12am.

                              In cases where we need to travel outside Mthatha for licensing your car, we charge R650.00. Cars that are licensed outside Mthatha  are usually licensed in Tsolo or Ngqeleni. <br><br>

                              Please help us with the information requested so that we go to our next step and detail further detailed that we will need from you! <br><br>

                              The money stated above is the fee that comes to us and it already includes VAT. We need this money upfront.

                              In the attached spreadsheet and based in your previous experience we have attached the expected licence fee for your vehicle. You will have to provide us with this amount as well. Should there be a change, we will  refund you on your return to collect the documents.

                              <br><br>
                              For more information, please call Mr. Banele Bhungane <br>

                              087 688 0700 <br>

                              Or <br>

                              drop us an email to: <br><br>

                              Avela@kunokhar.co.za <br>
                              Assistant1@hanyane.co.za <br>

                              Or <br>

                              WhatsApp us on 067 145 0222 or 067 340 2606

                            </p>
                          </div>
                          <div class="w3-row w3-padding-small" style="padding: 5% 0;">
                            <a href="public/docs/14606.pdf" target="_blank">See more the document</a>
                          </div>
                       </div>
                   </div>
                </div>
             </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>


<!-- Services Ends -->


  <!--
    ====================================================================================================================
                                            ------- Staff Of Company And They Images -------
    ====================================================================================================================
  -->
<div id="staff-container" >
      <div class="container">
         <h1 class="heading">Our-team</h1>
         <div class="content">
            <div class="row w3-center" style="margin-bottom: 40px;">
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="w3-center thumbnail">
                        <img src="public/img/vuzane.jpg" width="100%" class="responsive">
                        <h3 class="sub-head">Mr. R. Vuzane CA(SA), IR, RTP(SA), GTP(SA)</h3>
                        <h4 style="color: #ccc">Co-Founder, CEO</h4>
                        <p class="bio">
                            I am a Chartered Accountant and a tax practitioner too. I like a results-orientation, which our combination of an in-depth knowledge of the law, good commercial and accounting really make a good sense of how we approach business transactions... <span style="color: #0B6623"><a  onclick="document.getElementById('vuzane-bio').style.display='block'">read more</a></span>
                            </p>
                        <p class="member-socials">
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="w3-center thumbnail">
                        <img src="public/img/staff/5.jpg" width="100%" class="responsive">
                        <h3 class="sub-head">Mr. Sinovuyo Zide</h3>
                        <h4 style="color: #ccc">Financial Manager</h4>
                        <p class="bio">
                            Life is really amazing, when I was told that Kunokhar needed someone to be in the finance, I really was not sure if I could do it.<br>
                            On my arrival, people were so cool and chilled here although it appeared  that people were really working hard...
                            <span style="color: #0B6623"><a onclick="document.getElementById('sinovuyo-bio').style.display='block'">read more</a></span>
                        </p>
                        <p class="member-socials">
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </p>
                    </div>
               </div>

               <div class="col-sm-4">
                    <div class="w3-center thumbnail">
                        <img src="public/img/staff/17.jpg" width="100%" class="responsive">
                        <h3 class="sub-head">Miss Thandile Qomoyi</h3>
                        <h4 style="color: #ccc">Lead Accountant</h4>
                        <p class="bio">
                            <i>Changing the world</i> is a slogan that I met when I started training at kunokhar ctp, which is exactly how I would discribe my stay and experience as a trainee and now an employee... <span style="color: #0B6623"><a onclick="document.getElementById('thandile-bio').style.display='block'">read more</a></span>
                        </p>
                        <p class="member-socials">
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </p>
                    </div>
               </div>

               <div class="col-sm-4">
                    <div class="w3-center thumbnail">
                        <img src="public/img/staff/16.jpg" width="100%" class="responsive">
                        <h3 class="sub-head">Mrs. Vuyo Ndawo</h3>
                        <h4 style="color: #ccc">Health and Safety Officer</h4>
                        <p class="bio">
                            I work at Kunokhar as Chef and as Health and Safety Officer, both position I enjoy most. I started Kunokhar on January 2019, till today. When I started Kunokhar had just moved to New beautiful offices in Delville, I was really inspired with their move... <span style="color: #0B6623"><a  onclick="document.getElementById('vuyo-bio').style.display='block'">read more</a></span>
                        </p>
                        <p class="member-socials">
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </p>
                    </div>
               </div>
            </div>
            <div id="less-data"><br><br><br></div>

            <div class="wordFromCEO" style="-webkit-box-shadow: 0px 9px 13px -11px rgba(0,0,0,0.75); -moz-box-shadow: 0px 9px 13px -11px rgba(0,0,0,0.75); box-shadow: 0px 9px 13px -11px rgba(0,0,0,0.75); padding-bottom: 10px;">
                <div class="row">
                  <div class="col-sm-4 w3-hide-small" style="padding-left: 10px;">
                    <img src="public/img/kunokhar_ceo.jpg" style="width: 100%; border-radius: 10px">
                  </div>
                  <div class="col-sm-8 ">
                    <div id="parent" style="text-align: left;">
                      <div id="child">
                        <h1 class="sub-head" style="text-align: left; font-weight: 550; margin-bottom: 10px;">
                          The word from CEO
                        </h1>
                        <p>
                           Kunokhar started in 2015 in Johannesburg when it worked as accountants for Liltha Trading CC, a company operated in Rondebuilt in Germiston. Liltha Trading belongs to Mr. Zingisani Nkamana. At the time, this was our own client.
                        </p>
                        <p>
                            At the time, I had just qualified as a Chartered Accountant. We then moved to Mthatha where we got Mr. Sydney Jafta, an attorney and founding member of Jafter and Associates. We really started with one laptop, one desk, one receipt book, one key for the main door, one everything. On arrival the company worked and operated where I stayed, when we reached 6 clients we moved to Ludidi Building. Things really went bad in there because of parking and common power outages in that area. We were forced to go back at my place. This was really hurting, by now we had 4 staff members that had to come and worked in my room.
                        </p>

                        <p>
                            <div id="ceo-scroll"></div>
                            <div id="more-txt">
                                <p>
                                    Fortunately, when we had 10 clients we managed to a get a space at Kei Fresh Produce Market, a vegetable produce situated in Vulindlela heights. Although we had some setbacks there, our overall stay was indeed a good one and we really created a good version of memories in that space. I would really like to thank the management of Kei Fresh. Kei Fresh Produce Market operates under the auspices of Ntinga OR Tambo. All this time, Mr. Yonela Tshangana ("Tshangana") and Mrs Noxolo Mtirara ("Noxy") were always with us! Tshangana was a finance manager whilst Noxy was an office administrator.
                                </p>

                                <p>
                                    We took a big turn in 2017 when the market started to know our work ethic, we grew to 31 clients and 4 suppliers. We had to employ competent Individuals who had a serious task of moving the firm into the next level.
                                </p>

                                <p>
                                    I would really like to thank:
                                    <ol>
                                        <li>Doctor Thandisiwe Jingxi,</li>
                                        <li>Onele Duba,</li>
                                        <li>Nomfundo Setloboko,</li>
                                        <li>Nosiphiwo Twantwa,</li>
                                        <li>Nwabisa Dletyana,</li>
                                        <li>Yonela Tshangana, and</li>
                                        <li>Noxolo Mtirara</li>
                                    </ol>

                                    In particular for this time, these guys were amazing and they were truly talented. I hope they are doing well wherever they are.
                                </p>

                                <p>
                                    Who can we really be without thanking our suppliers for supplying us on time, understanding us when really times could not allow us to pay.
                                </p>

                                <p>
                                    Our customers who believed in us in all the thriving moments, these are the people who stayed loyal no matter what.
                                </p>

                                <p>
                                    Our competitors who allowed us to penetrate their market, these are the guys who really believed that competition was possible without blood bathes.
                                </p>

                                <p>
                                    Our employees who would come to work even if they were not paid and continuously believed that there was future in what we do. This are the people who believed that we had to move forward and towards that future for it to be realised.
                                </p>

                                <p>
                                    We are a leading accounting firm in and around Mthatha today. We have 78 customers, 16 suppliers, 6 separately managed departments, a consolidated IT division and 19 staff members all tasked with the enforcement of client satisfaction. These includes a kitchen that provide us with breakfast, lunch and supper free of Charge. This is lead by Mrs Vuyo Ndawo, inkoskazi yakwaTshezi.
                                </p>

                                <p>
                                    Avela Jombile heads logistics and travelling which includes delivery to all of our stakeholders.
                                </p>

                                <p>
                                    Our firm has been accepting students for them to complete their Finance Management training. This, we are excited about and we have taken students from Lovedale College (King Williams Town), Ingwe College (Matatiele), East Cape College (PE and Grahamston) and Costal College ( Durban).
                                </p>

                                <p>
                                    We have rejected applications from the Free State, Western Cape and the Gauteng Provinces because of security reasons surrounding the students. Mthatha is a vibrate and an unusual place to be. Getting these applications confirmed that our training program remains a superior one in this regard. I am grateful for this confirmation!
                                </p>

                                <p>
                                    We have a training facility that accommodates up to 40 seats. In here we do trainings, hold gatherings such as private ceremonies, birthdays and other related services.
                                </p>

                                <p>
                                    We also have an in house studio where we take pictures and videos of all the activities that occur. These depend on client preferences.
                                </p>

                                <p>
                                    Kunokhar Chartered Accountants is not only an accounting firm but has moved to become a home for many of us a centre of hope for those need that, a service guarantor for the perfectionists and an educational pool for the thirst.
                                </p>

                                <p>
                                    Kunokhar is Fasset and TETA accredited and we are happy with these accomplishments.
                                </p>

                                <p>
                                    Apart from Finance Management training, we have also made an application to ACCA and CIMA to provide students with alternative accounting skills that lead to lucrative work opportunities after they would have graduated with us.
                                </p>

                                <h2>We are changing the world!</h2>
                            </div>
                            <button id="showit" class="btn btn-default btn-md">Read More</button>
                            <a href="#less-data"><button id="hideit" class="btn btn-default btn-md">Hide</button></a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
         </div>
        </div>
   </div><!-- Staff Ends -->


   <!--
    ====================================================================================================================
                                            ------- Clients Reviews and Form To Write -------
    ====================================================================================================================
  -->
 <div id="reviews-container" style="width:100%;">
      <h1 class="heading">Reviews</h1>
        <div class="content" style="display: flex; overflow-y: hidden; overflow-x:scroll; flex-wrap: nowrap; padding: .5em; padding-bottom: 1em; padding-right: 1em;">
          <?php
            include 'models/class/user.php';

            $rev = new User();
            $array = count($rev->getReviews());

               if( $array > 0)
               {
                  forEach($rev->getReviews() as $reviews)
                  {
               ?>
                     <div class="review w3-card" style="flex: 0 0 auto; width: 450px; background-color: #e6e6e6; margin-right: 1em;">
                         <blockquote style="color: #777; border: none;">
                             "<?php echo $reviews['REV_COMMENT']; ?>
                             <small class="mt-20">
                                 <?php
                                    if($reviews['REV_LASTNAME'] != "NULL")
                                    {
                                 ?>
                                       <?php echo $reviews['REV_FIRSTNAME'] ?> <?php echo $reviews['REV_LASTNAME'] ?>
                                 <?php
                                    }else
                                    {
                                 ?>
                                       <?php echo $reviews['REV_FIRSTNAME'] ?>
                                 <?php
                                    }
                                 ?>
                                 <span class="w3-small w3-right">
                                    <i class="fa fa-calendar"></i>
                                    <?php echo $rev->time_elapsed_string($reviews['REV_DATE']) ?>
                                 </span>
                             </small>


                                 <?php
                                    if($reviews['RATE_ID'] == 1)
                                    {
                                 ?>
                                       <span style="color: #ff3333;">
                                          <i class="fa fa-star"></i>&nbsp;
                                          <i class="fa fa-star-o"></i>&nbsp;
                                          <i class="fa fa-star-o"></i>&nbsp;
                                          <i class="fa fa-star-o"></i>&nbsp;
                                          <i class="fa fa-star-o"></i>&nbsp;
                                       </span>
                                       <!-- <i class="fa fa-star-o  "></i> -->
                                       <span class="w3-small">(<?php echo $reviews['RATE_TYPE'] ?>)</span>

                                 <?php
                                    }else if($reviews['RATE_ID'] == 2)
                                    {
                                 ?>
                                       <span style="color: #ff3333;">
                                          <i class="fa fa-star"></i>&nbsp;
                                          <i class="fa fa-star"></i>&nbsp;
                                          <i class="fa fa-star-o"></i>&nbsp;
                                          <i class="fa fa-star-o"></i>&nbsp;
                                          <i class="fa fa-star-o"></i>&nbsp;
                                          <i class="fa fa-star-o  "></i>
                                       </span>
                                       <span class="w3-small">(<?php echo $reviews['RATE_TYPE'] ?>)</span>



                                 <?php
                                    }else if($reviews['RATE_ID'] == 3)
                                    {
                                 ?>
                                       <span style="color: #ff3333;">
                                          <i class="fa fa-star"></i>&nbsp;
                                          <i class="fa fa-star"></i>&nbsp;
                                          <i class="fa fa-star"></i>&nbsp;
                                          <i class="fa fa-star-o"></i>&nbsp;
                                          <i class="fa fa-star-o"></i>&nbsp;
                                          <!-- <i class="fa fa-star-o  "></i> -->
                                       </span>
                                       <span class="w3-small">(<?php echo $reviews['RATE_TYPE'] ?>)</span>



                                 <?php
                                    }else if($reviews['RATE_ID'] == 4)
                                    {
                                 ?>
                                       <span style="color: #ff3333;">
                                          <i class="fa fa-star"></i>&nbsp;
                                          <i class="fa fa-star"></i>&nbsp;
                                          <i class="fa fa-star"></i>&nbsp;
                                          <i class="fa fa-star"></i>&nbsp;
                                          <i class="fa fa-star-o"></i>&nbsp;
                                          <!-- <i class="fa fa-star-o  "></i> -->
                                       </span>
                                       <span class="w3-small">(<?php echo $reviews['RATE_TYPE'] ?>)</span>



                                 <?php
                                    }else if($reviews['RATE_ID'] == 5)
                                    {
                                 ?>
                                       <span style="color: #ff3333;">
                                          <i class="fa fa-star"></i>&nbsp;
                                          <i class="fa fa-star"></i>&nbsp;
                                          <i class="fa fa-star"></i>&nbsp;
                                          <i class="fa fa-star"></i>&nbsp;
                                          <i class="fa fa-star"></i>&nbsp;
                                          <!-- <i class="fa fa-star-o  "></i> -->
                                       </span>
                                       <span class="w3-small">(<?php echo $reviews['RATE_TYPE'] ?>)</span>

                                 <?php
                                    }
                                 ?>
                         </blockquote>
                     </div>
                  <?php
                    }
                }else
                 echo "No reviews to show";
                  ?>
        </div>


<div class="add-review">
          <div class="container w3-center">
            <button class="btn btn-default" onclick="document.getElementById('addReview').style.display='block'">Add Review</button>
          </div>
          <div id="addReview" class="w3-modal">
            <div class="w3-modal-content">
              <header class="w3-container w3-green">
                <span onclick="document.getElementById('addReview').style.display='none'"  class="w3-button w3-display-topright" style="font-size: 20px"><i class="fa fa-close"></i></span>
                <h1 class="w3-center">Add Review</h1>
              </header>
              <div class="w3-container">
                  <form method="POST" action=""  class="w3-container w3-white w3-margin">
                        <div class="w3-row w3-section">
                          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                            <div class="w3-rest">
                              <input class="w3-input w3-border" id="firstname" name="firstname" type="text" placeholder="First Name(optional)">
                            </div>
                        </div>
                        <div class="w3-row w3-section">
                          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                            <div class="w3-rest">
                              <input class="w3-input w3-border" id="lastname" name="lastname" type="text" placeholder="Last name(optional)">
                            </div>
                        </div>
                        <div class="w3-row w3-section">
                       <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-star"></i></div>
                           <div class="stars">
                              <style>
                                 :root {
                                   font-size: 2em;
                                 }
                              </style>
                              <span class="star-cb-group w3-left" style="display: flex; overflow-y: hidden; overflow-x: hidden; flex-wrap: nowrap;">
                                <input type="radio" id="rating-5" name="rating" value="5"/><label for="rating-5">5</label>
                                <input type="radio" id="rating-4" name="rating" value="4"/><label for="rating-4">4</label>
                                <input type="radio" id="rating-3" name="rating" value="3"/><label for="rating-3">3</label>
                                <input type="radio" id="rating-2" name="rating" value="2"/><label for="rating-2">2</label>
                                <input type="radio" id="rating-1" name="rating" value="1"/><label for="rating-1">1</label>
                              </span>
                           </div>
                        </div>
                        <div class="w3-row w3-section">
                          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                            <div class="w3-rest">
                              <textarea class="w3-input w3-border" name="comment" id="comment"  placeholder="Please leave your comment...(required)" style="height: 150px; resize: none;"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="w3-button w3-section w3-black w3-right w3-ripple w3-padding" id="send_review" >Send</button>

                  </form>
              </div>
            </div>
          </div>
        </div>

   </div>

    <!--
    ====================================================================================================================
                                            ------- Staff Full Bio modals -------
    ====================================================================================================================
  -->

    <!--Mr Sinovuyo Zide-->
    <div id="sinovuyo-bio" class="w3-modal">
        <div class="w3-modal-content">
           <header class="w3-container">
              <span onclick="document.getElementById('sinovuyo-bio').style.display='none'"  class="w3-button w3-display-topright" style="font-size: 20px"><i class="fa fa-close"></i></span>
              <h1 class="w3-center">Mr Sinovuyo Zide</h1>
           </header>
           <div class="w3-container">
                <p>Life is really amazing, when I was told that Kunokhar needed someone to be in finance, I really was not sure if I could do it.</p>

                <p>On my arrival, people were so cool and chilled here although it appeared  that people were really working hard. The environment was also demanding with the amount of deadlines. Mr. Vuzane CA(SA), was my trainer. Yhooo that guy can seriously make you feel that there is a lot of unrealialised potential in someone, he does this with his ever ending smile, he can be really tough sometimes, please do not tell him!</p>

                <p>I have really learnt a lot by working for Kunokhar and am greatly impressed with the manner things are done here, the highest standards and client prioritasation and above the finance learning we get.</p>

                <p>I have gained and accumulated a good amount of knowledge here under the supervision of Mr. Vuyo Marwexu and a strict watch of Mr. Vuzane CA(SA).</p>

                <p>When I joined, I worked as a petty cash administrator, moved to draft finance policies, moved to assets, moved to creditors, moved to debtors, moved to budgeting and today I am finance manager. I am so happy with my job although it is very demanding!</p>

                <p>We deal with a variety of clients which we all learn from. Inside, there are about 19 of us and we have become a family. I really enjoy this second home of mine and I am really happy that I am employed here.</p>

                <p>I always wonder what those not associated with us do, we do things differently here!</p>
            </div>
        </div>
     </div>

     <!--Mrs Vuyo Ndawo-->
    <div id="vuyo-bio" class="w3-modal">
        <div class="w3-modal-content">
           <header class="w3-container">
              <span onclick="document.getElementById('vuyo-bio').style.display='none'"  class="w3-button w3-display-topright" style="font-size: 20px"><i class="fa fa-close"></i></span>
              <h1 class="w3-center">Mrs. Vuyo Ndawo</h1>
           </header>
           <div class="w3-container">
                <p>"I work at Kunokhar as Chef and as Health and Safety Officer, both position I enjoy most.</p>

                <p>I started Kunokhar on January 2019, till today. When I started Kunokhar had just moved to New beautiful offices in Delville, I was really inspired with their move.</p>

                <p>Here, this is business and is family at the time. We work, we share good times and bad times as well. It's just an amazing experience. I love to be part of these guys.</p>

                <p>I have been appointed as a Health and Safety Officer now to take care of the precautionary controls of such a big office, I am thrilled to know that I have such responsibility. I do not know why Mr. Vuzane has chosen me when there is a wide and enough amount of talent, I mean people here are talent but it was given to me, in any case, no matter what the reason is  I am truly happy to do all the tasks I am given here.</p>

                <p>Ok let me go back to the kitchen imbiza iyatsha!!"</p>
            </div>
        </div>
    </div>

    <!--Miss Thandile-->
    <div id="thandile-bio" class="w3-modal">
        <div class="w3-modal-content">
           <header class="w3-container">
              <span onclick="document.getElementById('thandile-bio').style.display='none'"  class="w3-button w3-display-topright" style="font-size: 20px"><i class="fa fa-close"></i></span>
              <h1 class="w3-center">Miss Thandile Qomoyi</h1>
           </header>
           <div class="w3-container">
                <p>"<i>Changing the world</i> is a slogan that I met when I started training at kunokhar ctp, which is exactly how I would discribe my stay and experience as a trainee and now an employee.</p>

                <p>How you would ask, only through a change of mind, built up of character, confidence and potential, the journey has had its own challenges and there were times I felt like giving up, but then I remembered that finest products undergo fire to be the best and have a high value.</p>

                <p>
                    Being a trainee we were taught 2 things:
                    <ol>
                        <li>Self reliance to find information through research and communication with team members.</li>
                        <li>Putting our best in everything we do, because a document and numbers never lie, they show the amount of effort put in at all times.</li>
                    </ol>
                </p>

                <p>As an employee, my responsibility is to transfere my knowledge and pushing trainees in realising their potential and putting effort in the work that they do. I now see myself as the "transformer/ changer" of the world, because I am now given a chance to be the vision and be part of fulfilling the mission kunokhar CTP has. <br> Of cause, leading people has never been easy but having first hand experience of what needs to be done and knowing the entity has enabled me to be at better chance to do it, because I was a trainee and no one knows a journey than the person who has traveled it.</p>

                <p>I am grateful to be in this position and it is inspiring to see the firm opening up more spaces for more Black and African children to transform. I really value the amount work and dedication that is put in here and am truly grateful to be part of this family. Each day is yet another opportunity of learning."</p>
            </div>
        </div>
     </div>

    <!--Mr Rholihlahla Vuzane-->
    <div id="vuzane-bio" class="w3-modal">
        <div class="w3-modal-content">
           <header class="w3-container">
              <span onclick="document.getElementById('vuzane-bio').style.display='none'"  class="w3-button w3-display-topright" style="font-size: 20px"><i class="fa fa-close"></i></span>
              <h1 class="w3-center">Mr. R. Vuzane CA(SA), IR, RTP(SA), GTP(SA)</h1>
           </header>
           <div class="w3-container">
                <p>I am a Chartered Accountant and a tax practitioner too. I like a results-orientation, which our combination of an in-depth knowledge of the law, good commercial and accounting really make a good sense of how we approach business transactions. I am a solicitor who takes a responsive and pragmatic approach to client service always, aiming to help clients achieve their objectives in an efficient and cost-effective manner. I concentrate purely on giving practical advice to help find solutions to problems, allowing clients to focus on their wider business objectives.</p>

                <p>I am a proactive adviser who likes to think laterally about what might help a business in terms of its tax profile, while always being acutely aware of the financial, legal and commercial challenges that companies of all sizes face. I give a fully guided and orientated approach when it comes to client service and believes in developing a strong working relationship with clients.</p>

                <p>
                    Besides, my distinguished career aspirations demonstrates a unique balance between involvement in the accountancy profession, engagement with the business world, dedication to public service and development and devotion to academe. I hold a:
                    <ul>
                        <li>B Accounting,</li>
                        <li>Post Graduate Diploma in Accounting,</li>
                        <li>Certificate of Theory in Accounting, and</li>
                        <li>Post Graduate Diploma in Taxation.</li>
                    </ul>
                </p>

                <p>I obtained my Chartered Accountancy articles at Nkonki Inc (Pty) Ltd, the Sunninghill office. I have also worked at Auditor General, Financial Services Board and Walter Sisulu University, among many. During my audit life, I had a pleasure of auditing big corporate entities such as:

                    <ul>
                        <li>Vuwa investments,</li>
                        <li>Izingwe Investments,</li>
                        <li>Vunani Investments,</li>
                        <li>Izingwe Capital,</li>
                        <li>Transnet,</li>
                        <li>Telkom,</li>
                        <li>FSB,</li>
                        <li>South African Airways,</li>
                        <li>Development Bank of South Africa,</li>
                        <li>Post-office, and</li>
                        <li>Water and Sanitation</li>
                        <li>etc.</li>
                    </ul>
                </p>

                <p>Where I got a thorough understanding of what auditing is all about. As, a result of understanding the importance of increasing the number of suitable qualified black Africans in the accountancy profession and especially in the Transkei region, I then returned to a very fulfilling academic post at Walter Sisulu University where I currently teach and research taxation. In addition I am more involved on the training of students to become better and responsive accountants. Please our students on a separate page. I believe that the time for accountants to only calculate and deal with numbers only is long gone. We teach our accountants to:

                    <ul>
                        <li>research the information they report on because it needs to be relevant,</li>
                        <li>understand the clients they work for,</li>
                        <li>focus on report writing, how numbers can be converted into a useful passage of information which stakeholders can rely on.</li>
                        <li>Inquisitiveness in wanting to produce more,</li>
                        <li>understand the importance of deadline in the accounting profession.</li>
                    </ul>
                </p>

                <p>Our Firm Kunokhar CTP is meant to be an opener and a leader on capacity building, economy extender and in growth navigator in the region.</p>

                <p>Our firm has taken a long and active involvement in the development of small businesses around our area of operations. In such a short period of time, we are proud to know that our firm has added immeasurably to the deliberations of the many small companies that make business with us.</p>
            </div>
        </div>
     </div>
<!-- Reviews And Form Ends -->

  <!--
    ====================================================================================================================
                                            ------- Contact Details and Form -------
    ====================================================================================================================
  -->
   <div id="contactUs-container">
      <div class="container">
         <h1 class="heading">Contact-us</h1>
         <div class="content">
            <div class="row">
               <div class="col-sm-4">
                  <h3><i class="fa fa-map"></i>&nbsp;Get to us</h3>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d984.0810012899027!2d28.77866909580828!3d-31.58575006524997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e5fd0bab216f101%3A0x125216af1927790!2s23+Delville+Rd%2C+Umtata+Central%2C+Mthatha%2C+5100!5e0!3m2!1sen!2sza!4v1555433362680!5m2!1sen!2sza" style="border:0; min-height: 350px; width: 100%;" allowfullscreen></iframe>
               </div>

               <div class="col-sm-4">
                  <h3>Leave a message </h3>
                  <div class="flex">
                     <p class="header-sub-title" id="word"></p><p class="header-sub-title blink">|</p>
                  </div>
                  <div id="status"></div>
                  <form method="POST" action="">
                     <div class="form-group">
                        <input type="text" name="names" id="names" placeholder="Names" title="First Name and Surname">
                     </div>
                     <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Email" title="Email address">
                     </div>
                     <div class="form-group">
                        <input type="number" name="contactNo" id="contactNo" placeholder="Contact Number" title="Contact Number">
                     </div>
                     <div class="form-group">
                        <textarea placeholder="Message" name="message" id="message" title="Type message" style="resize: none;"></textarea>
                     </div>
                     <div class="form-group">
                        <button class="btn w3-right" type="submit" id="send_email">Send </button>
                     </div>
                  </form>
               </div>

               <div class="col-sm-4">
                  <h3>Talk to us</h3>
                  <div class="contact-details">
                     <i class="fa fa-phone"></i>&nbsp;&nbsp;<a href="tel:+27876880700">(+27) 87 688 0700</a><br>
                     <i class="fa fa-mobile-phone"></i>&nbsp;&nbsp;<a href="tel:+27839267072">(+27) 83 926 7072</a><br>
                     <i class="fa fa-fax"></i>&nbsp;&nbsp;<a href="#">086 665 3621</a> (Fax)<br>
                     <i class="fa fa-whatsapp"></i>&nbsp;&nbsp;<a href="">(+27) 67 145 0222</a><br>
                     <i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:enquiriesctp@gmail.com">enquiriesctp@gmail.com</a><br>

                     <br><br>

                     <h3><i class="fa fa-location-arrow"></i>&nbsp;Our Office</h3>
                     <p>No. 23 Delville Road, P.O. Box 9137, Mthatha, 5099</p>
                  </div>
               </div>
            </div>
         </div>
         <a class="w3-right" style="background-color:black; margin-top: 60px; margin-bottom: 10px; color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@alle_sacchi?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Alessandro Sacchi"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Alessandro Sacchi</span></a>
      </div>
   </div><!-- Contact Details and Form Ends -->
   <button class="bubbly-button">We are hiring</button>
</main>
   <script>
        function myFunction(id) {
            document.getElementById(id).classList.toggle("w3-show");
        }


    </script>

<footer id="footer">
    <div class="counter-row row">

    </div>
      <div class="container">
         <div class="content">
            <div class="row">
               <div class="col-sm-4">
                  <h3>About Us</h3>
                  <p>Kunokhar Chartered Accountants & Tax Practitioners (Pty) Ltd “Kunokhar CTP”  is the biggest, most innovative and a leading accounting firm around Mthatha. We are a financial services company that provides financial consulting solutions tailored to your entity, irrespective of its size..... </p>
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
                     <li><a href="https://www.twitter.com/KunokharFinance?s=08" target="_blank"><i class="fa fa-twitter"></i> @KunokharFinance</a></li>
                     <li><a href="https://www.facebook.com/Kunokhar-CPT-2101496813290913/" target="_blank"><i class="fa fa-facebook"></i> Kunokhar CTP</a></li>
                     <li><a href="https://www.linkedin.com/in/kunokhar-ctp-931857180" target="_blank"><i class="fa fa-linkedin"></i> Kunokhar CTP</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="copyright w3-center">
            <p>(+27) 87 688 0700 | <a href="mailto:mail@email.com">nikita@kunokhar.co.za</a> | &copy; <?php print(date("Y"));?> Kunokhar. All right reserved.</p>
         </div>
      </div>
   </footer>
   <script type="text/javascript" src="public/js/jquery.min.js"></script>
   <script type="text/javascript" src="public/css/owl-carousel/owl.carousel.min.js"></script>
   <script type="text/javascript" src="public/js/bootstrap.min.js"></script>

   <script src="public/js/jquery.flexslider-min.js"></script>
   <script type="text/javascript" src="public/js/main.js"></script>
   <script type="text/javascript" src="public/js/ajax.js"></script>
   <script type="text/javascript">
     $(document).ready(()=>
     {
          $('button#hideit').hide();
          $('#more-txt').hide();
          $('button#showit').click(()=>
          {
             $('button#showit').hide();
             $('button#hideit').show();
             $('html, body').animate({
                 scrollTop: $("#ceo-scroll").offset().top - 134
             }, 2000);
             $('#more-txt').fadeIn(3000);
          });
          $('button#hideit').click(()=>
          {
             $('button#showit').show();
             $('button#hideit').hide();
             $('#more-txt').fadeOut("slow");
          });
          $('#send_review').on('click',(e) =>
          {
                e.preventDefault();
                var fname = $('#firstname').val();
                var lname = $('#lastname').val();
                var rate = $("input[name='rating']:checked").val();
                var comment = $('#comment').val();

                   $.ajax({
                      method: 'POST',
                      url: './models/controller.php',
                      data: {firstname: fname, lastname: lname, rating: rate, comment: comment, action: 'add_review'},
                      success: function(data)
                      {

                         alert(data);
                         location.reload(true);
                      },

                      error: function(data)
                      {
                         alert(data);
                      }

                   });

          });

  $('#send_email').click(function(e)
      {
         e.preventDefault();

         var email = $('#email').val();
         var names = $('#names').val();
         var message = $('#message').val();
         var contact = $('#contactNo').val();

         if(email == "" || names == "" || message == "" || contact =="")
         {
            $('#status').html("All fields are required").css("color", "red");
         }else
         {
            $('#status').hide();
            $('.flex').show();
            $.ajax
            ({
               method: 'POST',
               url: './models/controller.php',
               data: {email: email, names: names, message: message, contact: contact, action: 'send_email'},
               success: function(data)
               {
                 console.log(data);
                  $('.flex').hide();
                  $('#status').show();
                  $('#status').html(data).css("color", "green");
                  $('#email').val("");
                  $('#names').val("");
                  $('#message').val("");
                  $('#contactNo').val("");
               },
               error: function(data)
               {
                 console.log(data);
                  $('.flex').hide();
                  $('#status').show();
                  $('#status').html("error").css("color", "red");
               }
            });
         }

      });

         const words = ["Sending email..."];
         let i = 0;
         let timer;

         function typingEffect() {
            let word = words[i].split("");
            var loopTyping = function() {
               if (word.length > 0) {
                  document.getElementById('word').innerHTML += word.shift();
               } else {
                  deletingEffect();
                  return false;
               };
               timer = setTimeout(loopTyping, 200);
            };
            loopTyping();
         };

         function deletingEffect() {
            let word = words[i].split("");
            var loopDeleting = function() {
               if (word.length > 0) {
                  word.pop();
                  document.getElementById('word').innerHTML = word.join("");
               } else {
                  if (words.length > (i + 1)) {
                     i++;
                  } else {
                     i = 0;
                  };
                  typingEffect();
                  return false;
               };
               timer = setTimeout(loopDeleting, 200);
            };
            loopDeleting();
         };

         typingEffect();



     });

var animateButton = function(e) {

  e.preventDefault;
  //reset animation
  e.target.classList.remove('animate');

  e.target.classList.add('animate');
  setTimeout(function(){
    e.target.classList.remove('animate');
  },1000);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {
  bubblyButtons[i].addEventListener('click', animateButton, false);
}
   </script>
   </body>
   </html>
</body>
</html>
