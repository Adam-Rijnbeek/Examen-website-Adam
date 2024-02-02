let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

// Ik zal even kort uitleggen wat dit stukje JavaScript doet.
// Kort samengevat zorgt deze code ervoor dat het menu opent en sluit wanneer erop wordt geklikt,
// en sluit het ook automatisch wanneer er wordt gescrolld op de webpagina.
// Dit kan gebruikt worden bij klanten die op hun telefoon zitten voor de responsivenes.






