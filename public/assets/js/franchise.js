// Mobile Sidebar Toggle
let mobile_profile_menu = document.getElementById('mobile_profile_menu');
let close_profile_menu_btn = document.getElementById('close_profile_menu_btn');
document.getElementById('menuToggle').addEventListener('click', function () {
    mobile_profile_menu.classList.toggle("!left-0");
});

close_profile_menu_btn.addEventListener('click', function () {
    mobile_profile_menu.classList.toggle("!left-0");
});