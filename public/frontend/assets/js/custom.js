/*slick_nav start*/
jQuery(document).ready(function(){
    $(function(){
        $('#nav-ul').slicknav({
            label:'',
            prependTo:'#slick_nav_area',
//            prepend:'<a href="index.php"><img class="logo-slck" src="images/logo.png" alt="Website Logo" /></a>',
            closeOnClick:'true' // Close menu when a link is clicked.
        });
        
    });
    
    
});
/*slick_nav end*/






/*bxslider start*/
$(document).ready(function(){
    $('.home_slider').bxSlider();
});
/*bxslider end*/




/*scroll_to_top start*/
//Get the button
var scrollToTop = document.getElementById("scrollToTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollToTop.style.display = "block";
  } else {
    scrollToTop.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
/*scroll_to_top end*/





/*date_picker start*/
$(function(){
    $( "#datepicker" ).datepicker();
});
/*date_picker end*/




/*owl-carousel start*/
var owl = $('.testimonial-child');
owl.owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
/*owl-carousel end*/






/*fixed_header start*/
// $(document).scroll(function () {
// var y = $(document).scrollTop(),
//    header = $("#fixed_area"),
//     headerLogo = $(".header-logo"),
//     navUl = $("#nav-ul");
// if(y >= 100){
//     header.addClass('fixed');
//     headerLogo.addClass('logo-size');
//     navUl.addClass('navUl-size');
// } else {
//     header.removeClass('fixed');
//     headerLogo.removeClass('logo-size');
//     navUl.removeClass('navUl-size');
// }
// });
/*fixed_header end*/





/*form lebel transition start*/
$('#name').focusout(function() {
    var val = this.value;
  if (val.length > 0) {
    $('#name-label').addClass('not-empty');
  } else {
    $('#name-label').removeClass('not-empty');
  }
});

$('#email').focusout(function() {
    var val = this.value;
  if (val.length > 0) {
    $('#email-label').addClass('not-empty');
  } else {
    $('#email-label').removeClass('not-empty');
  }
});

$('#number').focusout(function() {
    var val = this.value;
  if (val.length > 0) {
    $('#number-label').addClass('not-empty');
  } else {
    $('#number-label').removeClass('not-empty');
  }
});

$('#msge').focusout(function() {
    var val = this.value;
  if (val.length > 0) {
    $('#msge-label').addClass('not-empty');
  } else {
    $('#msge-label').removeClass('not-empty');
  }
});
/*form lebel transition end*/

// menu active
// $('#nav-ul li').click(function(e){
//     $('#nav-ul li').removeClass("active");
//     $(this).addClass("active");
// });