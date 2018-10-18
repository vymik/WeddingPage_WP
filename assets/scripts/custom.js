


$(document).ready(function(){
	console.log("pavyko");
// ######## BURGER MENU START ############
$('#nav-icon3, .menu-item a').click(function(){
  $('.nav').toggleClass('show');
});
 $('.menu-item a').click(function(){
  $('#nav-icon3').toggleClass('open');
});


// ######## BURGER MENU END ############

// ######## OWL CAROUSEL START #########
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
// ######## OWL CAROUSEL END #########

// #########SMOOTH SCROLLING START##########
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
// #########SMOOTH SCROLLING END##########

//#########Change menu bar backgorund on scroll#########
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 700) {
        $(".top-menu, .top-menu ul li a, .burger i").addClass("menugrey");
    } else {
        $(".top-menu, .top-menu ul li a, .burger i").removeClass("menugrey");
    }
});
// ########Change menu bar backgorund on scroll END############

var sections = $('section')
  , nav = $('.top-menu')
  , nav_height = nav.outerHeight();
 
$(window).on('scroll', function () {
  var cur_pos = $(this).scrollTop();
 
  sections.each(function() {
    var top = $(this).offset().top - nav_height,
        bottom = top + $(this).outerHeight();
 
    if (cur_pos >= top && cur_pos <= bottom) {
      nav.find('a').removeClass('current-menu-item');
      sections.removeClass('current-menu-item');
 
      $(this).addClass('current-menu-item');
      nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('current-menu-item');

    }
  });
});
// ########### Active link on menu END ##########
// ########### Countdown START ###########
// ############################

$('#clock').countdown('2019/09/07').on('update.countdown', function(event) {
  var $this = $(this).html(event.strftime(''
    + '<div class="timer-column"><h3>%-w</h3><p>week%!w</p><img src="assets/images/about_pic_frame.png" alt="carousel_pic_frame"></div>'
    + '<div class="timer-column"><h3>%-d</h3><p>day%!d</p><img src="assets/images/about_pic_frame.png" alt="carousel_pic_frame"></div>'
    + '<div class="timer-column"><h3>%H</h3><p>hours<p><img src="assets/images/about_pic_frame.png" alt="carousel_pic_frame"></div>'));
});
-// ########### Countdown END ###########
//########### Burger animation ########## 
$('#nav-icon3').click(function(){
    $(this).toggleClass('open');
  });
// ########## Burger animation END########
// ########## change gallery pic opacity then mouse over pic heading START #######
$('.gallery-pic-container h3').mouseover(function(){
  $(this).parent().children('img').addClass('img-opc');
});
$('.gallery-pic-container').mouseleave(function(){
  $('.gallery-pic-container img').removeClass('img-opc');
});
// ########## change gallery pic opacity then mouse over pic heading END #######
// ########## RSVP Apear on button click ########
$('.rsvp-link button').click(function(){
  $('.rsvp-form').toggleClass('rsvp-form-show');

});
// ####### apear on scroll ###########
/* Every time the window is scrolled ... */
$(window).scroll( function(){

    /* Check the location of each desired element */
    $('.hideme').each( function(i){
        
        var bottom_of_object = $(this).position().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        
        /* If the object is completely visible in the window, fade it it */
        if( bottom_of_window > bottom_of_object ){
            
            $(this).animate({'opacity':'1'},1500);
                
        }
        
    }); 

});
// ####### apear on scroll ###########
});
