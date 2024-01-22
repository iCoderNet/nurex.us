$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    autoplay: true,
    navText: [
        `<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M36 36C29.3726 42.6274 18.6274 42.6274 12 36C5.37258 29.3726 5.37258 18.6274 12 12C18.6274 5.37258 29.3726 5.37258 36 12"
                stroke="white" stroke-opacity="0.3" stroke-width="3" stroke-linecap="round" />
            <path
                d="M40.9719 24.0014H16.9707M16.9707 24.0014L25.1651 16.001M16.9707 24.0014L25.1651 32.0018"
                stroke="white" stroke-opacity="0.3" stroke-width="3" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>`
        ,
        `<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M12 36C18.6274 42.6274 29.3726 42.6274 36 36C42.6274 29.3726 42.6274 18.6274 36 12C29.3726 5.37258 18.6274 5.37258 12 12"
                stroke="white" stroke-opacity="0.3" stroke-width="3" stroke-linecap="round" />
            <path
                d="M7.02807 24.0014H31.0293M31.0293 24.0014L22.8349 16.001M31.0293 24.0014L22.8349 32.0018"
                stroke="white" stroke-opacity="0.3" stroke-width="3" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>`
    ],
    responsive: {
        0: {
            items: 1
        },
        780: {
            items: 2
        },
        1000: {
            items: 3
        },
        1240: {
            items: 4
        }
    }
});