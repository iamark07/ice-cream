// header section js fetures

window.onload = () => {
    // GSAP Animations for Header
    gsap.from("header", {
        y: -100,
        duration: 1,
    });

    gsap.from(".animate", {
        opacity: 0,
        y: 100,
        stagger: 0.4,
        duration: 1,
    });

    const images = document.querySelectorAll(".hero_image");
    const titles = [
        "Welcome to Ice Cream Paradise",
        "Cool Down with Our Flavors",
        "Sweeten Your Day",
        "Discover Delicious Treats",
    ];
    const subtitles = [
        "Indulge in our delightful collection of flavors and enjoy the coolest treats of the season!",
        "Explore the rich, creamy, and unique flavors we have in store for you.",
        "Treat yourself to the finest ice creams made with love and care.",
        "Find your favorite scoop and make your day extra sweet!",
    ];
    const buttons = [
        "Shop Now",
        "Explore Flavors",
        "Discover Treats",
        "Browse Collection",
    ];
    const heroTitle = document.getElementById("hero_title");
    const heroSubtitle = document.getElementById("hero_subtitle");
    const heroButton = document.querySelector("#hero_button a");

    let currentIndex = 0;

    function updateHeroSection() {
        // Update images
        images.forEach((img, idx) => {
            img.classList.toggle("opacity-100", idx === currentIndex);
            img.classList.toggle("opacity-0", idx !== currentIndex);
        });

        // Update text content
        heroTitle.textContent = titles[currentIndex];
        heroSubtitle.textContent = subtitles[currentIndex];
        heroButton.textContent = buttons[currentIndex];

        // Trigger GSAP animation for the content
        gsap.from(".animate-2", {
            opacity: 0,
            y: 100,
            stagger: 0.3,
            duration: 1.1,
        });

        // Update index
        currentIndex = (currentIndex + 1) % images.length;
    }

    // Cycle through content every 6 seconds
    setInterval(updateHeroSection, 6000);

    // Run the first update immediately
    updateHeroSection();
};

document.addEventListener("DOMContentLoaded", function () {
    const searchIcons = document.querySelectorAll(".search_icon"); // Dono search icons ko select kar raha hai
    const searchPopup = document.getElementById("search-popup");
    const closeSearch = document.getElementById("close-search");

    // Search icon par click hone par popup dikhana
    searchIcons.forEach((icon) => {
        icon.addEventListener("click", () => {
            searchPopup.classList.remove("opacity-0", "invisible");
            searchPopup.classList.add("opacity-100", "visible");
        });
    });

    // Close button ya kahin bhi click hone par popup hatana
    document.addEventListener("click", (event) => {
        if (
            !searchPopup.querySelector("div").contains(event.target) &&
            !event.target.classList.contains("ri-search-line")
        ) {
            searchPopup.classList.add("opacity-0", "invisible");
            searchPopup.classList.remove("opacity-100", "visible");
        }
    });

    // Close button par click hone par popup band karna
    closeSearch.addEventListener("click", () => {
        searchPopup.classList.add("opacity-0", "invisible");
        searchPopup.classList.remove("opacity-100", "visible");
    });
});

// Mobile Menu Toggle
const menuToggle = document.getElementById("menu-toggle");
const mobileMenu = document.getElementById("mobile-menu");
const menuClose = document.getElementById("menu-close");
const closedMenu = document.getElementById("close-menu");

menuToggle.addEventListener("click", () => {
    mobileMenu.classList.remove("-translate-x-full");
});

menuClose.addEventListener("click", () => {
    mobileMenu.classList.add("-translate-x-full");
});
closedMenu.addEventListener("click", () => {
    mobileMenu.classList.add("-translate-x-full");
});

