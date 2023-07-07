// FUNCTION:: Get elements by id
const _ = (elm) => document.getElementById(elm);
// FUNCTION:: Get elements by queryselector
const qs = (elm) => document.querySelector(elm);
// FUNCTION:: Get elements by queryselectorAll
const qsa = (elm) => document.querySelectorAll(elm);

const [navMenu, navToggleIcon, backToTopButton] = [
    qs(".mobile-nav"),
    qs(".toggle-icon"),
    qs(".back-to-top-btn"),
];

// Home Navbar toggle

navToggleIcon.addEventListener("click", () => {
    if (navMenu.style.height) {
        navMenu.style.height = null;
    } else {
        navMenu.style.height = navMenu.scrollHeight + "px";
    }
});

window.addEventListener("scroll", () => {
    backToTopButton.classList.toggle("active", window.scrollY > 500);
});
