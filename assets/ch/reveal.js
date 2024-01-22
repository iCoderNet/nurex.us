const sr = ScrollReveal({
    origin: "bottom",
    distance: "50px",
    duration: 800,
    delay: 400,
    reset: false
});
sr.reveal(`.bottom_animate`, {
    interval: 300,
});

const sr2 = ScrollReveal({
    origin: "left",
    distance: "100px",
    duration: 1000,
    delay: 0,
    reset: false
});
sr2.reveal(`.left_animate`, {
    interval: 200,
});

const sr3 = ScrollReveal({
    origin: "right",
    distance: "100px",
    duration: 1000,
    delay: 0,
    reset: false
});
sr2.reveal(`.right_animate`, {
    interval: 200,
});