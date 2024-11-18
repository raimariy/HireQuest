// Swiper configuration
var swiper = new Swiper(".swiper", {
  cssMode: true,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  keyboard: true,
});

// Toggle navigation menu for smaller screens
const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector("nav");

if (hamburger && nav) {
  hamburger.addEventListener("click", () => nav.classList.toggle("active"));
}

document.getElementById('user').addEventListener('click', function () {
  document.getElementById('menu-lateral').classList.toggle('sidebar_content');
});
