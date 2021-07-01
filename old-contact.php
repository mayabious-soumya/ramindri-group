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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css"/>

    <title>Ramindri Group</title>
  </head>
  <body>
 
    <?php include("include/header.php");?> 

 <section class="topBannerSec">
     <div class="imgBox"><img src="images/our-journy-banner.jpg"></div>
     <div class="inner-title">
        <h1>Reach Us</h1>
        <!-- <p><span>10000+</span> Happy Families</p> -->
      </div>
 </section>   

 




<section class="journy-wrap-4">
    <div class="container">
        <div class="row">
          <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h2 class="inner-title1 text-center" data-aos="fade-down" data-aos-duration="1000">Mail Us</h2>
                <h3 class="inner-title3 text-center pb-4" data-aos="fade-up" data-aos-duration="1000">Get Connected with Us</h3>
                <div class="teamblock" data-aos="fade-down" data-aos-duration="1000">
                    <form class="p-5">
                      <div class="form-group mb-4">
                        <input type="text" class="form-control" placeholder="Your Name">
                      </div>

                      <div class="form-group mb-4">
                        <input type="email" class="form-control" placeholder="Your Email ID">
                      </div>

                      <div class="form-group mb-4">
                        <input type="text" class="form-control" placeholder="Phone Number"> 
                      </div>

                      <div class="form-group mb-4">
                        <textarea class="form-control" rows="3" placeholder="Comment"></textarea>
                      </div>

                      <a href="#" style="bottom: -20px;">Submit</a>

                    </form>  
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="clearfix"></div>


            
        </div>
    </div>
</section>

<section class="contact-wrap" data-aos="up-down" data-aos-duration="1000">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d57303.1897986706!2d91.7858011!3d26.149491!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3441e5d85cbf23fe!2sRamindri%20Group!5e0!3m2!1sen!2sin!4v1620125377537!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  <div class="contactinfo">
    <p><strong>Address</strong></p>
    <p>Unit No. 702B, 6th floor, Central Mall, Christian Basti, G S Road, Guwahati, Assam. PIN - 781005</p>

    <p><strong>Email ID</strong></p>
    <p>info@ramindrigroup.com</p>

    <p><strong>Call Us</strong></p>
    <p>036 - 1715 - 0633</p>

    <p><strong>Opaning Time</strong></p>
    <p>Monday – Friday 10 AM to 7 PM<br>
Saturday-Sunday 11 AM to 2 PM</p>
  </div>
</section>    

<?php include("include/footer.php");?>

<?php include("include/js.php");?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js"></script>
    
<script type="text/javascript">
    $(function(){
   $('.timeline-nav').slick({
      slidesToShow: 12,
      slidesToScroll: 1,
      asNavFor: '.timeline-slider',
      centerMode: false,
      focusOnSelect: true,
       mobileFirst: true,
      arrows: false,
      infinite:false,
       responsive: [
           {
          breakpoint: 768,
          settings: {
            slidesToShow: 8,
           }
          },
         {
          breakpoint: 0,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2,
          }
        }
     ]
  });
  
   $('.timeline-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      asNavFor: '.timeline-nav',     
      centerMode: true,     
      cssEase: 'ease',
       edgeFriction: 0.5,
       mobileFirst: true,
       speed: 500,
       responsive: [
         {
          breakpoint: 0,
          settings: {
              centerMode: false
          }
        },
           {
          breakpoint: 768,
          settings: {
              centerMode: true
          }
        }
     ]
  });
 
});
</script>
    
  </body>
</html>
