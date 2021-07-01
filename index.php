<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />


    <?php include("include/css.php");?>

    <title>Ramindri Group</title>
  </head>
  <body>
 
    <!-- <nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <a href="#" class="logo"><img src="images/logo.png" class="img-fluid"></a>
                </div>
                <div class="col-sm-10">
                    <ul class="top-nav">
                        <li><a href="#">PROJECTS</a></li>
                        <li><a href="#">FOUNDATION</a></li>
                        <li><a href="#">CAREERS</a></li>
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">ENQUIRY</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav> -->

<a id="contactForm" class="show_hide">INQUIRE NOW</a>
<div class="slidingDiv">
  <div role="form" class="wpcf7" >
    <div class="screen-reader-response"></div>
    <form action="process.php" method="post" class="wpcf7-form">
     <p><span class="wpcf7-form-control-wrap text-865">
        <input type="text" name="name" id="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Full Name"/>
        </span><span class="wpcf7-form-control-wrap email-569">
        <input type="email" id="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" />
        </span><span class="wpcf7-form-control-wrap text-135">
        <input type="text" name="phone" id="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Type Your Query Here" />
        </span><br />
        <br />
        <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit button-w3layouts hvr-rectangle-out" onclick="return formSubmit();"/>
      </p>
      <div class="wpcf7-response-output wpcf7-display-none"></div>
    </form>
  </div>
  <!--<button type="" class="btn btn-default show_hide_2">Close</button>--> 
  <!--<a href="#" class="show_hide show_hide_2">X</a>--> 
</div>

    <?php include("include/header.php");?> 


    <div class="videoContainer">
        <video autoplay loop muted id="homeVideo">
          <source src="video/1.mp4" type="video/mp4">
          <source src="video/1.m4v" type="video/m4v">
          <source src="video/1.webm" type="video/webm">
          <source src="video/1.ogv" type="video/ogv">
          Your browser does not support the video tag.
        </video>

        <img class="img-fluid homeMobileBg" src="assets/img/tabNannerBg.jpg" alt="">
        <div class="conIn">
            <h1><span class="banner-last-text-2">For</span> <div class="slidingVertical">
                <span>Exclusive Living</span><span>Blissful life</span><span>Dream to Realise</span>
                </div>  
                <!-- <span class="banner-last-text">Time</span> -->
                      </h1>
            <p><span>10000+</span> Happy Families</p>
        </div>
        
        <a href="#mainSec" class="scroll-down svg page-scroll">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_2" x="0px" y="0px" viewBox="0 0 25.166666 37.8704414" enable-background="new 0 0 25.166666 37.8704414" xml:space="preserve">
                <path class="stroke" fill="none" stroke="#c7c4b8" stroke-width="2.5" stroke-miterlimit="10" d="M12.5833445 36.6204414h-0.0000229C6.3499947 36.6204414 1.25 31.5204487 1.25 25.2871208V12.5833216C1.25 6.3499947 6.3499951 1.25 12.5833216 1.25h0.0000229c6.2333269 0 11.3333216 5.0999947 11.3333216 11.3333216v12.7037992C23.916666 31.5204487 18.8166714 36.6204414 12.5833445 36.6204414z"></path>
                <path class="scroller" fill="#c7c4b8" d="M13.0833359 19.2157116h-0.9192753c-1.0999985 0-1.9999971-0.8999996-1.9999971-1.9999981v-5.428606c0-1.0999994 0.8999987-1.9999981 1.9999971-1.9999981h0.9192753c1.0999985 0 1.9999981 0.8999987 1.9999981 1.9999981v5.428606C15.083334 18.315712 14.1833344 19.2157116 13.0833359 19.2157116z"></path>
            </svg>
        </a>
    </div>
<!-- <section class="home-about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 data-aos="fade-down" data-aos-duration="1000" class="grad">About Ramindri Family </h2>
                <h3 data-aos="fade-up" data-aos-duration="1000">It's a Family that nurtures the Dreams, You dreamt for your Family... </h3>
                <p class="mt-5">Ramindri Family has been set up over a decade ago. Since then, we’ve been designing iconic landmarks that create a benchmark in the real estate industry of Northeast India. We, Ramindri Family, aim at growing together and achieving success by delivering excellence. Our dynamic journey of the past decade reflects our thoughts and inspires us to deliver Dream Homes to our keen customers. </p>
                <p>We believe that only Technology and Engineering skill are not enough to shape a Dream living space. Emotion, Trust, Dedication, and Unparalleled perfection are the keys to building up the finest Home. From lavishly designed premium residential buildings to affordable homes, we have created a niche in the industry and are proud of building the most coveted addresses that touch your soul. Thereby, the spaces that we develop resonates with the vibrance of Life. </p>
            </div>
        </div>
    </div>        
