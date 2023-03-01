    // Get the button
    let mybutton = document.getElementById("scrollToTop");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
} else {
    mybutton.style.display = "none";
}

        const threshold = 2200;
        const scrollTop = document.body.scrollTop || document.documentElement.scrollTop || window.scrollY;
        const scrolledDown = scrollTop > threshold;
        const scrolledUp = scrollTop === 0;

        if (scrolledDown || scrolledUp) {
            document.querySelector('.projects').style.display = 'none';
        }
}
