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

