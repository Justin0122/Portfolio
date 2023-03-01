//only run this if the carousel exists
if (document.getElementById("carousel")) {
function autoplayCarousel() {
    const carouselEl = document.getElementById("carousel");
    const slideContainerEl = carouselEl.querySelector("#slide-container");
    const slideEl = carouselEl.querySelector(".slide");

    let slideWidth = slideEl.offsetWidth + 20;

    document.querySelectorAll(".slide-indicator")
        .forEach((dot, index) => {
            dot.addEventListener("click", () => navigate(index));
            dot.addEventListener("mouseenter", () => clearInterval(autoplay));
        });

    carouselEl.addEventListener("mouseenter", () => clearInterval(autoplay));
    carouselEl.addEventListener("mouseleave", () => autoplay = setInterval(() => navigate("forward"), 10000));

    window.addEventListener('resize', () => {
        slideWidth = slideEl.offsetWidth;
    });

    // Autoplay
    let autoplay = setInterval(() => navigate("forward"), 10000);

    const navigate = (arg) => {
        slideContainerEl.scrollLeft = getNewScrollPosition(arg);
    }

    const getNewScrollPosition = (arg) => {
        if (arg === "forward") {
            return slideContainerEl.scrollLeft + slideWidth;
        } else if (arg === "backward") {
            return slideContainerEl.scrollLeft - slideWidth;
        } else {
            return arg * slideWidth;
        }
    }

    const scrollSpeed = 50;
    const scrollInterval = 10;
    let scrollTimeout;
    let scrollLeft = false;
    let scrollRight = false;
    const scroll = () => {
        if (scrollLeft) {
            slideContainerEl.scrollLeft -= scrollSpeed;
        } else if (scrollRight) {
            slideContainerEl.scrollLeft += scrollSpeed;
        }
        scrollTimeout = setTimeout(scroll, scrollInterval);
    }
    carouselEl.addEventListener('mousemove', (e) => {
        const rect = carouselEl.getBoundingClientRect();
        const mousePos = e.clientX - rect.left;
        if (mousePos < 100) {
            scrollLeft = true;
            scrollRight = false;
            clearTimeout(scrollTimeout);
            scroll();
        } else if (mousePos > rect.width - 100) {
            scrollLeft = false;
            scrollRight = true;
            clearTimeout(scrollTimeout);
            scroll();
        } else {
            scrollLeft = false;
            scrollRight = false;
            clearTimeout(scrollTimeout);
        }

        carouselEl.addEventListener('mouseleave', () => {
            scrollLeft = false;
            scrollRight = false;
            clearTimeout(scrollTimeout);
        });
    });

    carouselEl.addEventListener('wheel', (e) => {
        e.preventDefault();
        if (e.deltaY < 0) {
            navigate("backward");
        } else {
            navigate("forward");
        }
    }
    );
}
autoplayCarousel();

}
