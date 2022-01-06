new WOW().init();
var $ = jQuery.noConflict();

$(document).ready(function ($) {
  if ($(".banner-slider").length > 0) {
    $(".banner-slider").slick({
      arrows: false,
      dots: false,
      autoplay: true,
      autoplaySpeed: 5000,
      adaptiveHeight: true,
    });
  }

  $(".testimonialSlider").slick({
    dots: true,
    infinite: false,
    speed: 600,
    adaptiveHeight: true,
    arrows: false,
    autoplay: false,
  });

  $(".services-carousel-lg").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: true,
    autoplay: false,
    autoplaySpeed: 2000,
    prevArrow:
      '<img class="a-left control-c prev slick-prev" src="/wp-content/themes/firstpage/img/carousel-left-button.png">',
    nextArrow:
      '<img class="a-right control-c next slick-next" src="/wp-content/themes/firstpage/img/carousel-right-button.png">',
  });

  $(".services-carousel-md").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    autoplay: false,
    autoplaySpeed: 2000,
    prevArrow:
      '<img class="a-left control-c prev slick-prev" src="/wp-content/themes/firstpage/img/carousel-left-button.png">',
    nextArrow:
      '<img class="a-right control-c next slick-next" src="/wp-content/themes/firstpage/img/carousel-right-button.png">',
  });

  $(".services-carousel-sm").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: false,
    autoplaySpeed: 2000,
    prevArrow:
      '<img class="a-left control-c prev slick-prev" src="/wp-content/themes/firstpage/img/carousel-left-button.png">',
    nextArrow:
      '<img class="a-right control-c next slick-next" src="/wp-content/themes/firstpage/img/carousel-right-button.png">',
  });

  if ($(".brandSlider").length > 0) {
    $(".brandSlider").slick({
      dots: true,
      infinite: false,
      arrows: false,
      speed: 600,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: 4,
          },
        },
        {
          breakpoint: 841,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2,
          },
        },
      ],
    });
  }
});

//FAQ accordion
$(document).ready(function () {
  $(".testimonialBlock .question").on("click", function () {
    var ansBlock = $(this).parent(".blockwrapper").children(".answer");
    var questionBlock = $(this).parent(".blockwrapper").children(".question");
    $(".answer").not(ansBlock).slideUp();
    $(".question").not(questionBlock).removeClass("active");
    $(this).toggleClass("active");
    ansBlock.slideToggle();
  });

  $(".fullWidth-twoCol .row>div").matchHeight({ property: "min-height" });
});

var dateToday = new Date();
$(".datepicker")
  .datepicker({
    //dateFormat: 'dd-mm-yy',
    //dayNamesMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
    //minDate: dateToday,
    //beforeShowDay: $.datepicker.noWeekends
  })
  .keyup(function (e) {
    if (e.keyCode == 8 || e.keyCode == 46) {
      $.datepicker._clearDate(this);
    }
  });

/*FIXED STICKY FOOTER SOLUTION*/
$(document).ready(function () {
  $(document.body).css("padding-bottom", $("div.stickyFooter").innerHeight());
});
$(window)
  .resize(function () {
    $(document.body).css("padding-bottom", $("div.stickyFooter").innerHeight());
  })
  .resize();

$(document).on("click", 'form.fp-form button[type="submit"]', function () {
  var $this = $(this);
  var $form = $this.closest("form.fp-form");

  if ($form.length > 0) {
    $form.parsley().validate();

    if ($form.parsley().isValid()) {
      var $currentstep = $form.find(".form-step:visible");
      var $thankyou = $form.find(".form-thankyou");
      console.log("123");

      // Add Spinner
      //$this.append(' <i class="fa fa-spinner fa-spin"></i>');
      $this.html('Generating... <i class="fa fa-spinner fa-spin"></i>');
      //console.log('*** Form 1 ***');

      // Send Ajax
      $.ajax({
        url: wpSiteUrl + "/action/hubspot/submit.php",
        type: "post",
        dataType: "json",
        data: $form.serialize() + "&lead_sitename=" + wpSiteName,
        success: function (data) {
          $this.html('Redirecting... <i class="fa fa-spinner fa-spin"></i>');

          var result = data.result;
          // Regardless if it's successful, otherwise: if (result == "success") {

          window.dataLayer = window.dataLayer || [];
          window.dataLayer.push({
            event: "formSubmissionSucess",
            eventCategory: "Form Submission",
            eventAction: formPath,
            eventLabel: "Submitted-" + pathname,
          });

          // Check Product Type
          if ($form.find("input[name=lead_producttype]").val() == "traffic") {
            var cookieName = "fp_float_form";
            var cookieVal = "1";
            var cookieDur = 180;

            // Save in cookie to prevent further popups
            createCookie(cookieName, cookieVal, cookieDur);
          }

          // If Redirect URL exists
          if (!!$form.attr("action")) {
            window.location.href = $form.attr("action");

            // If Thank You step exists
          } else if ($thankyou.length > 0) {
            $currentstep.fadeOut("fast", function () {
              $thankyou.fadeIn();
            });

            if (
              typeof gaIdLabel !== "undefined" &&
              typeof gtag !== "undefined"
            ) {
              gtag("event", "conversion", { send_to: gaIdLabel });
            }
          }

          return false;
        },
      });

      return false;
    }
  }
});
