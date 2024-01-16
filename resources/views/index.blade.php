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

        <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div class="content">
                <h5>Jizzax politexnika instituti O'qishni ko'chirish va tiklash</h5>
                <p>
                O‘zbekiston Respublikasi Vazirlar Mahkamasining 2017-yil 20.06 dagi 393-son bilan tasdiqlangan “Oliy ta’lim muassasalari talabalari o‘qishini ko‘chirish, qayta tiklash va o‘qishdan chetlashtirish tartibi to‘g‘risida”gi NIZOM va O‘zbekiston Respublikasi Vazirlar Mahkamasining    2020-yil      31-dekabrdagi 824-son qarori bilan tasdiqlangan “Oliy ta’lim muassasalarida o‘quv jarayoniga kredit-modul tizimini joriy etish tartibi to‘g‘risida” nizomlarga asosan institut talabalar safiga kunduzgi va sirtqi ta’lim shakliga tiklash va ko'chirish
                <a href="./Turdoshlar JizPI.pdf">Turdosh yo'nalishlar yuklab olish uchun bosing</a>
                </p>
                <a href="https://t.me/Perevod20232024">
                  <p>Bizning telegram kanalimiz a'zo bo'ling</p>
                </a>
            </div>
            <li class="btn-li btn btn-outline-success "><a href="{{ route('ttj.create') }}" class="btn-footer btn-outline-success">Ariza topshirish</a></li>
        </div>
       </div>
    </div>

@endsection