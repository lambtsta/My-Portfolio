/* */
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};
/* */
document.addEventListener("DOMContentLoaded", function () {
    let sections = document.querySelectorAll('section');
    let navLinks = document.querySelectorAll('header nav a');

    window.onscroll = () => {
        sections.forEach(sec => {
            let top = window.scrollY;
            let offset = sec.offsetTop - 150;
            let height = sec.offsetHeight;
            let id = sec.getAttribute('id');

            if (top >= offset && top < offset + height) {
                navLinks.forEach(links => {
                    links.classList.remove('active');
                });
                document.querySelector('header nav a[href="#' + id + '"]').classList.add('active');
            }
        });
        let header = document.querySelector('header');
        header.classList.toggle('sticky', window.scrollY > 100);
    };
});

/*Scroll animation*/
ScrollReveal({
    distance: '80px',
    duration: 1800,
    delay: 100
});
ScrollReveal().reveal('.home-content, .about-img' , { origin: 'left' });
ScrollReveal().reveal('.home-img' , { origin: 'right' });
ScrollReveal().reveal('.heading', { origin: 'top' });
ScrollReveal().reveal('.about-content, .services-container, .portfolio-container, .contact form', { origin: 'bottom' });
/*type js*/

const type = new Typed('.multiple-entry',{
    strings: ['Web Developer', 'Data Analyst'],
    typeSpeed:100,
    backspeed: 100,
    backDelay: 1000,
    loop: true
});

document.addEventListener("DOMContentLoaded", function () {
    const downloadButton = document.getElementById("download-cv");

    downloadButton.addEventListener("click", function (e) {
        e.preventDefault(); // Prevent the default link behavior

        Swal.fire({
            title: "Download CV",
            text: "Do you want to download my CV?",
            icon: "question",
            showCancelButton: true,
            confirmButtonText: "Yes, download it!",
            cancelButtonText: "No, cancel",
        }).then((result) => {
            if (result.isConfirmed) {
                const cvUrl = downloadButton.getAttribute("data-cv");
                window.open(cvUrl, "_blank"); // Open the URL in a new window
            }
        });
    });
});
















