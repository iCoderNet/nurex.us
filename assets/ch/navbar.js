let navbarContainer = document.querySelector(".navbar_container");
let header = document.querySelector(".header");

window.addEventListener('scroll', changeNavbar);
function changeNavbar() {
    if (window.scrollY > 0) {
        navbarContainer.classList.add('sticky_navbar');
        if (header) {
            header.classList.add('sticky_header');
        }
    } else {
        navbarContainer.classList.remove('sticky_navbar');
        if (header) {
            header.classList.remove('sticky_header');
        }
    }
}

let navMenu = document.querySelector(".nav_menu");
let menuBtn = document.querySelector(".menu_btn");
let blackLogo = document.querySelector(".sticky_navbar .logo .black_logo");
let whiteLogo = document.querySelector(".sticky_navbar .logo .white_logo");
let navBack = document.querySelector(".nav_back");
menuBtn.addEventListener("click", showHideMenu);
navBack.addEventListener("click", showHideMenu);
function showHideMenu() {
    navMenu.classList.toggle("active_menu");
    navBack.classList.toggle("active_back");
    // if (navMenu.classList.contains("active_menu")) {
    //     blackLogo.style.display = "none";
    //     whiteLogo.style.display = "inline";
    // } else {
    //     blackLogo.style.display = "inline";
    //     whiteLogo.style.display = "none";
    // }
}
let links = document.querySelectorAll(".nav_menu li a");
links.forEach((link) => {
    if (link.href.includes(window.location.pathname)) {
        link.classList.add("active");
    } else {
        link.classList.remove("active");
    }
});
let collapses = document.querySelectorAll('.collapse');
collapses.forEach((collapse) => {
    collapse.addEventListener("show.bs.collapse", () => controlCollapse(collapse))
});
function controlCollapse(currentCollapse) {
    collapses.forEach((collapse) => {
        if (collapse == currentCollapse) {
            collapse.classList.add("show");
            collapse.classList.remove("hide");
        } else {

            collapse.classList.add("hide");
            collapse.classList.remove("show");
        }
    });
}