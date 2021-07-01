<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
    <script src="js/owl.carousel.min.js" ></script>
    <!-- <script src="js/fancybox.min.js" ></script> -->

    <script src="js/jquery.fancybox.min.js" ></script>
    

    <!-- For Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    

    <script>
        AOS.init();
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

    <script type="text/javascript">
        hideChat(0);

$("#prime").click(function () {
  toggleFab();
});

//Toggle chat and links
function toggleFab() {
  $(".prime").toggleClass("fa-comment");
  $(".prime").toggleClass("fa-times");
  $(".prime").toggleClass("is-active");
  $(".prime").toggleClass("is-visible");
  $("#prime").toggleClass("is-float");
  $(".chat").toggleClass("is-visible");
  $(".fab").toggleClass("is-visible");
}

$("#chat_first_screen").click(function (e) {
  hideChat(1);
});

$("#chat_second_screen").click(function (e) {
  hideChat(2);
});

$("#chat_third_screen").click(function (e) {
  hideChat(3);
});

$("#chat_fourth_screen").click(function (e) {
  hideChat(4);
});

$("#chat_fullscreen_loader").click(function (e) {
  $(".fullscreen").toggleClass("zmdi-window-maximize");
  $(".fullscreen").toggleClass("zmdi-window-restore");
  $(".chat").toggleClass("chat_fullscreen");
  $(".fab").toggleClass("is-hide");
  $(".header_img").toggleClass("change_img");
  $(".img_container").toggleClass("change_img");
  $(".chat_header").toggleClass("chat_header2");
  $(".fab_field").toggleClass("fab_field2");
  $(".chat_converse").toggleClass("chat_converse2");
  //$('#chat_converse').css('display', 'none');
  // $('#chat_body').css('display', 'none');
  // $('#chat_form').css('display', 'none');
  // $('.chat_login').css('display', 'none');
  // $('#chat_fullscreen').css('display', 'block');
});

function hideChat(hide) {
  switch (hide) {
    case 0:
      $("#chat_converse").css("display", "none");
      $("#chat_body").css("display", "none");
      $("#chat_form").css("display", "none");
      $(".chat_login").css("display", "block");
      $(".chat_fullscreen_loader").css("display", "none");
      $("#chat_fullscreen").css("display", "none");
      break;
    case 1:
      $("#chat_converse").css("display", "block");
      $("#chat_body").css("display", "none");
      $("#chat_form").css("display", "none");
      $(".chat_login").css("display", "none");
      $(".chat_fullscreen_loader").css("display", "block");
      break;
    case 2:
      $("#chat_converse").css("display", "none");
      $("#chat_body").css("display", "block");
      $("#chat_form").css("display", "none");
      $(".chat_login").css("display", "none");
      $(".chat_fullscreen_loader").css("display", "block");
      break;
    case 3:
      $("#chat_converse").css("display", "none");
      $("#chat_body").css("display", "none");
      $("#chat_form").css("display", "block");
      $(".chat_login").css("display", "none");
      $(".chat_fullscreen_loader").css("display", "block");
      break;
    case 4:
      $("#chat_converse").css("display", "none");
      $("#chat_body").css("display", "none");
      $("#chat_form").css("display", "none");
      $(".chat_login").css("display", "none");
      $(".chat_fullscreen_loader").css("display", "block");
      $("#chat_fullscreen").css("display", "block");
      break;
  }
}

    </script>
