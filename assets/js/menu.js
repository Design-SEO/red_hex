document.addEventListener("DOMContentLoaded", () => {
    const menuBtn = document.querySelector('#hamburger-menu-button');
    const closeMenuBtn = document.querySelector('#closeBtn');
    const menuContainer = document.querySelector('#mobileMenu');

    menuBtn.addEventListener('click', () => {
       // const menuOpen = menuContainer.classList.contains('is-active');
        menuContainer.classList.toggle('is-active');
    });
    closeMenuBtn.addEventListener('click', () => {
       // const menuOpen = menuContainer.classList.contains('is-active');
        menuContainer.classList.toggle('is-active');
    })
});