const hamburgerIcon = document.querySelector('.hamburger-menu-icon');
const navMenu = document.querySelector('.main-navigation nav');

let menuCounter = 0;

hamburgerIcon.addEventListener('click', () => {
    menuCounter++;

    if (menuCounter % 2 == 0) {
        navMenu.style.display = 'none';
    } else {
        navMenu.style.display = 'flex';
    }
});