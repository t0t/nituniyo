/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
    
    // JavaScript to be fired on all pages



    // cambiame los svg por png si el navegador no los soporta
    if(!Modernizr.svg) {
        $('img[src$="svg"]').attr('src', function() {
            return $(this).attr('src').replace('.svg', '.png');
        });
    }



    // var s = skrollr.init({
    //     render: function(data) {
    //     //Log the current scroll position.
    //     //console.log(data.curTop);
    //     $('#offset').text(data.curTop);
    //     }
    // });


    // skrollr.init();
    // var s = skrollr.init({
    // forceHeight: true
    // });
    var s = skrollr.init();
    // $('html').addClass('skrollr');


// -------------
/*====================================
=            off canvas ON DOM READY 
http://scotch.io/tutorials/off-canvas-menus-with-css3-transitions-and-transforms           =
====================================*/
$(function() {
  
    // Toggle Nav on Click
    $('.toggle-nav').click(function(e) {
        // Calling a function in case you want to expand upon this.
        toggleNav();
        e.preventDefault();
    });

  
});


/*========================================
=            off canvas CUSTOM FUNCTIONS 
http://scotch.io/tutorials/off-canvas-menus-with-css3-transitions-and-transforms           =
========================================*/
function toggleNav() {
    if ($('.nav').hasClass('show-nav')) {
        // Do things on Nav Close
        $('.nav').removeClass('show-nav');
        $('.toggle-nav i').removeClass('icon-cross-circle');
        $('.toggle-nav i').addClass('icon-collapse');
    } else {
        // Do things on Nav Open
        $('.nav').addClass('show-nav');
        $('.toggle-nav i').removeClass('icon-collapse');
        $('.toggle-nav i').addClass('icon-cross-circle');
    }

    //$('#site-wrapper').toggleClass('show-nav');
}
//cierra menu con tecla ESC
$(document).keyup(function(e) {
    if (e.keyCode === 27) {
        if ($('.nav').hasClass('show-nav')) {
            // Assuming you used the function I made from the demo
            toggleNav();
        }
    }
});

// $('#site-wrapper').click(function() {
//   if ($('#site-wrapper').hasClass('show-nav')) {
//       $('#site-wrapper').removeClass('show-nav');
//     }
// });

// $("body > div").click(function() {
//     if ($('#site-wrapper').hasClass("show-nav"))
//     {
//        $(this).removeClass('show-nav');
//     }
// });


// ----------


    // FitVids
    $("main").fitVids();


    // jcarousel
    $('.jcarousel').jcarousel({
        wrap: 'circular',
        });
    $('.jcarousel').jcarouselAutoscroll();


    // Fanybox / Lightbox
    // $("a[href$='.jpg'], a[href$='.jpeg']").fancybox({
    // $("a[href$='.jpg'], a[href$='.jpeg']").attr('rel','galeria').fancybox({
      
    // beforeShow : function() {
    // var alt = this.element.find('img').attr('alt');
    // this.inner.find('img').attr('alt', alt);
    // this.title = alt;
    // }
    
    // });

    // $('.mobile').on('click', function (e) {
    //     e.preventDefault();
    //     $('nav').toggleClass('on');
    // });

    
    $('nav ul li ul').each(function() {
        $(this).before('<i class="icon-caret"></i>');
    });
    
    $('nav ul li').click(function() {
        $(this).children('ul').toggleClass('active');
        $(this).children('.icon-caret').toggleClass('rotate');
    });


    //efectos scroll
    // var go = true;
    // $(window).scroll(function() {
    //   if ($(this).scrollTop() > 200 && go) {
    //     // $(".banner img").css('width', '10%');
    //     go = false;
    //     $(".banner").addClass('header-encogido');
    //     $(".banner").addClass('putfixed');
    //   } else if ($(this).scrollTop() < 200 && !go) {
    //     // $(".banner").css('height', '41px');
    //     go = true;
    //     $(".banner").removeClass('putfixed');
    //     $(".banner").removeClass('header-encogido');
    //   }
    // });



    // $('.logo').on('click', function (e) {
    //  e.preventDefault();
    //  $( 'ul.nav' ).toggle();
    // });





      
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.


