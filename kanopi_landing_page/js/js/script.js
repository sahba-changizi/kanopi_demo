const menuToggle = document.querySelector('.menu-toggle');
const navigationMenu = document.querySelector('.navigation-menu');

menuToggle.addEventListener('click', () => {
    navigationMenu.classList.toggle('active');
});
