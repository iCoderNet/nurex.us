
let slides = document.querySelectorAll('.carousel-item');
let slideBtns = document.querySelectorAll('.slide_btn');
let prevBtn = document.querySelector("#prev");
let nextBtn = document.querySelector("#next");
let headerCarousel = document.querySelector('#headerCarousel');
let carousel = new bootstrap.Carousel(headerCarousel, {
    interval: 5000,
});
let activeIndex = 0;
slideBtns.forEach((btn, i) => {
    btn.addEventListener("click", () => currentSlide(i))
})
function changeSlide(isNext) {
    if (activeIndex > slides.length - 1) {
        activeIndex = 0;
    } else if (activeIndex < 0) {
        activeIndex = slides.length - 1;
    }
    slideBtns.forEach((btn, index) => {
        if (index == activeIndex) {
            btn.classList.add('active');
        } else {
            btn.classList.remove('active');
        }
    });

}
function currentSlide(ind) {
    activeIndex = ind;
    resetInterval();
    slideBtns.forEach((btn, index) => {
        if (ind == index) {
            btn.classList.add('active');
        } else {
            btn.classList.remove('active');
        }
    });
}
nextBtn.addEventListener('click', function change() {
    activeIndex++;
    resetInterval();
    changeSlide(true);
});
prevBtn.addEventListener("click", function change() {
    activeIndex--;
    resetInterval();
    changeSlide(false);
});
let interval = setInterval(runSlide, 5000);
function runSlide() {
    activeIndex++;
    changeSlide(true);
}
function resetInterval() {
    clearInterval(interval);
    interval = setInterval(runSlide, 5000)
}
// let headerCarousel = document.querySelector('#headerCarousel');
// let carousel = new bootstrap.Carousel(headerCarousel, {
//     interval: 5000,
// });
// headerCarousel.addEventListener('slid.bs.carousel', function (param) {
//     console.log(param);
// })
let modalForm = document.getElementById("modal_form");
let modalEmailInput = document.getElementById("modal_email");
let emailModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
let isShow = localStorage.getItem("isShow") == "hide" ? false : true;
setTimeout(() => {
    if (isShow) {
        emailModal.show();
        document.querySelector("html").style.overflowX = "visible";
    }
}, 20000);

let finalModal = new bootstrap.Modal(document.getElementById('finalModal1'));

modalForm.addEventListener("submit", openFinalModal);

function openFinalModal(e) {
    e.preventDefault();
    if (modalEmailInput.value) {
        emailModal.hide();
        document.querySelector("html").style.overflowX = "hidden";
        finalModal.show();
        localStorage.setItem('isShow', "hide");
    }
}
