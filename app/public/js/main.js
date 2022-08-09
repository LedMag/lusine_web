'use strict';


const dropdownBox = document.getElementById('langs');
const dropdownElems = document.querySelectorAll('.header__lang');


$('#slider').nivoSlider ({ 
    //effect: 'random',
    slices: 20,
    boxCols: 8,
    boxRows: 4,
    animSpeed: 400,
    pauseTime: 5000,
    startSlide: 0,
    directionNav:false,
    controlNav: true,
    controlNavThumbs: false,
    pauseOnHover: true,
    manualAdvance: false,
    prevText: 'Prev',
    nextText: 'Next',
    randomStart: false,
});


dropdownBox.addEventListener('click', (e) => {
    if(dropdownBox.classList.contains('open')){
        return;
    }
    e.stopPropagation();
    dropdownBox.classList.add('open');
    dropdownElems.forEach( elem => {
        elem.style.display = "block"
        elem.removeEventListener('click', stop);
    })
})

dropdownElems.forEach( elem => {
    elem.addEventListener('click', stop)
})

function stop (e){
    e.preventDefault()
}
