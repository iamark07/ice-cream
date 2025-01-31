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

}


// header search feature
document.addEventListener("DOMContentLoaded", function () {
    const searchIcons = document.querySelectorAll(".search_icon");
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


// profile and menubar features 

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
        profileDropdown.classList.add("opacity-0");
        profileDropdown.classList.add("scale-95");
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