document.addEventListener("DOMContentLoaded", () => {
    const accordionBtns = document.querySelectorAll('.accordion-button');

    accordionBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            btn.classList.toggle('collapsed');
            const accordionItem = btn.parentElement.parentElement.querySelector(".accordion-collapse.collapse");
            accordionItem.classList.toggle('show');
        })
    })
});