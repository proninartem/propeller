
$(document).ready(function($) {
    $(this).on('click','.wpcf7-not-valid-tip', function() {
        $(this).fadeOut(250,function(){
            $(this).remove();
        });
    });

    $(this).on('click','.wpcf7-response-output', function() {
        $(this).fadeOut(250,function(){
            $(this).remove();
        });
    });
    $('#nav-icon').on('click', function(){
            $("#mob_nav").addClass("show_menu");
    });
    $('#close-icon').on('click', function(){
        $('#mob_nav').removeClass("show_menu");
    });
    $('.hover_block').on('click', function(){
        $(this).addClass("show");
        $(this).prev().removeClass("show");
        console.log("show");
    });
    $('.hover_block .close_icon').on('click', function(event){
        $(this).parent().removeClass("show");
        $(this).parent().addClass("hide");
        $('.inner_text').parent().removeClass("show");
        $(this).parent().prev().addClass("show");
        console.log("hide");
        event.stopPropagation();
    });

    function initial_slick() {

        if ($('.slider').children().length >= 3) {
            $('.slider').slick({
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: false,
            });
        }
        else{
            $('.slider').css("margin-bottom","40px")
        }

    }
    initial_slick();
    $('.cards_case_mobile').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows:false,
    });
    $(".open_popup").on('click', function() {

        var $code = $(this).data('attr');

        $.fancybox.open('<div class="message">' +
            '<video autoplay muted loop controls id="myVideo">' +' ' +
            '<source src="'+$code+'" type="video/mp4">'+
            '</video>' +
            '</div>');

    });

    const rightArrow = document.querySelector(".slider-arrow.right");
    const leftArrow = document.querySelector(".slider-arrow.left");
    const track = $(".slider_track");
    const analyticsTrack = $(".slider_track_analytics");

console.log(analyticsTrack);

rightArrow.addEventListener("click", () => {
    track.slick("slickNext");
    analyticsTrack.slick("slickNext");
});

leftArrow.addEventListener("click", () => {
    track.slick("slickPrev");
    analyticsTrack.slick("slickPrev");
});

    $(".slider_track").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: false,
    });
  $(".slider_track_analytics").slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      dots: false,
      arrows: false,
      infinite: false,
      responsive: [
          {
              breakpoint: 768,
              settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
              },
          },
          {
              breakpoint: 320,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  dots: true,
              },
          },
      ],
  });
  $(".cards_case_mobile").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
  });

    $(window).resize(function(){
        if($(window).width() < 768) {
            $('.link_right .link_blocks').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
            });
        } else {
            $('.link_right .link_blocks').unslick();
        }
    });

});






