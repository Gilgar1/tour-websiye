let menu = document.querySelector('#main-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

var swiper = new Swiper(".home-slider", {
    loop: true, // Corrected typo: 'koop' should be 'loop'
    navigation: {
        nextEl: ".swiper-button-next", // Added a dot before the class name
        prevEl: ".swiper-button-prev", // Added a dot before the class name
    },
});