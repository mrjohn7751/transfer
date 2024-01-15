@extends('app')
@section('contend')
<div class="container">
      <div class="container">
          <nav class="navbar bg-body-tertiary">
              <div class="container-fluid nav-bar">
                  <a href="https://jizpi.uz" target="_blank"><img src="https://jizpi.uz/wp-content/themes/jizpiGoodTemp/images/logo/jizpi.png" alt=""> Jizzax Politexnika Instituti</a>
              </div>
          </nav>
        
        <h4 class="title">Jizzax Politexnika insituti Transfer sayti</h4>
  
        <form action="{{ route('ttj.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
              <div class="mb-3">
                <label for="fish" class="form-label">FISH</label>
                <input type="text" class="form-control" name="name" placeholder="Berdiyev Jahongir Abdurashidovich" id="fish" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">Familya Ism Otangizni ismini to'liq kiriting </div>
              </div>
            </div>
            <!-- <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
              <div class="mb-3">
                <label for="date-time" class="form-label">Tug'ilgan kuningizni kiriting</label>
                <input type="date" class="form-control" name="birth_date" id="date-time" aria-describedby="emailHelp" required>
              </div>
            </div> -->
            
          </div>
          <div class="row">
            <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
              <div class="mb-3">
                <label for="phone-number" class="form-label">Telefon Raqamingizni Kiriting</label>
                <input type="number" class="form-control" name="phone_num" id="phone-number" placeholder="+9981234567 " required>
              </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
              <div class="mb-3">
                <label for="phone-number2" class="form-label">Qo'shimcha telefon raqamni</label>
                <input type="number" class="form-control" name="parent_num" id="phone-number2" placeholder="+9981234567 ">
              </div>
            </div>
          </div>
  
  <br>
  
 
      <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3 ">
          <select class="form-select" name="deriction" aria-label="Default select example">
            <option selected disabled>O'qiyotgan ta'lim yo'alishingiz</option>
            <option value='Arxitektura (turlari bo‘yicha)'>Arxitektura (turlari bo‘yicha)</option>
            <option value= 'Buxgalteriya hisobi va audit (tarmoqlar bo‘yicha)'>Buxgalteriya hisobi va audit (tarmoqlar bo‘yicha)</option>
            <option value= 'Avtomobilsozlik va traktorsozlik'>Avtomobilsozlik va traktorsozlik</option>
            <option value='Ekologiya va atrof-muhit muhofazasi (tarmoqlar va sohalar bo‘yicha)'>Ekologiya va atrof-muhit muhofazasi (tarmoqlar va sohalar bo‘yicha)Elektr energetikasi (tarmoqlar va yo‘nalishlar bo‘yicha)</option>
            <option value='Elektr energetikasi (tarmoqlar va yo‘nalishlar bo‘yicha)'>Elektr energetikasi (tarmoqlar va yo‘nalishlar bo‘yicha)</option>
            <option value= 'Professional talim (Iqtisod) '>Professional talim (Iqtisod)</option>
            <option value= 'Metallurgiya'>Metallurgiya</option>
            <option  value= 'Elektr texnikasi, elektr mexanikasi va elektr texnologiyalari (tarmoqlar bo‘yicha)'>Elektr texnikasi, elektr mexanikasi va elektr texnologiyalari (tarmoqlar bo‘yicha)</option>
            <option value= 'Elektronika va asbobsozlik (tarmoqlar bo‘yicha)'>Elektronika va asbobsozlik (tarmoqlar bo‘yicha)</option>
            <option value= 'Energetika (tarmoqlar bo‘yicha)'>Energetika (tarmoqlar bo‘yicha)</option>
            <option value= 'Kimyoviy texnologiya (ishlab chiqarish turlari bo‘yicha)'>Kimyoviy texnologiya (ishlab chiqarish turlari bo‘yicha)</option>
            <option value= 'Mashinasozlik texnologiyasi, mashinasozlik ishlab chiqarishini jihozlash va avtomatlashtirish'>Mashinasozlik texnologiyasi, mashinasozlik ishlab chiqarishini jihozlash va avtomatlashtirish</option>
            <option value= 'Materialshunoslik va yangi materiallar texnologiyasi (qurilish)'>Materialshunoslik va yangi materiallar texnologiyasi (qurilish)</option>
            <option value= 'Mehnat muhofazasi va texnika xavfsizligi (tarmoqlar bo‘yicha)'>Mehnat muhofazasi va texnika xavfsizligi (tarmoqlar bo‘yicha)</option>
            <option value= 'Menejment (tarmoqlar va sohalar bo‘yicha)'>Menejment (tarmoqlar va sohalar bo‘yicha)</option>
            <option value= 'Metrologiya, standartlashtirish va mahsulot sifati menejmenti (tarmoqlar bo‘yicha)'>Metrologiya, standartlashtirish va mahsulot sifati menejmenti (tarmoqlar bo‘yicha)</option>
            <option value= 'Muhandislik kommunikatsiyalari qurilishi va montaji (turlari bo‘yicha)'>Muhandislik kommunikatsiyalari qurilishi va montaji (turlari bo‘yicha)</option>
            <option value= 'Neft va neft-gazni qayta ishlash texnologiyasi'>Neft va neft-gazni qayta ishlash texnologiyasi</option>
            <option value= 'Oziq-ovqat texnologiyasi (mahsulot turlari bo‘yicha)'>Oziq-ovqat texnologiyasi (mahsulot turlari bo‘yicha)</option>
            <option value= 'Professional ta’lim transport vositalari muhandisligi (avtotransport)'>Professional ta’lim transport vositalari muhandisligi (avtotransport)</option>
            <option value= 'Qishloq xo‘jaligini mexanizatsiyalashtirish'>Qishloq xo‘jaligini mexanizatsiyalashtirish</option>
            <option value= 'Qishloq xo‘jalik mahsulotlarini saqlash va dastlabki ishlash texnologiyasi (mahsulotlar turlari bo‘yicha)'>Qishloq xo‘jalik mahsulotlarini saqlash va dastlabki ishlash texnologiyasi (mahsulotlar turlari bo‘yicha)</option>
            <option value= 'Qurilish muhandisligi bino va inshootlar qurilishi'>Qurilish muhandisligi bino va inshootlar qurilishi</option>
            <option value= 'Qurilish muhandisligi devorbop va pardozbop qurilish materiallari texnologiyasi'>Qurilish muhandisligi devorbop va pardozbop qurilish materiallari texnologiyasi</option>
            <option value= 'Qurilish muhandisligi qurilish materiallari, buyumlari va konstruksiyalarini ishlab chiqarish'>Qurilish muhandisligi qurilish materiallari, buyumlari va konstruksiyalarini ishlab chiqarish</option>
            <option value= 'Radioelektron qurilmalar va tizimlar (tarmoqlar bo‘yicha)'>Radioelektron qurilmalar va tizimlar (tarmoqlar bo‘yicha)</option>
            <option value= 'Suv ta’minoti va kanalizatsiya tizimlarini loyihalashtirish va ekspluatatsiyasi'>Suv ta’minoti va kanalizatsiya tizimlarini loyihalashtirish va ekspluatatsiyasi</option>
            <option value= 'Tabiiy tolalarni dastlabki ishlash texnologiyasi (xomashyo va jarayon turlari bo‘yicha)'>Tabiiy tolalarni dastlabki ishlash texnologiyasi (xomashyo va jarayon turlari bo‘yicha)</option>
            <option value= 'Texnologik jarayonlar va ishlab chiqarishni avtomatlashtirish va boshqarish (tarmoqlar bo‘yicha)'>Texnologik jarayonlar va ishlab chiqarishni avtomatlashtirish va boshqarish (tarmoqlar bo‘yicha)</option>
            <option value= 'Texnologik mashinalar va jihozlar (tarmoqlar bo‘yicha)'>Texnologik mashinalar va jihozlar (tarmoqlar bo‘yicha)</option>
            <option value= 'Transport logistikasi (transport turlari bo‘yicha)'>Transport logistikasi (transport turlari bo‘yicha)</option>
            <option value= 'Transport vositalari muhandisligi (turlari bo‘yicha)'>Transport vositalari muhandisligi (turlari bo‘yicha)</option>
            <option value= 'Yengil sanoat buyumlari konstruksiyasini ishlash va texnologiyasi (ishlab chiqarish turlari bo‘yicha)'>Yengil sanoat buyumlari konstruksiyasini ishlash va texnologiyasi (ishlab chiqarish turlari bo‘yicha)</option>
            <option value= 'Yo‘l muhandisligi (sohalar va faoliyat turlari bo‘yicha)'>Yo‘l muhandisligi (sohalar va faoliyat turlari bo‘yicha)</option>
          </select>
        </div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3 ">
          <select class="form-select" name="shape" aria-label="Default select example">
            <option selected  disabled> O'qiyotgan Ta'lim shakli</option>
            <option value="Kunduzgi">Kunduzgi</option>
            <option value="Sirtqi">Sirtqi</option>
          </select>
        </div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3 ">
          <input type="number" class="form-control" name="group" id="location" placeholder="820-20" required>
        
        </div>
  
        <div class="col col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3 ">
          <select class="form-select" name="course" aria-label="Default select example">
            <option selected  disabled>Kurs</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>
        <br>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3 ">
          <select class="form-select" name="deriction2" aria-label="Default select example">
            <option selected disabled>Ko'chirayotgan ta'lim yo'nalishingiz</option>
            <option value='Arxitektura (turlari bo‘yicha)'>Arxitektura (turlari bo‘yicha)</option>
            <option value= 'Buxgalteriya hisobi va audit (tarmoqlar bo‘yicha)'>Buxgalteriya hisobi va audit (tarmoqlar bo‘yicha)</option>
            <option value= 'Avtomobilsozlik va traktorsozlik'>Avtomobilsozlik va traktorsozlik</option>
            <option value='Ekologiya va atrof-muhit muhofazasi (tarmoqlar va sohalar bo‘yicha)'>Ekologiya va atrof-muhit muhofazasi (tarmoqlar va sohalar bo‘yicha)Elektr energetikasi (tarmoqlar va yo‘nalishlar bo‘yicha)</option>
            <option value= ' Elektr energetikasi (tarmoqlar va yo‘nalishlar bo‘yicha) '>Elektr energetikasi (tarmoqlar va yo‘nalishlar bo‘yicha) </option>
            <option  value= 'Elektr texnikasi, elektr mexanikasi va elektr texnologiyalari (tarmoqlar bo‘yicha)'>Elektr texnikasi, elektr mexanikasi va elektr texnologiyalari (tarmoqlar bo‘yicha)</option>
            <option value= 'Elektronika va asbobsozlik (tarmoqlar bo‘yicha)'>Elektronika va asbobsozlik (tarmoqlar bo‘yicha)</option>
            <option value= 'Energetika (tarmoqlar bo‘yicha)'>Energetika (tarmoqlar bo‘yicha)</option>
            <option value= 'Kimyoviy texnologiya (ishlab chiqarish turlari bo‘yicha)'>Kimyoviy texnologiya (ishlab chiqarish turlari bo‘yicha)</option>
            <option value= 'Mashinasozlik texnologiyasi, mashinasozlik ishlab chiqarishini jihozlash va avtomatlashtirish'>Mashinasozlik texnologiyasi, mashinasozlik ishlab chiqarishini jihozlash va avtomatlashtirish</option>
            <option value= 'Materialshunoslik va yangi materiallar texnologiyasi (qurilish)'>Materialshunoslik va yangi materiallar texnologiyasi (qurilish)</option>
            <option value= 'Mehnat muhofazasi va texnika xavfsizligi (tarmoqlar bo‘yicha)'>Mehnat muhofazasi va texnika xavfsizligi (tarmoqlar bo‘yicha)</option>
            <option value= 'Menejment (tarmoqlar va sohalar bo‘yicha)'>Menejment (tarmoqlar va sohalar bo‘yicha)</option>
            <option value= 'Metrologiya, standartlashtirish va mahsulot sifati menejmenti (tarmoqlar bo‘yicha)'>Metrologiya, standartlashtirish va mahsulot sifati menejmenti (tarmoqlar bo‘yicha)</option>
            <option value= 'Muhandislik kommunikatsiyalari qurilishi va montaji (turlari bo‘yicha)'>Muhandislik kommunikatsiyalari qurilishi va montaji (turlari bo‘yicha)</option>
            <option value= 'Neft va neft-gazni qayta ishlash texnologiyasi'>Neft va neft-gazni qayta ishlash texnologiyasi</option>
            <option value= 'Oziq-ovqat texnologiyasi (mahsulot turlari bo‘yicha)'>Oziq-ovqat texnologiyasi (mahsulot turlari bo‘yicha)</option>
            <option value= 'Professional ta’lim transport vositalari muhandisligi (avtotransport)'>Professional ta’lim transport vositalari muhandisligi (avtotransport)</option>
            <option value= 'Qishloq xo‘jaligini mexanizatsiyalashtirish'>Qishloq xo‘jaligini mexanizatsiyalashtirish</option>
            <option value= 'Qishloq xo‘jalik mahsulotlarini saqlash va dastlabki ishlash texnologiyasi (mahsulotlar turlari bo‘yicha)'>Qishloq xo‘jalik mahsulotlarini saqlash va dastlabki ishlash texnologiyasi (mahsulotlar turlari bo‘yicha)</option>
            <option value= 'Qurilish muhandisligi bino va inshootlar qurilishi'>Qurilish muhandisligi bino va inshootlar qurilishi</option>
            <option value= 'Qurilish muhandisligi devorbop va pardozbop qurilish materiallari texnologiyasi'>Qurilish muhandisligi devorbop va pardozbop qurilish materiallari texnologiyasi</option>
            <option value= 'Qurilish muhandisligi qurilish materiallari, buyumlari va konstruksiyalarini ishlab chiqarish'>Qurilish muhandisligi qurilish materiallari, buyumlari va konstruksiyalarini ishlab chiqarish</option>
            <option value= 'Radioelektron qurilmalar va tizimlar (tarmoqlar bo‘yicha)'>Radioelektron qurilmalar va tizimlar (tarmoqlar bo‘yicha)</option>
            <option value= 'Suv ta’minoti va kanalizatsiya tizimlarini loyihalashtirish va ekspluatatsiyasi'>Suv ta’minoti va kanalizatsiya tizimlarini loyihalashtirish va ekspluatatsiyasi</option>
            <option value= 'Tabiiy tolalarni dastlabki ishlash texnologiyasi (xomashyo va jarayon turlari bo‘yicha)'>Tabiiy tolalarni dastlabki ishlash texnologiyasi (xomashyo va jarayon turlari bo‘yicha)</option>
            <option value= 'Texnologik jarayonlar va ishlab chiqarishni avtomatlashtirish va boshqarish (tarmoqlar bo‘yicha)'>Texnologik jarayonlar va ishlab chiqarishni avtomatlashtirish va boshqarish (tarmoqlar bo‘yicha)</option>
            <option value= 'Texnologik mashinalar va jihozlar (tarmoqlar bo‘yicha)'>Texnologik mashinalar va jihozlar (tarmoqlar bo‘yicha)</option>
            <option value= 'Transport logistikasi (transport turlari bo‘yicha)'>Transport logistikasi (transport turlari bo‘yicha)</option>
            <option value= 'Transport vositalari muhandisligi (turlari bo‘yicha)'>Transport vositalari muhandisligi (turlari bo‘yicha)</option>
            <option value= 'Yengil sanoat buyumlari konstruksiyasini ishlash va texnologiyasi (ishlab chiqarish turlari bo‘yicha)'>Yengil sanoat buyumlari konstruksiyasini ishlash va texnologiyasi (ishlab chiqarish turlari bo‘yicha)</option>
            <option value= 'Yo‘l muhandisligi (sohalar va faoliyat turlari bo‘yicha)'>Yo‘l muhandisligi (sohalar va faoliyat turlari bo‘yicha)</option>
          </select>
        </div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3 ">
          <select class="form-select" name="shape2" aria-label="Default select example">
            <option selected  disabled> Ko'chirayotgan Ta'lim shakli</option>
            <option value="Kunduzgi">Kunduzgi</option>
            <option value="Sirtqi">Sirtqi</option>
          </select>
        </div>
        
      </div>
      <br>
        <div class="mb-3">
          
      </div>
  
      <div class="mb-3">
          <label for="oylaviy-malumot" class="form-label">O'qishni tiklash uchun(Oldingi ta'lim yo'nalishingiz yozing ) </label>
          <textarea class="form-control" id="oylaviy-malumot" name="details" rows="3"></textarea>
      </div>
      <div class="mb-3">
          <label for="formFile" class="form-label">Reyting daftarcha (Transkript) (pdf, jpg)</label>
          <input class="form-control" type="file" name="doc" id="formFile"  required>
      </div>
      
  
  
        <button type="submit" class="btn btn-outline-success submit">Jo'natish</button>
  
    </div>
</div>
</form>

<script>
  function updateFacultateId() {
    const facultateSelect = document.getElementsByName('facultate')[0];
    const facultateIdSelect = document.getElementsByName('facultate_id')[0];

    const selectedFacultate = facultateSelect.value;
    for (const option of facultateIdSelect.options) {
      if (option.text === selectedFacultate) {
        facultateIdSelect.value = option.value;
        break;
      }
    }
  }
</script>
@endsection


