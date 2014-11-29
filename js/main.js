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
