// scroll event
let header = document.querySelector('header');

window.addEventListener('scroll', () => {
    header.classList.toggle('shadow', window.scrollY > 0)
})
// -------------

// Navbar responsive
let navbar = document.querySelector('.navbar');

document.querySelector('#menu-icon').onclick = () => {
    navbar.classList.toggle('active');
}
// -------------

// Remove Navbar with scroll
window.onscroll = () => {
    navbar.classList.remove('active');
}

