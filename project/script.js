var icon = document.getElementById("icon");
icon.onclick = function () {
  document.body.classList.toggle("dark-theme");
  if (document.body.classList.contains("dark-theme")) {
    icon.src = "images/sun.png";
    logo.src = "images/logo2.png";
  } else {
    icon.src = "images/moon.png";
    logo.src = "images/logo1.png";
  }
}





let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
};
window.onscroll = () => {
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".reviews-slider", {
  loop: true,
  spaceBetween: 20,
  autoHeight: true,
  grabCursor: true,
  breakpoint: {

    1024: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 2,
    },
    640: {
      slidesPerView: 1,
    },

  },
});






let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () => {
  let boxes = [...document.querySelectorAll('.packages .box-container .box')];
  for (var i = currentItem; i < currentItem + 3; i++) {
    boxes[i].style.display = 'inline-block';
  };
  currentItem += 3;
  if (currentItem >= boxes.length) {
    loadMoreBtn.style.display = 'none';
  }
}
//booking date
var date = new Date();
var tdate = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();
if (tdate < 10) {

  tdate = '0' + tdate;
}
if (month < 10) {

  month = '0' + month;
}
var mindate = year + "-" + month + "-" + tdate;
document.getElementById("demo").setAttribute('min', mindate)
console.log(mindate);
