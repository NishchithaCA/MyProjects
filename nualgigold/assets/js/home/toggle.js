const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.menu');
    let navLinks = document.querySelector('.menu li');

    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');

        // Burger animation
        burger.classList.toggle('toggle');
    });
}

navSlide();