</section> 

<section class="home-about" style="background: #191919;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 data-aos="fade-down" data-aos-duration="1000" class="grad">From the Chairman's Desk  </h2>
                <h3 data-aos="fade-up" data-aos-duration="1000">It's a Family that nurtures the Dreams, You dreamt for your Family... </h3>
                <p class="mt-5">Jitesh Kumar Yadav, the Chairman of Ramindri Group of Companies is a young maverick first-generation entrepreneur widely recognized for his path-breaking and visionary contributions to the building of today’s North-East India. Through his pioneering role as a real estate developer and corporate leader, he has transformed the urban landscape of the North-Eastern region by setting new standards in the housing, retail and urban development scenario. He, along with his dedicated team, has created a world-class infrastructure to attract foreign and domestic investment inflows, generating new employment opportunities and changing lifestyles.</p>
                <p>Mr. Yadav has been a firm believer in corporate intervention in social upliftment. He has gladly conducted numerous CSR and philanthropic activities that helped 1000s of students/participants – children and adults. He also arranges regular educational and personality development programs for employees and construction workers with an aim to improve their skill sets and living standards.</p>
            </div>
        </div>
    </div>        
</section>-->
    <section class="home-projects">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 aos-animation">
                    <h2 data-aos="fade-down" data-aos-duration="1000" class="grad">Featured Projects</h2>
                    <h3 data-aos="fade-up" data-aos-duration="1000">Creating Spaces for Redefined Living</h3>
                    <div class="owl-carousel owl-theme owl-carousel-1">
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="images/project1.jpg" class="img-fluid" data-aos="fade-right" data-aos-duration="1000">
                                     <h4 data-aos="fade-left">Luxury Villa Project<!--<span>It is a long established fact</span>--></h4> 
                                    <h5 data-aos="fade-left">1.50 cr onwards</h5>
                                </div>
                                <div class="col-sm-6">
                                    <p data-aos="fade-left" data-aos-duration="1000">
                                        Experience Luxury like never before at our Ultra-Premium Villas designed to make you redefine your Living surrounded by plethora of amenities. Find out the unmatched Elegance and the Serenity to revive your inner-being.
                                    <a href="project-1.php">View Project</a>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="images/project2.jpg" class="img-fluid">
                                     <h4>Tallest Landmark<!--<span>It is a long established fact</span>--></h4> 
                                    <h5>8o L  onwards</h5>
                                </div>
                                <div class="col-sm-6">
                                    <p>
                                        Feel elevated when you live at the tallest and Iconic building of the city amidst Uber-luxury conveniences. It’s not only a landmark but also the most desirable location that only privileged can possess. 
                                    <a href="project-1.php">View Project</a>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="images/project3.jpg" class="img-fluid">
                                    <h4>Exquisite Residences<!--<span>It is a long established fact</span>--></h4>
                                    <h5>65 L  onwards</h5>
                                </div>
                                <div class="col-sm-6">
                                    <p>
                                        Nestled at the centre of the city, this Residential Towers are the epitome of exclusive living. Surrounded by more than 60% open space, it’s your new address to stay close to Mother Nature. 
                                    <a href="project-1.php">View Project</a>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>

                    

                    </div>
                    <a href="residential.php" class="more-product-bt btn-1d" data-aos="fade-up" data-aos-duration="1000">SHOW ME MORE PROJECTS </a>
                </div>
            </div>
        </div>
    </section>

    <section class="journey">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 aos-animation">
                    <h2 data-aos="fade-down" data-aos-duration="3000">Our Remarkable Journey</h2>
                    <h3 data-aos="fade-up" data-aos-duration="3000">Explore it</h3>
                    <div class="block-wrap">
                        <ul>
                            <li data-aos="fade-up" data-aos-duration="1000"> 
                                <img src="images/journy1.png" class="img-fluid" >
                                <h4>50+</h4>
                                <p>Completed Projects</p>
                            </li>

                            <li data-aos="fade-up" data-aos-duration="1000">
                                <img src="images/journy2.png" class="img-fluid" >
                                <h4>30+</h4>
                                <p>Joint Venture Projects</p>
                            </li>

                            <li data-aos="fade-up" data-aos-duration="1000">
                                <img src="images/journy3.png" class="img-fluid" >
                                <h4>21+</h4>
                                <p>Projects Under Construction</p>
                            </li>

                            <li data-aos="fade-up" data-aos-duration="1000">
                                <img src="images/journy4.png" class="img-fluid" >
                                <h4>20+</h4>
                                <p>Projects Underway</p>
                            </li>

                            <li data-aos="fade-up" data-aos-duration="1000">
                                <img src="images/journy5.png" class="img-fluid" >
                                <h4>12+</h4>
                                <p>Green Cities</p>
                            </li>

                            <li data-aos="fade-up" data-aos-duration="1000">
                                <img src="images/journy6.png" class="img-fluid" >
                                <h4>13+</h4>
                                <p>Years of Experience</p>
                            </li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>        
    </section>
    <section class="awards-wrap">
        <div class="container aos-animation">
            <div class="row">
                <div class="col-sm-12">
                    <h2 data-aos="fade-down" data-aos-duration="1000">Awards & Honours</h2>
                    <h3 data-aos="fade-up" data-aos-duration="1000">Achievements that Inspire Us</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 award-block" data-aos="fade-down" data-aos-duration="1000">
                    <img src="images/award-icon.png" class="img-fluid">
                    <h4>Established AWARDS 2020</h4>
                    <p>DEVELOPER OF THE YEAR (EAST)</p>
                </div>
                
                <div class="col-sm-3 award-block" data-aos="fade-down" data-aos-duration="1000">
                    <img src="images/award-icon.png" class="img-fluid">
                    <h4>variations AWARDS 2021</h4>
                    <p>DEVELOPER OF THE YEAR (EAST)</p>
                </div>

                <div class="col-sm-3 award-block" data-aos="fade-down" data-aos-duration="1000">
                    <img src="images/award-icon.png" class="img-fluid">
                    <h4>readable AWARDS 2019</h4>
                    <p>DEVELOPER OF THE YEAR (EAST)</p>
                </div>

                <div class="col-sm-3 award-block" data-aos="fade-down" data-aos-duration="1000">
                    <img src="images/award-icon.png" class="img-fluid">
                    <h4>Renaissance AWARDS 2018</h4>
                    <p>DEVELOPER OF THE YEAR (EAST)</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="awards.php" class="more-product-bt btn-1d" data-aos="fade-down" data-aos-duration="1000">SHOW ME MORE AWARDS</a>
                </div>
            </div>    
        </div>        
    </section>

    
