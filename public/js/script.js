// MENU TOGGLE BURGER
$(document).ready(function () {
  $('.header__burger').click(function (event) {
      $('.header__burger,.header__menu_adap').toggleClass('active2');
      $('body').toggleClass('lock');
  });
});
$(document).ready(function () {
  $('.ic-menu-close').click(function (event) {
      $('.header__burger,.header__menu_adap').removeClass('active2');
      $('body').removeClass('lock');
  });
});

// LANGUAGE DROPDOWN
function langDropdownFunc() {
  document.getElementById("lang-dropdown").classList.toggle("header__lang-dropdown-show");
}

window.onclick = function(e) {
  if (!e.target.matches(".header__lang-btn")) {
    var dropdowns = document.getElementsByClassName("header__lang-dropdown-content");
    var i;
    for(i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if(openDropdown.classList.contains("header__lang-dropdown-show")) {
        openDropdown.classList.remove("header__lang-dropdown-show");
      }
      else if (openDropdown.classList.body) {
        openDropdown.classList.remove("header__lang-dropdown-show");
      }
    }
  }
}


var mainSwiper = new Swiper(".mainSwiper", {
  navigation: {
    nextEl: ".swiper-button-next-1",
    prevEl: ".swiper-button-prev-1",
  },
  pagination: {
    el: ".swiper-pagination-1",
    clickable: true,
  },
  loop: 1,
  spaceBetween: 30,
  centeredSlides: true,
  // autoplay: {
  //   delay: 2500,
  //   disableOnInteraction: false,
  // },
});


var newsSwiper = new Swiper(".newsSwiper", {
  navigation: {
    nextEl: ".swiper-button-next-2",
    prevEl: ".swiper-button-prev-2",
  },
  pagination: {
    el: ".swiper-pagination-2",
    clickable: true,
  },
  loop: 1,
  spaceBetween: 60,
  centeredSlides: true,
  // autoplay: {
  //   delay: 2500,
  //   disableOnInteraction: false,
  // },
  breakpoints: {
    1200: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 2,
    },
    0: {
      slidesPerView: 1,
    },
  },
});

var modal1 = document.getElementById("main__myModal");
var btn1 = document.getElementById("main__button");
var span1 = document.getElementsByClassName("main__modal_close")[0];

btn1.onclick = function() {
  modal1.style.display = "block";
}
span1.onclick = function() {
  modal1.style.display = "none";
}
window.onclick = function(event1) {
  if (event1.target == modal1) {
    modal1.style.display = "none";
  }
}


var phoneMask = IMask(
  document.getElementById('main__modal_phone'), {
    mask: '+{7}(000)000-00-00',
  });
  document.getElementById("main__modal_form").addEventListener('submit', function(e) {
  e.preventDefault()
  let phone =  document.getElementById('main__modal_phone')
  if(phone.value.length < 16){
    phone.style.border = '1px solid red';
    return
  }
  this.submit()
})
