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

//######### Change menu bar backgorund on scroll #########
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 700) {
        $(".top-menu, .top-menu ul li a, .burger i").addClass("menugrey");
    } else {
        $(".top-menu, .top-menu ul li a, .burger i").removeClass("menugrey");
    }
});
// ########Change menu bar backgorund on scroll END ############

// ######## Highlight active section in menu bar START #############
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
// ######## Highlight active section in menu bar START ############

// ########### Countdown START ###########
$('#clock').countdown(weddingDate).on('update.countdown', function(event) {
  var $this = $(this).html(event.strftime(''
    + '<div class="timer-column"><h3>%-w</h3><p>week%!w</p><img src="/wp-wedding/wp-content/themes/vcs-starter/assets/images/about_pic_frame.png" alt="carousel_pic_frame"></div>'
    + '<div class="timer-column"><h3>%-d</h3><p>day%!d</p><img src="/wp-wedding/wp-content/themes/vcs-starter/assets/images/about_pic_frame.png" alt="carousel_pic_frame"></div>'
    + '<div class="timer-column"><h3>%H</h3><p>hours<p><img src="/wp-wedding/wp-content/themes/vcs-starter/assets/images/about_pic_frame.png" alt="carousel_pic_frame"></div>'));
});
// ########### Countdown END ###########

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

// ########## RSVP Apear on button click START ########
$('.rsvp-link button').click(function(){
  $('.rsvp-form').toggleClass('rsvp-form-show');
});
// ########## RSVP Apear on button click END ########

// ####### apear elements on scroll START ###########
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
// ####### apear elements on scroll END ###########

// ###### Inserts span tags around last word in memories section, image title Start #############

var imageTitle = $('.gallery-pic-container h3');
imageTitle.each(function(){
   var $this = $(this), 
   text=$this.text().trim(), // removes spaces before and after sentence
   words = text.split(" "); // separates string in to word array
   var lastWord = words.pop(); // removes the last word of words array, and returns that word.
   words.push('<span>' + lastWord + '</span>'); // adds the last word, back to words array
   $this.html(words.join(' ')); // joins words array back to string, and overwrites ".gallery-pic-container h3" html
});
// ###### Inserts span tags around last word in memories section, image title END #############

var arrow = $('#home .container a');
// console.log(arrow);
arrow.addClass('bounce');

});
