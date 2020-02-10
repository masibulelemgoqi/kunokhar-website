$(()=> {
  $('.grey-brand').hide(); 
  $('.flex').hide();
  $('#less-staff').hide();
  $('#other_staff').hide();
  $('#success').hide();
  
	$(window).scroll(function() {
    if ($(window).width() <= 750) {

      $('nav').toggleClass('scroll', $(this).scrollTop() > 100);
        if( $(this).scrollTop() > 100)
        {

            $('.original-brand').hide();
            $('.grey-brand').show();          
        }else
        {
            $('.original-brand').show();
            $('.grey-brand').hide(); 
        }

    } else {
      $('nav').toggleClass('scroll', $(this).scrollTop() > 300);
        if ($(this).scrollTop() > 300) 
        {
            $('.original-brand').hide();
            $('.grey-brand').show();
        }else 
        {
            $('.original-brand').show();
            $('.grey-brand').hide();             
        }
    }
	});

    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 

    $('#more').hide();

     var minimized_elements = $('div.minimize');
    
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

$('#more-staff').click(function(){
  $('#more-staff').hide();
  $('#less-staff').show();
  $('#other_staff').show();
});

$('#less-staff').click(function(){
  $('#more-staff').show();
  $('#less-staff').hide();
  $('#other_staff').hide();
});
/*about us read more*/
   $(window).load(function(){
      $(".preloader").hide();
         $("#more").hide();
         $("#showit").show();
         $("#hideit").hide();
         $('#more-to-scroll').hide();
   });
     
     $("#showit").click(function(){
         $("#more").fadeIn(3000);
         $('#more-to-scroll').show();
         $("#showit").hide();
         $("#hideit").show();
         $('html, body').animate({
             scrollTop: $("#more-to-scroll").offset().top - 40
         }, 1000);
     });
     
     $("#hideit").click(function(){
         $("#hideit").hide();
         $('#more-to-scroll').hide();
         $("#showit").show();
         $("#more").fadeOut("slow");
         $("body,html").animate(
          {
                scrollTop : 380 // Scroll 430px from top of body
          }, 1000);
     });


    $(minimized_elements).click(function(event){
        event.preventDefault();
        $(this).parent().hide().prev().show().prev().show();    
    });


      var testimonialCarousel = function(){
         var owl = $('.owl-carousel-fullwidth');
         owl.owlCarousel({
            animateOut: 'fadeOut',
            items: 1,
            loop: true,
            margin: 0,
            autoPlay: true,
            autoplayTimeout: 1000,
            responsiveClass: true,
            nav: true,
            dots: true,
            smartSpeed: 500,
            autoHeight: true
         });
      };

      
      $(function(){
         testimonialCarousel();
      });

    
   var logID = 'log',
     log = $('<div id="'+logID+'"></div>');
   $('.stars').append(log);
     $('[type*="radio"]').change(function () {
       var me = $(this);
      if(me.attr('value') == 1)
      {
       log.html(me.attr('value')+" Worst ").css('color', 'maroon');;
      }

      if(me.attr('value') == 2)
      {
       log.html(me.attr('value')+" bad").css('color', 'red');;
      }

      if(me.attr('value') == 3)
      {
       log.html(me.attr('value')+" fair").css('color', 'gold');;
      }

      if(me.attr('value') == 4)
      {
       log.html(me.attr('value')+" good").css('color', 'lime');;
      }

      if(me.attr('value') == 5)
      {
       log.html(me.attr('value')+" Excellent").css('color', 'green');
      }
     });


/*==============================================================
===========================Reset password=======================
================================================================*/

  $('#resetBtn').click((evtt) =>
  {
    evtt.preventDefault();
    var email = $('#email').val()
    if(email == "")
    {
      alert("please enter the email");
    }else
    {
      $.ajax(
      {
        method: 'POST',
        url: 'http://localhost:5000/check_email',
        data: {email, email},
        success: (data) =>
        {
          if(data == "1")
          {
            window.location.replace("http://localhost:5000/access_page");
          }else
          {
            $('#reset-status').html("email address does not exist in our system").css('color', 'red');
          }
        },
        error: (data) =>
        {
           $('#reset-status').html("Ooops! an error occured").css('color', 'red');
        }

      });
    }

  });

  $('#verify_code').click((e) =>
  {
    e.preventDefault();
    var code = $('#access_code').val();
    var newPwd = $('#new_password').val();
    var verifyPwd = $('#verify_password').val();
    if(code != "" && newPwd != "" && verifyPwd != "")
    {
      if(newPwd == verifyPwd)
      {
       $.ajax(
          {
            method: 'POST',
            url: 'http://localhost:5000/verify_access',
            data: {code: code, new_password: newPwd},
            success: (data) =>
            {
             if(data == "1")
              {
                 $('#access_id').hide();
                 $('#success').show();
                 $('#success-message').html("Successfully reset your password!!!");
              }else
              {
                $('#reset-status').html("Please make sure you are entering the code that was sent to you").css('color', 'red');
              }
            },
            error: (data) =>
            {
              $('#reset-status').html("Ooops! an error occured").css('color', 'red'); 
            }
          });
      }else
      {
          $('#reset-status').html("Ooops! Passwords do not match").css('color', 'red');
      }

    }else
    {
      $('#reset-status').html("All the fields are required!!!").css('color', 'red');
    }
  });

/*

*/

// Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

});