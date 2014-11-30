var originalNavClasses;

function toggleNav() {
    var elem = document.getElementById('navigation_list');
    var classes = elem.className;
    if (originalNavClasses === undefined) {
        originalNavClasses = classes;
    }
    elem.className = /expanded/.test(classes) ? originalNavClasses : originalNavClasses + ' expanded';
}

$('.host_dropdown').hover(
   function(){ $('#changeableBorder1').addClass('current') },
   function(){ $('#changeableBorder1').removeClass('current') }

)
$('.info').hover(
   function(){ $('#changeableBorder2').addClass('current') },
   function(){ $('#changeableBorder2').removeClass('current') }

)//Solution for adding current class to parent element when hovering on child found from http://css-tricks.com/snippets/jquery/addingremoving-class-on-hover/

var myElement = document.querySelector("header");
var headroom  = new Headroom(myElement, {
  "offset": 150,
  "tolerance": 5,
  "classes": {
    "initial": "animated",
    "pinned": "slideDown",
    "unpinned": "slideUp"
  }
});

headroom.init();

if($('.header').length) {
  var myElement = document.querySelector(".header");
  var headroom2  = new Headroom(myElement, {
    "offset": 150,
    "tolerance": 5,
    "classes": {
      "initial": "animated",
      "pinned": "slideDown",
      "unpinned": "slideUp"
    }
  });

  headroom2.init();
}

$('body').removeClass('nojs').addClass('js'); //*Enables .js * CSS classes when JavaScript is disabled


$(document).ready(function() {
  var $primaryNav = $('.navigation');

  $(function(){
    $primaryNav.setup_navigation();
  });

  $.fn.setup_navigation = function(settings) {
    settings = jQuery.extend({
      focusClass: 'menu-focus',
    }, settings);

    // Set tabIndex to -1 so that links can't receive focus until menu is open
    $(this).find('> li > a').next('ul').find('a').attr('tabIndex',-1);

    $(this).find('> li > a').hover(function(){
      $(this).closest('ul')
        .find('.'+settings.focusClass).removeClass(settings.focusClass)
        .find('a').attr('tabIndex',-1);
    });
    $(this).find('> li > a').focus(function(){
      $(this).closest('ul')
        .find('.'+settings.focusClass).removeClass(settings.focusClass)
        .find('a').attr('tabIndex',-1);
      $(this).next('ul')
        .addClass(settings.focusClass)
        .find('a').attr('tabIndex',0);
    });

    // Hide menu if click or focus occurs outside of navigation
    $(this).find('a').last().keydown(function(e){
      if(e.keyCode === 9) {
        // If the user tabs out of the navigation, hide all menus
        $('.'+settings.focusClass)
        .removeClass(settings.focusClass)
        .find('a').attr('tabIndex',-1);
      }
    });
    $(document).click(function(){
      $('.'+settings.focusClass)
      .removeClass(settings.focusClass)
      .find('a').attr('tabIndex',-1);
    });
  };
});
