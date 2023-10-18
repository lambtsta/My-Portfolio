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
    delay: 100
});
ScrollReveal().reveal('.home-content, .about-img' , { origin: 'left' });
ScrollReveal().reveal('.home-img, .portfolio-box-img' , { origin: 'right' });
ScrollReveal().reveal('.heading', { origin: 'top' });
ScrollReveal().reveal('.about-content, .services-container, .portfolio-container, .contact form, .educ-bg-box', { origin: 'bottom' });
/*type js*/

const type = new Typed('.multiple-entry',{
    strings: ['Web Developer'],
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
/** */
document.addEventListener("DOMContentLoaded", function () {
    const loader = document.querySelector(".loader");

    // Initialize Typed.js for the typing animation
    const type = new Typed('#typing', {
        strings: ['lamb.'],
        typeSpeed: 100,
        backSpeed: 100,
        backDelay: 1000,
        onComplete: function () {
            // Hide the loader when typing animation is complete
            setTimeout(() => {
                loader.classList.add("hidden");
            }, 1000); // Adjust the delay as needed
        },
    });

    // Blinking cursor animation
    const cursor = document.querySelector('#cursor');
    setInterval(() => {
        cursor.style.visibility = (cursor.style.visibility === 'hidden') ? 'visible' : 'hidden';
    }, 1000); // Adjust the blinking speed (500ms = 0.5s)
});
// hidding header 


// Hide Header on on scroll down
// JavaScript
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

    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta) return;

    if (st > lastScrollTop && st > navbarHeight) {
        // Scroll Down
        if (!$('header').hasClass('header-up')) {
            $('header').addClass('header-up');
        }
    } else {
        // Scroll Up
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

    emailjs.send("service_emta0im", "template_4v2j5rx", {
        full_name: this.full_name.value,
        email: this.email.value,
        contact_number: this.contact_number.value,
        email_subject: this.email_subject.value,
        message: this.message.value,
    }).then(
        function (response) {
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