document.addEventListener("DOMContentLoaded", function () {
    const profileIcon = document.getElementById("profile-icon");
    const header = document.querySelector("header");
    const profileDropdown = document.getElementById("profile-dropdown");
    const languageBtn = document.getElementById("language-btn");
    const languageDropdown = document.getElementById("language-dropdown");
    const currencyBtn = document.getElementById("currency-btn");
    const currencyDropdown = document.getElementById("currency-dropdown");

    // Profile dropdown toggle
    profileIcon.addEventListener("click", function (event) {
        event.stopPropagation();
        profileDropdown.classList.toggle("hidden");
        header.classList.toggle("overflow-hidden");
        profileDropdown.classList.toggle("opacity-0");
        profileDropdown.classList.toggle("scale-95");
    });

    // Language dropdown toggle
    languageBtn.addEventListener("click", function (event) {
        event.stopPropagation();
        languageDropdown.classList.toggle("hidden");
        // languageDropdown.classList.a("opacity-0");
        currencyDropdown.classList.add("hidden"); // Currency dropdown hide
    });

    // Currency dropdown toggle
    currencyBtn.addEventListener("click", function (event) {
        event.stopPropagation();
        currencyDropdown.classList.toggle("hidden");
        // currencyDropdown.classList.toggle("opacity-0");
        languageDropdown.classList.add("hidden"); // Language dropdown hide
    });

    // Hide dropdowns when clicking outside
    document.addEventListener("click", function () {
        profileDropdown.classList.add("hidden");
        languageDropdown.classList.add("hidden");
        header.classList.add("overflow-hidden");
        currencyDropdown.classList.add("hidden");
    });

    // Prevent dropdowns from closing when clicking inside
    profileDropdown.addEventListener("click", function (event) {
        event.stopPropagation();
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const mob_profile_toggle = document.getElementById("mob-profile-toggle");
    const mob_profile_dropdown = document.getElementById(
        "mob-profile-dropdown"
    );
    const mob_language_toggle = document.getElementById("mob-language-toggle");
    const mob_language_dropdown = document.getElementById(
        "mob-language-dropdown"
    );
    const mob_currency_toggle = document.getElementById("mob-currency-toggle");
    const mob_currency_dropdown = document.getElementById(
        "mob-currency-dropdown"
    );

    mob_profile_toggle.addEventListener("click", function () {
        mob_profile_dropdown.classList.toggle("hidden");
        mob_currency_dropdown.classList.add("hidden");
        mob_language_dropdown.classList.add("hidden");
    });
    mob_language_toggle.addEventListener("click", function () {
        mob_profile_dropdown.classList.add("hidden");
        mob_currency_dropdown.classList.add("hidden");
        mob_language_dropdown.classList.toggle("hidden");
    });
    mob_currency_toggle.addEventListener("click", function () {
        mob_profile_dropdown.classList.add("hidden");
        mob_currency_dropdown.classList.toggle("hidden");
        mob_language_dropdown.classList.add("hidden");
    });
});

// GSAP Animation
gsap.from("#brand-story h2", { opacity: 0, y: -50, duration: 1 });
gsap.from("#trending-products h2", {
    opacity: 0,
    y: 50,
    duration: 1,
    delay: 0.5,
});
gsap.from("#special-offers h2", { opacity: 0, x: -50, duration: 1, delay: 1 });

// gallery section

let images = [
    "assets/img/ice-1.png",
    "assets/img/ice-2.png",
    "assets/img/ice-3.png",
    "assets/img/ice-1.png",
    "assets/img/ice-2.png",
    "assets/img/ice-3.png",
];
let currentIndex = 0;

function openGallery(index) {
    currentIndex = index;
    document.getElementById("galleryImage").src = images[currentIndex];
    document.getElementById("galleryModal").classList.remove("hidden");
}

function closeGallery() {
    document.getElementById("galleryModal").classList.add("hidden");
}

function prevImage() {
    currentIndex = currentIndex === 0 ? images.length - 1 : currentIndex - 1;
    document.getElementById("galleryImage").src = images[currentIndex];
}

function nextImage() {
    currentIndex = currentIndex === images.length - 1 ? 0 : currentIndex + 1;
    document.getElementById("galleryImage").src = images[currentIndex];
}

// testimonial section
$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        items: 1, // Show one item at a time
        loop: true, // Loop the carousel
        margin: 10, // Margin between items
        nav: false, // Disable next/prev navigation
        dots: true, // Show dots for navigation
        autoplay: true, // Enable autoplay
        autoplayTimeout: 3000, // Time between auto scroll
        responsiveClass: true, // Enable responsiveness
        touchDrag: true, // Enable dragging with touch
        mouseDrag: true, // Enable dragging with mouse
    });
});

// FAQs Toggle
// document.querySelectorAll(".faq-question").forEach(item => {
//     item.addEventListener("click", () => {
//         let answer = item.nextElementSibling;
//         answer.classList.toggle("hidden");
//     });
// });

// Contact Form Submission
document
    .getElementById("contact-form")
    .addEventListener("submit", function (event) {
        event.preventDefault();
        alert(
            "Your message has been sent successfully! We will contact you soon."
        );
        this.reset();
    });

// Chatbot Button Click
// document.getElementById("chatbot-btn").addEventListener("click", function() {
//     alert("Live Chat Support is coming soon!");
// });

// Scroll to Top Button
const scrollToTopBtn = document.getElementById("scrollToTop");
window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
        scrollToTopBtn.classList.remove("opacity-0");
        scrollToTopBtn.classList.remove("pointer-events-none");
    } else {
        scrollToTopBtn.classList.add("opacity-0");
        scrollToTopBtn.classList.add("pointer-events-none");
    }
});
scrollToTopBtn.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
});



// product categories
document.getElementById("filter-toggle").addEventListener("click", function() {
    document.getElementById("filter-dropdown").classList.toggle("hidden");
});

document.querySelectorAll(".filter-btn").forEach(button => {
    button.addEventListener("click", () => {
        document.getElementById("filter-dropdown").classList.add("hidden");
        alert("Filtering feature will be implemented soon!");
    });
});

document.querySelectorAll(".pagination-btn").forEach(button => {
    button.addEventListener("click", () => {
        alert("Pagination feature will be implemented soon!");
    });
});
