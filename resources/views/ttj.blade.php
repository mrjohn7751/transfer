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
                <input type="number" class="form-control" name="parent_num" id="phone-number2" placeholder="+9981234567 " required>
              </div>
            </div>
          </div>
  
  <br>
  
  <!-- <select class="form-select" name="region" aria-label="Default select example">
    <option selected disabled>Viloyat</option>
    <option value="Toshkent viloyati">Toshkent viloyati</option>
    <option value="Jizzax viloyati">Jizzax viloyati</option>
    <option value="Sirdaryo viloyati">Sirdaryo viloyati</option>
    <option value="Samarqand viloyati">Samarqand viloyati</option>
    <option value="Surxondaryo viloyati">Surxondaryo viloyati</option>
    <option value="Qashqadaryo viloyati">Qashqadaryo viloyati</option>
    <option value="Navoiy viloyati">Navoiy viloyati</option>
    <option value="Buxoro viloyati">Buxoro viloyati</option>
    <option value="Xorazm viloyati">Xorazm viloyati</option>
    <option value="Qoraqalpogʻiston Respublikasi">Qoraqalpogʻiston Respublikasi</option>
    <option value="Namangan viloyati">Namangan viloyati</option>
    <option value="Fargʻona viloyati">Fargʻona viloyati</option>
    <option value="Andijon viloyati">Andijon viloyati</option>
  </select> -->
      <br>
        <!-- <div class="mb-3">
            <label for="location" class="form-label">Yashash manzilingizni kiriting</label>
            <input type="text" class="form-control" id="location" name="address" placeholder="Sh.Rashidov tumani Bobur MFY Yangiobod ko'ch 74-uy" required>
        </div> -->
      <br>
      <div class="row">
        <!-- <div class="col col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3 ">
          <select class="form-select" name="facultate" aria-label="Default select example" onchange="updateFacultateId()">
            <option selected disabled>Fakultet</option>
            <option value="Transport">Transport</option>
            <option value="Sanoat texnologiyalari">Sanoat texnologiyalari</option>
            <option value="Arxitektura va qurilish">Arxitektura va qurilish</option>
            <option value="Energetika va radioelektronika">Energetika va radioelektronika</option>
            <option value="Servis">Servis</option>
            <option value="Qurilish materiallari va kimyoviy texnologiya">Qurilish materiallari va kimyoviy texnologiya</option>
          </select>
        </div> -->
        <!-- <div class="col col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3 ">
          <select class="form-select" name="cafedra" aria-label="Default select example">
            <option selected disabled>Kafedra</option>
            <option value='Transport vositalari muhandisligi'>Transport vositalari muhandisligi</option>
            <option value='Yo‘l muxandisligi'>Yo‘l muxandisligi</option>
            <option value='Ijtimoiy fanlar'>Ijtimoiy fanlar</option>
            <option value='Xorijiy tillar'>Xorijiy tillar</option>
            <option value='Bino va inshoatlar qurilishi'>Bino va inshoatlar qurilishi</option>
            <option value='Arxitekturaviy loyhalash'>Arxitekturaviy loyhalash</option>
            <option value='Muhandislik kommunikatsiyalari'>Muhandislik kommunikatsiyalari</option>
            <option value='Ozbek tili va adabiyoti'>Ozbek tili va adabiyoti</option>
            <option value='Qurilish materiallari, buyumlari va konstruksiyalari texnologiyasi'>Qurilish materiallari, buyumlari va konstruksiyalari texnologiyasi</option>
            <option value='Qurilish materialshunosligi'>Qurilish materialshunosligi</option>
            <option value='Umumiy texnika fanlari'>Umumiy texnika fanlari</option>
            <option value='Muhandislik va komputer grafikasi'>Muhandislik va komputer grafikasi</option>
            <option value='Toqimachilik maxsulotlarini qayta ishlash'>Toqimachilik maxsulotlarini qayta ishlash</option>
            <option value='Tabiiy tolalar va matoga ishlov berish'>Tabiiy tolalar va matoga ishlov berish</option>
            <option value='Qishloq xojaligi va oziq ovqat maxsulotlarini qayta ishlash'>Qishloq xojaligi va oziq ovqat maxsulotlarini qayta ishlash</option>
            <option value='Jismoniiy tarbiya'>Jismoniiy tarbiya</option>
            <option value='Kimiyo texnologiya'>Kimiyo texnologiya</option>
            <option value='Ekologiya va atrof muhit muxofazasi'>Ekologiya va atrof muhit muxofazasi</option>
            <option value='Kimyo'>Kimyo</option>
            <option value='Oliy matematika'>Oliy matematika</option>
            <option value='Energetika'>Energetika</option>
            <option value='Elektor texnologiyasi'>Elektor texnologiyasi</option>
            <option value='Radioelektronika'  >Radioelektronika</option>
            <option value='Fizika'>Fizika</option>
            <option value='Ishlab chiqarish jarayonlarini avtomatlashtirish va boshqarish'>Ishlab chiqarish jarayonlarini avtomatlashtirish va boshqarish</option>
            <option value='Transport logistikasi'>Transport logistikasi</option>
            <option value='Iqtisodiyot va menejment'>Iqtisodiyot va menejment</option>
            <option value='Profissional talim'>Profissional talim</option>
            <option value='Metalogiya va standartlashtrish'>Metalogiya va standartlashtrish</option>
          </select>
        </div> -->
        <div class="col col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3 ">
          <select class="form-select" name="deriction" aria-label="Default select example">
            <option selected disabled>O'qiyotgan ta'lim yo'alishingiz</option>
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


