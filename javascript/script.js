/* */
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};

/*Scroll animation*/
ScrollReveal({
    distance: '80px',
    duration: 1800,
    delay: 100,
    reset: true
});
ScrollReveal().reveal('.home-content, .about-img, .portfolio-box-content' , { origin: 'left' });
ScrollReveal().reveal('.home-img, .portfolio-box-img, .contact-paragraph' , { origin: 'right' });
ScrollReveal().reveal('.heading', { origin: 'top' });
ScrollReveal().reveal('.about-content, .services-container, .portfolio-container, .contact form, .educ-bg-box', { origin: 'bottom' });

/*type js*/
const type = new Typed('.multiple-entry',{
    strings: ['Web Developer','Data Analyst'],
    typeSpeed:100,
    backspeed: 100,
    backDelay: 1000,
    loop: true
});
// dowload cv 
document.addEventListener("DOMContentLoaded", function () {
    const downloadButton = document.getElementById("download-cv");

    downloadButton.addEventListener("click", function (e) {
        e.preventDefault();

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
                window.open(cvUrl, "_blank"); 
            }
        });
    });
});
/**Loader */
document.addEventListener("DOMContentLoaded", function () {
    const loader = document.querySelector(".loader");
    const type = new Typed('#typing', {
        strings: ['lamb.'],
        typeSpeed: 100,
        backSpeed: 100,
        backDelay: 1000,
        onComplete: function () {
           
            setTimeout(() => {
                loader.classList.add("hidden");
            }, 1000); 
        },
    });
    const cursor = document.querySelector('#cursor');
    setInterval(() => {
        cursor.style.visibility = (cursor.style.visibility === 'hidden') ? 'visible' : 'hidden';
    }, 1000); 
});


// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function (event) {
    didScroll = true;
});

setInterval(function () {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();

    if (Math.abs(lastScrollTop - st) <= delta) return;
    if (st > lastScrollTop && st > navbarHeight) {

        if (!$('header').hasClass('header-up')) {
            $('header').addClass('header-up');
        }
    } else {

        if (st + $(window).height() < $(document).height()) {
            if ($('header').hasClass('header-up')) {
                $('header').removeClass('header-up');
            }
        }
    }

    lastScrollTop = st;
}

// email.js
emailjs.init("P7fMsM4H3PXWtaC0q");
document.getElementById("contact-form").addEventListener("submit", function (event) {
    event.preventDefault();
    console.log("Form submitted");
    const data = {
        full_name: this.full_name.value,
        email: this.email.value,
        contact_number: this.contact_number.value,
        email_subject: this.email_subject.value,
        message: this.message.value,
    };

    emailjs.send("service_emta0im", "template_4v2j5rx", data).then(
        function (response) {
            console.log("Email sent successfully", response);
            document.getElementById("contact-form").reset();
            Swal.fire({
                icon: 'success',
                title: 'Message Sent!',
                text: 'Your message has been sent successfully.',
            });
        },
        function (error) {
            console.log("Email could not be sent due to an error:", error);
        }
    );
});





