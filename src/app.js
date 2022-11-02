import Splide from '@splidejs/splide';

const slider = document.querySelector('.splide');
if(slider){
    new Splide( '.splide',{
        pagination: false
    } ).mount();
}

/* Open Close Button Toggle Menu Mobile */

const buttonMenu = document.querySelector('#menu-mobile');
const divMenu = document.querySelector('#nav-menu');
if(buttonMenu){
    buttonMenu.addEventListener('click', function(e){
        e.preventDefault();
        divMenu.classList.toggle('hidden');
    });
}


const isHidden = elem => {
    const styles = window.getComputedStyle(elem)
    return styles.display === 'none' || styles.visibility === 'hidden'
}


window.addEventListener('resize', function(event) {
    if (!isHidden(buttonMenu)){
        divMenu.classList.add('hidden');
        console.log('as');
    }
}, true);