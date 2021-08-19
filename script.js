const hamburger = document.querySelector('.hamburger');
const navlinks = document.querySelector('.links ul');
const links = document.querySelectorAll('.links li');

hamburger.addEventListener('click',() =>{
    navlinks.classList.toggle("open");
})
