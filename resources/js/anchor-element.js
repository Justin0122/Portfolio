
const anchorElements = document.querySelectorAll('a[href^="#"]');
anchorElements.forEach(anchorElement => {
    anchorElement.addEventListener('click', function (e) {
        e.preventDefault();
        const hash = this.getAttribute('href');
        const target = document.querySelector(hash);
        target.classList.add('active-element');
        target.scrollIntoView({
            behavior: 'smooth'
        });
        setTimeout(function () {
            target.classList.remove('active-element');
        }
            , 2400);
    });
});
