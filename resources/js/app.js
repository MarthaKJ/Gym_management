import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// FUNCTION:: Get elements by id
const _ = (elm) => document.getElementById(elm);
// FUNCTION:: Get elements by queryselector
const qs = (elm) => document.querySelector(elm);
// FUNCTION:: Get elements by queryselectorAll
const qsa = (elm) => document.querySelectorAll(elm);

const [
    rootElm,
    toggleIcon,
    loader,
    sidebarModal,
    sidebarDialog,
    closeIcon,
    openIcon,
    dropDownLinks,
    subMenus,
] = [
    qs(":root"),
    qs(".toggle-icon"),
    _("loader"),
    qs(".modal"),
    qs(".dialog"),
    qs(".close-icon"),
    qs(".open-icon"),
    qsa(".dropdown-link a"),
    qsa(".sub-menu"),
];

let mode = "light";
document.addEventListener("DOMContentLoaded", () => {
    mode =
        JSON.parse(localStorage.getItem("laragym-mode")) ||
        localStorage.setItem("laragym-mode", JSON.stringify(mode));
    rootElm.classList.add(mode);
    if (mode === "light") {
        toggleIcon.innerHTML = ' <i class="feather-moon"></i>';
    } else {
        toggleIcon.innerHTML = ' <i class="feather-sun"></i>';
    }
});

toggleIcon.addEventListener("click", () => {
    let mode = JSON.parse(localStorage.getItem("laragym-mode"));
    if (mode === "light") {
        localStorage.setItem("laragym-mode", JSON.stringify("dark"));
        rootElm.classList.add("dark");
        toggleIcon.innerHTML = ' <i class="feather-sun"></i>';
    } else {
        localStorage.setItem("laragym-mode", JSON.stringify("light"));
        rootElm.classList.remove("dark");
        toggleIcon.innerHTML = ' <i class="feather-moon"></i>';
    }
});

// Loader when page is loading
window.addEventListener("load", () => {
    loader.style.display = "none";
});

// Sidebar

openIcon.addEventListener("click", () => {
    sidebarModal.classList.add("open");
    sidebarDialog.classList.add("open");
});

closeIcon.addEventListener("click", () => {
    sidebarModal.classList.remove("open");
    sidebarDialog.classList.remove("open");
});

sidebarModal.addEventListener("click", (e) => {
    if (e.target.classList.contains("modal")) {
        sidebarModal.classList.remove("open");
        sidebarDialog.classList.remove("open");
    }
});

// Sidebar dropdown

function removeSubMenuHeight() {
    subMenus.forEach((menu) => {
        menu.style.height = null;
    });
}

dropDownLinks.forEach((link) => {
    let subMenu = link.nextElementSibling;
    link.addEventListener("click", () => {
        if (subMenu.style.height) {
            subMenu.style.height = null;
        } else {
            removeSubMenuHeight();
            subMenu.style.height = subMenu.scrollHeight + "px";
        }
    });
});

// Initialising the dataTables
$(document).ready(function () {
    $("#my-table").DataTable({
        language: {
            searchPlaceholder: "Search...",
        },
    });
});
