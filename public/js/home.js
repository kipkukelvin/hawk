document.addEventListener("DOMContentLoaded", function () {
    const phoneInput = document.querySelector("#phone");

    if (phoneInput) {
        const iti = window.intlTelInput(phoneInput, {
            initialCountry: "auto",
            geoIpLookup: function (callback) {
                fetch("https://ipapi.co/json")
                    .then(res => res.json())
                    .then(data => callback(data.country_code))
                    .catch(() => callback("us"));
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js",
        });

        // Replace phone value with the full international number on submit
        phoneInput.form.addEventListener("submit", function () {
            phoneInput.value = iti.getNumber();
        });
    }
});
  const marquee = document.getElementById('intakeMarquee');

    marquee.onmouseover = function() {
        marquee.stop();
    };

    marquee.onmouseout = function() {
        marquee.start();
    };
document.querySelectorAll('.nav-item.dropdown').forEach((item) => {
  item.addEventListener('mouseenter', () => {
    const dropdownMenu = item.querySelector('.dropdown-menu');
    new bootstrap.Dropdown(item.querySelector('[data-bs-toggle="dropdown"]')).show();
  });
  item.addEventListener('mouseleave', () => {
    const dropdownMenu = item.querySelector('.dropdown-menu');
    new bootstrap.Dropdown(item.querySelector('[data-bs-toggle="dropdown"]')).hide();
  });
});
let lastScrollTop = 0;
const navbar = document.getElementById("mainNavbar");

window.addEventListener("scroll", function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        // SCROLLING DOWN → HIDE NAVBAR
        navbar.style.top = "-90px"; 
    } else {
        // SCROLLING UP → SHOW NAVBAR under marquee
        navbar.style.top = "8px"; 
    }

    lastScrollTop = scrollTop;
});
