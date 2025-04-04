//Swiper script
var swiper = new Swiper('.swiper', {
    direction: 'vertical',
    loop: true,
    autoplay: {
        delay: 2000, // Adjust speed (2 seconds)
        disableOnInteraction: false
    },
    speed: 1000, // Adjust transition speed
});

//custom sircle rotaion
gsap.to(".img-rotate", { 
    rotation: 360, 
    duration: 10, 
    repeat: -1, // Infinite loop
    ease: "linear",
});

//Header background change on scroll
    gsap.to(".header", {
        scrollTrigger: {
            trigger: ".header",
            start: "top top",
            end: "bottom top",
            scrub: true,
        },
        backgroundColor: "#FFFFFF",
        duration: 1
    });

    gsap.to(".header-row ul li a, .header-logo", {
        scrollTrigger: {
            trigger: ".header",
            start: "top top",
            end: "bottom top",
            scrub: true,
        },
        color: "#121212",
        duration: 0.5
    });

