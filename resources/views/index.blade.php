<x-layout>

  <main class="main">
    <div class="container mx-auto flex flex-col lg:flex-row items-center">
      <div class="main__block">
        <div class="main__block-cont">
          <h1 class="main__title mb-5">
            Үздік ЖОО ұстаздарынан тегін сабақтар
          </h1>
          <p class="main__subtitle mb-8">
            Бұл порталда сіз өзіңізге қажеттіні таба аласыз. Жетекші ЖОО ұстаздарының тегін онлайн сабақтарын оқуға мүмкіндік бар.
          </p>
          <button class="main__button flex items-center bg-color-1 hover:bg-hover-color-1" data-modal-toggle="defaultModal" id="main__button">
            <p class="ml-6 mr-4">Оқуды бастау</p>
            <svg class="img-main-btn-arrow" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="20" cy="20" r="20" fill="white"/>
              <path d="M31.7071 20.7071C32.0976 20.3166 32.0976 19.6834 31.7071 19.2929L25.3431 12.9289C24.9526 12.5384 24.3195 12.5384 23.9289 12.9289C23.5384 13.3195 23.5384 13.9526 23.9289 14.3431L29.5858 20L23.9289 25.6569C23.5384 26.0474 23.5384 26.6805 23.9289 27.0711C24.3195 27.4616 24.9526 27.4616 25.3431 27.0711L31.7071 20.7071ZM9 21H31V19H9V21Z" fill="#8a1d3b"/>
            </svg>
          </button>

          <div class="main__modal" id="main__myModal">
            <div class="main__modal_content">
              <span class="main__modal_close"><img src="img/icons/ic-modal-close.png" alt=""></span>
              <h2 id="main__modal_title">Оставьте заявку</h2>
              <form action="" id="main__modal_form">
                <input type="text" class="main__modal_name" placeholder="Как вас зовут ?" required>
                <input type="email" class="main__modal_email" placeholder="E-mail" required>
                <input type="tel" class="main__modal_phone" id="main__modal_phone" placeholder="Ваш номер телефона" required>
                <label class="main__modal_container">
                  <input type="checkbox" checked="checked" required>
                  Я согласен на обработку данных
                  <span class="main__modal_checkmark"></span>
                </label>
                <button class="main__modal_button" type="submit">Отправить заявку</button>
              </form>
            </div>
          </div>

        </div>
        <img src="img/icons/ic-atom-1.svg" alt="" class="img-atom1">
        <img src="img/icons/ic-atom-1.svg" alt="" class="img-atom2">
      </div>
      <div class="main__block">
          <div class="main__swiper">
            <div class="swiper mainSwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="img/img-main-1.jpg" alt="" class="img-main"></div>
                <div class="swiper-slide"><img src="img/img-main-2.jpg" alt="" class="img-main"></div>
                <div class="swiper-slide"><img src="img/img-main-3.jpg" alt="" class="img-main"></div>
              </div>
              <div class="swiper-panel-1">
                <div class="swiper-btns-1">
                  <div class="swiper-left-btn-1">
                    <div class="swiper-button-prev-1">
                      <svg class="swiper-btn-prev-1-img" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle r="15" transform="matrix(-1 0 0 1 15 15)" fill="#B1B3B3"/>
                        <path d="M8.4697 15.5303C8.1768 15.2374 8.1768 14.7626 8.4697 14.4697L13.2427 9.6967C13.5356 9.40381 14.0104 9.40381 14.3033 9.6967C14.5962 9.98959 14.5962 10.4645 14.3033 10.7574L10.0607 15L14.3033 19.2426C14.5962 19.5355 14.5962 20.0104 14.3033 20.3033C14.0104 20.5962 13.5356 20.5962 13.2427 20.3033L8.4697 15.5303ZM20.4 15.75L9.00002 15.75L9.00002 14.25L20.4 14.25L20.4 15.75Z" fill="white"/>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper-page-1">
                    <div class="swiper-pagination-1"></div>
                  </div>
                  <div class="swiper-right-btn-1">
                    <div class="swiper-button-next-1">
                      <svg class="swiper-btn-next-1-img" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="15" cy="15" r="15" fill="#B1B3B3"/>
                        <path d="M21.5303 15.5303C21.8232 15.2374 21.8232 14.7626 21.5303 14.4697L16.7573 9.6967C16.4644 9.40381 15.9896 9.40381 15.6967 9.6967C15.4038 9.98959 15.4038 10.4645 15.6967 10.7574L19.9393 15L15.6967 19.2426C15.4038 19.5355 15.4038 20.0104 15.6967 20.3033C15.9896 20.5962 16.4644 20.5962 16.7573 20.3033L21.5303 15.5303ZM9.59998 15.75L21 15.75L21 14.25L9.59998 14.25L9.59998 15.75Z" fill="white"/>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </main>

  <section class="features" id="features">
    <div class="container mx-auto">
      <div class="section__header mb-8 text-left">
        <h2 class="section__title mb-4">MOOC құрылымы</h2>
        <h3 class="section__subtitle w-full lg:w-1/2 xl:w-1/3">MOOC — бұл қашықтықтан білім беру курстары ғана емес, бұл әртүрлі іс-шаралардың үлкен кешенін қамтитын оқытудың жеке әдістемесі.</h3>
      </div>
      <div class="section__content">
        <div class="section__grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
          <div class="section__items p-5 flex flex-col items-start">
            <img src="img/icons/ic-features-1.png" alt="" class="ic-features-item mb-4">
            <h3 class="section__item-title mb-3">Интерактивтілік</h3>
            <h4 class="section__item-subtitle">MOOC оқытушы-курс жетекшісімен, сондай-ақ басқа тыңдаушылармен көптеген байланыс арналарының болуын болжайды</h4>
          </div>
          <div class="section__items p-5 flex flex-col items-start">
            <img src="img/icons/ic-features-2.png" alt="" class="ic-features-item mb-4">
            <h3 class="section__item-title mb-3">Пайдалы байланыстар</h3>
            <h4 class="section__item-subtitle">әрбір қатысушы таңдалған тақырып туралы өз ойын кеңейтуге және "бірінші қолдан"ақпарат ала отырып, қызықты және пайдалы таныстар табуға бірегей мүмкіндік алады</h4>
          </div>
          <div class="section__items p-5 flex flex-col items-start">
            <img src="img/icons/ic-features-3.png" alt="" class="ic-features-item mb-4">
            <h3 class="section__item-title mb-3">Жылдам кері байланыс және бағалау</h3>
            <h4 class="section__item-subtitle">Жұмысты аяқтағаннан кейін студенттер өз білімдерін бірден бағалайды</h4>
          </div>
          <div class="section__items p-5 flex flex-col items-start">
            <img src="img/icons/ic-features-4.png" alt="" class="ic-features-item mb-4">
            <h3 class="section__item-title mb-3">Еліміздің үздік оқытушылары</h3>
            <h4 class="section__item-subtitle">Онлайн оқытуды әлемнің ең танымал университеттерінің ең жоғары білікті оқытушылары жүргізеді</h4>
          </div>
          <div class="section__items p-5 flex flex-col items-start">
            <img src="img/icons/ic-features-5.png" alt="" class="ic-features-item mb-4">
            <h3 class="section__item-title mb-3">Тегін онлайн оқыту</h3>
            <h4 class="section__item-subtitle">MOOC атауында шифрланған "ашық" термині "тегін" немесе шартты түрде тегін дегенді білдіреді</h4>
          </div>
          <div class="section__items p-5 flex flex-col items-start">
            <img src="img/icons/ic-features-6.png" alt="" class="ic-features-item mb-4">
            <h3 class="section__item-title mb-3">Оқытудың еркін кестесі</h3>
            <h4 class="section__item-subtitle">Әр курс студент өзіне ыңғайлы оқу кестесін жасай алатын уақыт кестесімен шектеледі</h4>
          </div>
        </div>
      </div>
    </div>
    <img src="img/img-features-bg-1.png" alt="" class="img-features-bg-1 hidden lg:block">
    <img src="img/img-features-bg-2.png" alt="" class="img-features-bg-2 hidden lg:block">
    <img src="img/img-features-bg-3.png" alt="" class="img-features-bg-3 hidden lg:block">
  </section>


  <section class="electives" id="electives">
    <div class="container mx-auto">
      <div class="section__header mb-8 text-left">
          <div class="section__header_up flex items-center justify-between ">
              <h2 class="section__title">Курстар</h2>
              <a href="/courses" class="section__button bg-color-1 text-white py-2 px-4 rounded">Толығырақ</a>
          </div>
          <div class="section__header_down">
              <h3 class="section__subtitle w-1/3"></h3>
          </div>

      </div>
      <div class="section__grid-2 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-7">
        <div class="section__items-2">
          <div class="section__items-2-inner mb-6">
            <div class="section__items-2-front p-2">
              <img src="img/icons/ill-electives-1.png" alt="" class="ill-electives-item">
            </div>
            <div class="section__items-2-back p-5">
              <p>Описание данного факультатива</p>
              <img src="img/icons/ill-electives-back-item.png" alt="" class="ill-electives-back-item">
            </div>
          </div>
          <h3 class="section__item-2-title mb-3">C# бағдарламалау: бастаушыдан маманға дейін</h3>
        </div>
        <div class="section__items-2">
          <div class="section__items-2-inner mb-6">
            <div class="section__items-2-front p-2">
              <img src="img/icons/ill-electives-2.png" alt="" class="ill-electives-item">
            </div>
            <div class="section__items-2-back p-5">
              <p>Описание данного факультатива</p>
              <img src="img/icons/ill-electives-back-item.png" alt="" class="ill-electives-back-item">
            </div>
          </div>
          <h3 class="section__item-2-title mb-3">Бағдарламалық жасақтама архитектурасы</h3>
        </div>
        <div class="section__items-2">
          <div class="section__items-2-inner mb-6">
            <div class="section__items-2-front p-2">
              <img src="img/icons/ill-electives-3.png" alt="" class="ill-electives-item">
            </div>
            <div class="section__items-2-back p-5">
              <p>Описание данного факультатива</p>
              <img src="img/icons/ill-electives-back-item.png" alt="" class="ill-electives-back-item">
            </div>
          </div>
          <h3 class="section__item-2-title mb-3">C# және. NET дизайн үлгілері</h3>
        </div>
        <div class="section__items-2">
          <div class="section__items-2-inner mb-6">
            <div class="section__items-2-front p-2">
              <img src="img/icons/ill-electives-4.png" alt="" class="ill-electives-item">
            </div>
            <div class="section__items-2-back p-5">
              <p>Описание данного факультатива</p>
              <img src="img/icons/ill-electives-back-item.png" alt="" class="ill-electives-back-item">
            </div>
          </div>
          <h3 class="section__item-2-title mb-3">Алгоритмдер және А-дан Я-ға дейінгі деректер құрылымы</h3>
        </div>
        <div class="section__items-2">
          <div class="section__items-2-inner mb-6">
            <div class="section__items-2-front p-2">
              <img src="img/icons/ill-electives-5.png" alt="" class="ill-electives-item">
            </div>
            <div class="section__items-2-back p-5">
              <p>Описание данного факультатива</p>
              <img src="img/icons/ill-electives-back-item.png" alt="" class="ill-electives-back-item">
            </div>
          </div>
          <h3 class="section__item-2-title mb-3">Тәжірибеде OOP теориясы C#</h3>
        </div>
        <div class="section__items-2">
          <div class="section__items-2-inner mb-6">
            <div class="section__items-2-front p-2">
              <img src="img/icons/ill-electives-6.png" alt="" class="ill-electives-item">
            </div>
            <div class="section__items-2-back p-5">
              <p>Описание данного факультатива</p>
              <img src="img/icons/ill-electives-back-item.png" alt="" class="ill-electives-back-item">
            </div>
          </div>
          <h3 class="section__item-2-title mb-3">OOP-тегі Meta және solid принциптері</h3>
        </div>
        <div class="section__items-2">
          <div class="section__items-2-inner mb-6">
            <div class="section__items-2-front p-2">
              <img src="img/icons/ill-electives-7.png" alt="" class="ill-electives-item">
            </div>
            <div class="section__items-2-back p-5">
              <p>Описание данного факультатива</p>
              <img src="img/icons/ill-electives-back-item.png" alt="" class="ill-electives-back-item">
            </div>
          </div>
          <h3 class="section__item-2-title mb-3">Толық курс. Unity-де 2D платформерін құру | 2020</h3>
        </div>
        <div class="section__items-2">
          <div class="section__items-2-inner mb-6">
            <div class="section__items-2-front p-2">
              <img src="img/icons/ill-electives-8.png" alt="" class="ill-electives-item">
            </div>
            <div class="section__items-2-back p-5">
              <p>Описание данного факультатива</p>
              <img src="img/icons/ill-electives-back-item.png" alt="" class="ill-electives-back-item">
            </div>
          </div>
          <h3 class="section__item-2-title mb-3">C# тілінде API-ді жобалау мен іске асырудың ең жақсы тәжірибелері</h3>
        </div>
      </div>
    </div>
  </section>

  <section class="about" id="about">
    <div class="container mx-auto">
      <div class="section__header mb-8 text-left">
        <h2 class="section__title mb-4">Жоба туралы</h2>
        <h3 class="section__subtitle w-1/3"></h3>
      </div>
      <div class="section__content">
        <div class="section__grid-3 grid grid-cols-1 lg:grid-cols-2 gap-7">
          <div class="section__items-3 flex flex-col items-center justify-start">
            <img src="img/icons/ic-about-1.svg" alt="" class="ic-about-item mb-4">
            <p class="section__items-3-title">Massive - бір курста жүздеген және мыңдаған тыңдаушылар</p>
          </div>
          <div class="section__items-3 flex flex-col items-center justify-start">
            <img src="img/icons/ic-about-2.svg" alt="" class="ic-about-item mb-4">
            <p class="section__items-3-title">Open - барлық курстар ашық түрде ұсынылған</p>
          </div>
          <div class="section__items-3 flex flex-col items-center justify-start">
            <img src="img/icons/ic-about-3.svg" alt="" class="ic-about-item mb-4">
            <p class="section__items-3-title">Online - географиялық орналасудан тәуелсіздік</p>
          </div>
          <div class="section__items-3 flex flex-col items-center justify-start">
            <img src="img/icons/ic-about-4.svg" alt="" class="ic-about-item mb-4">
            <p class="section__items-3-title">Course - әркім өзінің оқу қарқынын таңдайды</p>
          </div>
        </div>
      </div>
    </div>
    <img src="img/img-about-bg2.jpg" alt="" class="img-about-bg-2">
  </section>

  <section class="news" id="news">
    <div class="container mx-auto">
      <div class="section__header mb-8 text-left flex items-center justify-between">
        <h2 class="section__title mb-4">Жаңалықтар</h2>
        <div class="swiper-panel-2 lg:hidden">
          <div class="swiper-btns-2 flex items-center">
            <div class="swiper-left-btn-2 mr-3">
              <div class="swiper-button-prev-2">
                <svg class="swiper-btn-prev-2-img" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle r="15" transform="matrix(-1 0 0 1 15 15)" fill="#B1B3B3"/>
                  <path d="M8.4697 15.5303C8.1768 15.2374 8.1768 14.7626 8.4697 14.4697L13.2427 9.6967C13.5356 9.40381 14.0104 9.40381 14.3033 9.6967C14.5962 9.98959 14.5962 10.4645 14.3033 10.7574L10.0607 15L14.3033 19.2426C14.5962 19.5355 14.5962 20.0104 14.3033 20.3033C14.0104 20.5962 13.5356 20.5962 13.2427 20.3033L8.4697 15.5303ZM20.4 15.75L9.00002 15.75L9.00002 14.25L20.4 14.25L20.4 15.75Z" fill="white"/>
                </svg>
              </div>
            </div>
            <div class="swiper-right-btn-2 ml-3">
              <div class="swiper-button-next-2">
                <svg class="swiper-btn-next-2-img" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="15" cy="15" r="15" fill="#B1B3B3"/>
                  <path d="M21.5303 15.5303C21.8232 15.2374 21.8232 14.7626 21.5303 14.4697L16.7573 9.6967C16.4644 9.40381 15.9896 9.40381 15.6967 9.6967C15.4038 9.98959 15.4038 10.4645 15.6967 10.7574L19.9393 15L15.6967 19.2426C15.4038 19.5355 15.4038 20.0104 15.6967 20.3033C15.9896 20.5962 16.4644 20.5962 16.7573 20.3033L21.5303 15.5303ZM9.59998 15.75L21 15.75L21 14.25L9.59998 14.25L9.59998 15.75Z" fill="white"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section__content">
        <div class="news__swiper">
            <div class="swiper newsSwiper">
              <div class="swiper-wrapper">
                  @foreach($posts as $post)
                    <a href="#" class="swiper-slide" >
                      <div class="news__swiper-item">
                        <img src="{{ $post->image }}" alt="" class="img-news-bg">
                      </div>
                      <div class="news__swiper-content flex flex-col justify-between">
                        <h3>{{ $post->title }}</h3>
                        <div class="news__swiper-date flex items-center">
                          <img src="img/icons/ic-time.svg" alt="" class="ic-time">
                          <p>{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                      </div>
                    </a>
                  @endforeach

              </div>

            </div>
        </div>
      </div>
    </div>
  </section>

</x-layout>
