@extends('app')
@section('contend')
    <div class="container">
        <header>
            <nav class="navbar ">
                <div class="container-fluid nav-bar">
                    <a href="https://jizpi.uz" target="_blank"><img src="	https://jizpi.uz/wp-content/themes/jizpiGoodTemp/images/logo/jizpi.png" alt=""> Jizzax Politexnika Instituti</a>
                </div>
            </nav>

        
        </header>
    </div>
    <div class="container">
      <div class="row card_description mx-0">
        <div class="col col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 5"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./img/photo_1.jpg" class="d-block w-100 img-slide" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/photo_2023-07-18_13-42-11.jpg" class="d-block w-100 img-slide" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/photo_2023-07-18_13-42-24.jpg" class="d-block w-100 img-slide" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/photo_2023-07-18_13-42-29.jpg" class="d-block w-100 img-slide" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/photo_2023-07-18_13-42-33.jpg" class="d-block w-100 img-slide" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/photo_2023-07-18_13-42-37.jpg" class="d-block w-100 img-slide" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/photo_2023-07-18_13-42-41.jpg" class="d-block w-100 img-slide" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        <div class="col col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
            <div class="content">
                <h5>Jizzax politexnika instituti O'qishni ko'chirish va tiklash</h5>
                <p>
                O‘zbekiston Respublikasi Vazirlar Mahkamasining 2017-yil 20.06 dagi 393-son bilan tasdiqlangan “Oliy ta’lim muassasalari talabalari o‘qishini ko‘chirish, qayta tiklash va o‘qishdan chetlashtirish tartibi to‘g‘risida”gi NIZOM va O‘zbekiston Respublikasi Vazirlar Mahkamasining    2020-yil      31-dekabrdagi 824-son qarori bilan tasdiqlangan “Oliy ta’lim muassasalarida o‘quv jarayoniga kredit-modul tizimini joriy etish tartibi to‘g‘risida” nizomlarga asosan institut talabalar safiga kunduzgi va sirtqi ta’lim shakliga tiklash va ko'chirish
                <a href="./Turdoshlar JizPI.pdf">Turdosh yo'nalishlar yuklab olish uchun bosing</a>
                <a href="https://t.me/Perevod20232024">Bizning telegram kanalimiz azo boling </a>

                </p>
                
            </div>
            <li class="btn-li btn btn-outline-success"><a href="{{ route('ttj.create') }}" class="btn-footer btn-outline-success" target="_blank">Ariza topshirish</a></li>
        </div>
       </div>
    </div>

@endsection