<!-- TESTIMONIALS -->
<section class="testimonials">
  <div class="container-fluid aos-animation">

      <div class="row">
        <div class="col-sm-12">
            <h2 data-aos="fade-down" data-aos-duration="1000">Testimonials</h2>
            <!-- <h3></h3> -->
          <div id="customers-testimonials" class="owl-carousel" data-aos="fade-up" data-aos-duration="1000">

            <!--TESTIMONIAL 1 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-fluid" src="images/testimonial1.jpg" alt="">
                <p>It’s a true blessing to live amidst greenery.</p>
              </div>
              <div class="testimonial-name">Mr. Rajen Malhotra <span>Doctor</span></div>
            </div>
            <!--END OF TESTIMONIAL 1 -->
            <!--TESTIMONIAL 2 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-fluid" src="images/testimonial2.jpg" alt="">
                <p>Such a spacious home along with a double-height terrace is really something to feel proud of.</p>
              </div>
              <div class="testimonial-name">Mr. Shekhar Gupta<span>Business Man</span></div>
            </div>
            <!--END OF TESTIMONIAL 2 -->
            <!--TESTIMONIAL 3 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-fluid" src="images/testimonial3.jpg" alt="">
                <p>Living in the tallest residential tower is an out-of-the-world experience for us. </p>
              </div>
              <div class="testimonial-name">Mr. J.C.Sharma<span>Advocate</span></div>
            </div>
            <!--END OF TESTIMONIAL 3 -->
            <!--TESTIMONIAL 4 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-fluid" src="images/testimonial4.jpg" alt="">
                <p>My dream came true. Thanks, Ramindri Group.</p>
              </div>
              <div class="testimonial-name">Mrs. Subah Chaudhuri<span>Writer</span></div>
            </div>
            <!--END OF TESTIMONIAL 4 -->
            <!--TESTIMONIAL 5 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-fluid" src="images/testimonial5.jpg" alt="">
                <p>The amazing architectural structure overwhelmed me and three-sides open luxurious apartments made me take the decision.</p>
              </div>
              <div class="testimonial-name">Ms. Mayuri Mehta<span>Architect</span></div>
            </div>
            <!--END OF TESTIMONIAL 5 -->
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- END OF TESTIMONIALS -->

