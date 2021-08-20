const hamburger = document.querySelector('.hamburger');
const navlinks = document.querySelector('nav ul');
const links = document.querySelectorAll('nav li');

hamburger.addEventListener('click',() =>{
    navlinks.classList.toggle("open");
})
