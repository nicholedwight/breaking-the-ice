var toggle = document.getElementById('aboutToggle');
var slider = document.querySelector('.slider');
var homeSection = document.querySelector('.home');

toggle.addEventListener('click', toggleSlider, false);

function toggleSlider(){
    if (slider.classList.contains('opened')) {
        slider.classList.remove('opened');
        slider.classList.add('closed');
        homeSection.classList.remove('compressed');
        console.log('closing');
    } else {
        slider.classList.remove('closed');
        slider.classList.add('opened');
        homeSection.classList.add('compressed');
        console.log('opening');
    }
}