<section class="home-blog">
    <div class="container aos-animation">
        <div class="row">
            <div class="col-sm-12">
                <h2 data-aos="fade-down" data-aos-duration="2000">Blog & Updates</h2>
            </div>
        </div>    
        <div class="row">
            <div class="col-sm-6">
                <div class="blog1" data-aos="fade-down" data-aos-duration="2000">
                <img src="images/blog1.jpg" class="img-fluid">
                <h4>Guwahati- The most enviable Location in North-East India. Explore…</h4>
                <p>By <a href="#"> Admin</a> on 26 Nov 2020</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="blog1" data-aos="fade-down" data-aos-duration="2000">
                <img src="images/blog2.jpg" class="img-fluid">
                <h4>Luxury Villas – Is it truly designed for premium living? Find it out…</h4>
                <p>By <a href="#"> Admin</a> on 30 April 2021</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <a href="media.php" class="more-product-bt btn-1d">SHOW ME MORE BLOGS </a>
            </div>
        </div> 
    </div>        
</section>



<?php include("include/footer.php");?>

<?php include("include/js.php");?>
    

    <script>
        AOS.init();
      </script>

    <script>
        $('.owl-carousel-1').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true,
            loop:false,
        },
        600:{
            items:1,
            nav:false,
            loop:false,
        },
        1000:{
            items:1,
            nav:true,
            loop:false,
        }
    }
})
    </script>

    <script>
        jQuery(document).ready(function($) {
            "use strict";
            //  TESTIMONIALS CAROUSEL HOOK
            $('#customers-testimonials').owlCarousel({
                loop: true,
                center: true,
                items: 3,
                margin: 0,
                autoplay: true,
                dots:true,
                autoplayTimeout: 8500,
                smartSpeed: 450,
                responsive: {
                  0: {
                    items: 1
                  },
                  768: {
                    items: 2
                  },
                  1170: {
                    items: 3
                  }
                }
            });
          });
    </script>

    <script>
        $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 200) {
        $(".navbar-dark").addClass("darkHeader");
    } else {
        $(".navbar-dark").removeClass("darkHeader");
    }
});
    </script>


    <!--pricing--> 

<script>
$(document).ready(function () {

    $(".slidingDiv").hide();
    $(".show_hide").show();

    
    var pos=0;
    $('.show_hide').click(function () {
        if(pos==0){
            $(".slidingDiv").toggle("slide");
            $(".show_hide").addClass('right_pos');
            pos=1;
        }
        else{
            $(".slidingDiv").toggle("slide");
            $(".show_hide").removeClass('right_pos');
            pos=0;
        }
    });
    
    $('.show_hide_2').click(function () {
        $(".slidingDiv").toggle("slide");
    });
    
    /*$('.show_hide').click(function () {
        $(".show_hide").toggle('right_pos');
    });*/

});
    function formSubmit(){
      var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
      if( $('#name').val() == '' ){
        $('#name').focus();
        swal("Oops!", "Enter your full name", "warning");
        return false;
      }else if($('#email').val() == ''){
        $('#email').focus();
        swal("Oops!", "Enter your email id", "warning");
        return false;
      }else if( $('#email').val() != ''  && ! filter.test($('#email').val()) ){
          $('#email').focus();
          swal("Oops!", "Invalid email id", "warning");
          return false;
      }else if( $('#phone').val() == '' ){
        $('#phone').focus();
        swal("Oops!", "Enter your mobile number", "warning");
        return false;
      }else if( isNaN( $("#phone").val())  ){
        $('#phone').focus();
        swal("Oops!", "Invalid mobile number", "warning");
        return false;
      }else if( $('#phone').val().length !=10 ){
        $('#phone').focus();
        swal("Oops!", "Invalid mobile number", "warning");
        return false;
      }
      $(".slidingDiv").toggle("slide");
      $(".show_hide").removeClass('right_pos');
      return true;
    }


</script>

  </body>
</html>
