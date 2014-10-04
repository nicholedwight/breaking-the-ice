var mainNav = document.querySelector('.home-nav');
mainNav.classList.add('hidden');

var toggle = document.getElementById('aboutToggle');
var slider = document.querySelector('.slider');
var homeSection = document.querySelector('.home');

toggle.addEventListener('click', toggleSlider, false);

function toggleSlider(){
    if (slider.classList.contains('opened')) {
        slider.classList.remove('opened');
        slider.classList.add('closed');
        homeSection.classList.remove('compressed');
        toggle.classList.remove('current');
        console.log('closing');
    } else {
        slider.classList.remove('closed');
        slider.classList.add('opened');
        homeSection.classList.add('compressed');
        toggle.classList.add('current');
        console.log('opening');
    }
}

var mobileNav = document.getElementById('collapsibleNav');
mobileNav.addEventListener('click', toggleNav, false)

function toggleNav() {
  if (mainNav.classList.contains('hidden')) {
      mainNav.classList.remove('hidden');
  } else {
      mainNav.classList.add('hidden');
  }
}
