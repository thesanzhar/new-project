<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <script defer src="https://unpkg.com/alpinejs@3.8.1/dist/cdn.min.js"></script>
  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="build/tailwind.css">
  <link rel="stylesheet" href="css/modal-video.min.css">
  <!-- Title -->
  <title>Басты бет - MOOC</title>

  <style>
    body {
      margin: 0;
    }
  </style>
</head>

<body>

  <header class="header">
    <div class="container mx-auto flex items-center justify-between py-5">
      <a href="/" class="header__logo">
        <img src="img/icons/logo.svg" alt="" class="img-logo">
      </a>
      <div class="header__menu">
        <ul class="header__menu-list flex ">
          <li class="header__menu-item lg:ml-4">
            <a href="#electives" class="">Курстар</a>
          </li>
          <li class="header__menu-item lg:ml-4">
            <a href="#features" class="">MOOC құрылымы</a>
          </li>
          <li class="header__menu-item lg:ml-4">
            <a href="#news" class="">Жаңалықтар</a>
          </li>
          <li class="header__menu-item">
            <a href="#about" class="">Жоба туралы</a>
          </li>
          <li class="header__menu-item lg:ml-4">
            <a href="#" class="">Байланыс</a>
          </li>
        </ul>
      </div>
      <div class="header__menu_adap">
        <!-- <div class="header__lang_adap flex">
          <div class="header__lang-dropdown container mx-auto">
            <button class="header__lang-btn" onclick="langDropdownFunc()">
              <p>Русский</p>
              <img src="img/icons/ic-dropdown-arrow.svg" alt="" class="ic-dropdown-arrow-white">
            </button>
            <div class="header__lang-dropdown-content" id="lang-dropdown">
              <a href="#">Қазақша</a>
              <a href="#">Русский</a>
            </div>
            <img src="img/icons/ic-menu-close.svg" alt="" class="ic-menu-close">
          </div>
        </div> -->
        <ul class="header__menu-list container mx-auto flex flex-col my-8">
          <li class="header__menu-item mb-3">
            <a href="#electives" class="">Курстар</a>
          </li>
          <li class="header__menu-item mb-3">
            <a href="#features" class="">MOOC құрылымы</a>
          </li>
          <li class="header__menu-item mb-3">
            <a href="#news" class="">Жаңалықтар</a>
          </li>
          <li class="header__menu-item mb-3">
            <a href="#about" class="">Жоба туралы</a>
          </li>
          <li class="header__menu-item">
            <a href="#" class="">Байланыс</a>
          </li>
        </ul>
        <div class="header__social_adap container mx-auto flex">
          <a href="" class="header__social-fb mr-3">
            <img src="img/icons/ic-social-fb.svg" alt="">
          </a>
          <a href="" class="header__social-ig mr-3">
            <img src="img/icons/ic-social-ig.svg" alt="">
          </a>
          <a href="" class="header__social-wa mr-3">
            <img src="img/icons/ic-social-wa.svg" alt="">
          </a>
          <a href="" class="header__social-tg mr-3">
            <img src="img/icons/ic-social-tg.svg" alt="">
          </a>
          <a href="" class="header__social-tw">
            <img src="img/icons/ic-social-tw.svg" alt="">
          </a>
        </div>
      </div>
      <!-- <div class="header__lang hidden lg:flex">
        <a href="#" class="header__lang-item active1">RU</a>
        <a href="#" class="header__lang-item">KZ</a>
      </div> -->
      <div class="header__burger">
        <span></span>
      </div>
    </div>
  </header>

  {{ $slot }}

  <footer class="footer">
    <div class="footer__up">
      <div class="container mx-auto flex flex-col lg:flex-row items-center text-center lg:text-left lg:items-start justify-between">
        <a href="/" class="footer__logo mb-5 lg:mb-0">
          <img src="img/icons/logo.svg" alt="" class="img-logo-dark mx-auto lg:mx-0 mb-5">
          <!-- <p class="footer__logo-slogan">Школа доступного <br>высокотехнологического <br>образования</p> -->
        </a>
        <div class="footer__grid grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-4 xl:gap-7">
          <div class="footer__items">
            <h3 class="footer__item-title mb-4 lg:mb-5">Жоба туралы</h3>
            <ul class="footer__item-list">
              <li class="mb-2"><a href="#features">MOOC құрылымы</a></li>
              <li class="mb-2"><a href="#electives">Курстар</a></li>
              <li class="mb-2"><a href="#news">Жаңалықтар</a></li>
              <li class=""><a href="#">Байланыс</a></li>
            </ul>
          </div>
          <div class="footer__items">
            <h3 class="footer__item-title mb-4 lg:mb-5">Контакты</h3>
            <ul class="footer__item-list">
              <li class="mb-2">әл-Фараби к-сі 71</li>
              <li class="mb-2"><a href="tel:+77782130006">+7 (778) 213 0006</a></li>
              <li class=""><a href="mailto:sanzharzhubatkan@gmail.com">sanzharzhubatkan@gmail.com</a></li>
            </ul>
          </div>
          <div class="footer__items">
            <h3 class="footer__item-title mb-4 lg:mb-5">Әлеуметтік желіде</h3>
            <!-- <ul class="footer__item-list">
              <li class="mb-2">Пн-Пт: с 09:00 до 18:00</li>
              <li class="mb-2">Сб-Вс: Выходной</li>
            </ul> -->
            <div class="footer__social flex items-center justify-center lg:justify-start lg:justify-left">
              <a href="" class="footer__social-item mr-3"><img src="img/icons/ic-social-fb.svg" alt=""></a>
              <a href="" class="footer__social-item mr-3"><img src="img/icons/ic-social-ig.svg" alt=""></a>
              <a href="" class="footer__social-item mr-3"><img src="img/icons/ic-social-wa.svg" alt=""></a>
              <a href="" class="footer__social-item mr-3"><img src="img/icons/ic-social-tg.svg" alt=""></a>
              <a href="" class="footer__social-item"><img src="img/icons/ic-social-tw.svg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__down">
      <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between">
        <p class="footer__copyright">MOOC © 2021</p>
        <div class="footer__logo flex items-center">Сайт жасаушы<a href="#" class="ml-2 pt-1"><img src="img/icons/logo-developer.svg" alt=""></a></div>
      </div>
    </div>
  </footer>

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
  <script src="js/modal-video.min.js"></script>
  <script src="https://unpkg.com/imask"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
