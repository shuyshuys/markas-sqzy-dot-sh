@extends('partials/body')
@section('content')

<x-tag-title text="Home | MARKAS"/>

<div style="background-image: url({{ asset('img/bg-texture.png') }});" class="w-screen fixed py-7 animate__animated animate__fadeInDown">
  <div class="max-w-7xl mx-16 flex justify-between items-center xl:mx-auto md:mx-16">
    <a href="/home" class="text-3xl text-[#D90027] font-semibold">MARKAS</a>
    <ul class="flex justify-between text-xl text-[#D90027] xl:gap-8 sm:gap-6">
      <li><a href="/home">Home</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/philosophy">Philosophy</a></li>
      <li><a href="/event">Events</a></li>
      <li><a href="/booking/create">Booking</a></li>
      <li><a href="/contact">Contact Us</a></li>
    </ul>
  </div>
</div>

<div class="bg-black h-screen flex flex-col justify-center">
  <h1 class="text-7xl text-center font-semibold text-white mt animate__animated animate__backInDown">MARKAS</h1>
  <p class="text-2xl text-center text-white mt-10 animate__animated animate__backInLeft">A hub for startup founders to grow with the ecosystem.</p>
</div>

<div class="bg-[#D90027]" data-aos="flip-up">
  <h1 class="text-white text-3xl py-5 font-semibold text-center">GAIN KNOWLEDGE - GET MENTORED - EXPAND NETWORK</h1>
</div>

<div class="px-20">
<div class="mt-20">
  <h1 class="font-bold text-4xl">IKUTI KEGIATAN KAMI DI MARKAS</h1>
  <p class="text-lg pt-4 pb-8">Jangan lewatkan event-event seru di MARKAS</p>
</div>

<div class="w-full flex gap-10 justify-center mb-8">
  <div class="w-3/12" data-aos="zoom-in" data-aos-delay="250">
    <div style="background-image: url({{ asset('img/rectangle1.png') }});" class="w-full h-52 bg-cover border-2 border-solid border-black">
    </div>

    <div class="border-2 border-solid border-black">
    <h1 class="text-lg font-bold text-center my-2">SEKOLAH BETA HUSTLER <br> EPS. 39 - SCRUM FRAMEWORK</h1>
    </div>

    <div class="bg-[#D90027] text-center text-sm flex text-slate-200 justify-between border-2 border-solid border-black">
      <h1 class="mx-2 my-2">SURABAYA</h1>
      <h1  class="mx-2 my-2">SEPTEMBER 2023</h1>
    </div>
  </div>

  <div class="w-3/12" data-aos="zoom-in">
    <div style="background-image: url({{ asset('img/rectangle1.png') }});" class="w-full h-52 bg-cover border-2 border-solid border-black">
    </div>

    <div class="border-2 border-solid border-black">
    <h1 class="text-lg font-bold text-center my-2">SEKOLAH BETA HUSTLER <br> EPS. 39 - SCRUM FRAMEWORK</h1>
    </div>

    <div class="bg-[#D90027] text-center text-sm flex text-slate-200 justify-between border-2 border-solid border-black">
      <h1 class="mx-2 my-2">SURABAYA</h1>
      <h1  class="mx-2 my-2">SEPTEMBER 2023</h1>
    </div>
  </div>

  <div class="w-3/12" data-aos="zoom-in" data-aos-delay="250">
    <div style="background-image: url({{ asset('img/rectangle1.png') }});" class="w-full h-52 bg-cover border-2 border-solid border-black">
    </div>

    <div class="border-2 border-solid border-black">
    <h1 class="text-lg font-bold text-center my-2">SEKOLAH BETA HUSTLER <br> EPS. 39 - SCRUM FRAMEWORK</h1>
    </div>

    <div class="bg-[#D90027] text-center text-sm flex text-slate-200 justify-between border-2 border-solid border-black">
      <h1 class="mx-2 my-2">SURABAYA</h1>
      <h1  class="mx-2 my-2">SEPTEMBER 2023</h1>
    </div>
  </div>

</div>

<div class="w-full flex gap-10 justify-center">
  <div class="w-3/12" data-aos="zoom-in">
    <div style="background-image: url({{ asset('img/rectangle1.png') }});" class="w-full h-52 bg-cover border-2 border-solid border-black">
    </div>

    <div class="border-2 border-solid border-black">
    <h1 class="text-lg font-bold text-center my-2">SEKOLAH BETA HUSTLER <br> EPS. 39 - SCRUM FRAMEWORK</h1>
    </div>

    <div class="bg-[#D90027] text-center text-sm flex text-slate-200 justify-between border-2 border-solid border-black">
      <h1 class="mx-2 my-2">SURABAYA</h1>
      <h1  class="mx-2 my-2">SEPTEMBER 2023</h1>
    </div>
  </div>

  <div class="w-3/12" data-aos="zoom-in" data-aos-delay="250">
    <div style="background-image: url({{ asset('img/rectangle1.png') }});" class="w-full h-52 bg-cover border-2 border-solid border-black">
    </div>

    <div class="border-2 border-solid border-black">
    <h1 class="text-lg font-bold text-center my-2">SEKOLAH BETA HUSTLER <br> EPS. 39 - SCRUM FRAMEWORK</h1>
    </div>

    <div class="bg-[#D90027] text-center text-sm flex text-slate-200 justify-between border-2 border-solid border-black">
      <h1 class="mx-2 my-2">SURABAYA</h1>
      <h1  class="mx-2 my-2">SEPTEMBER 2023</h1>
    </div>
  </div>

  <div class="w-3/12" data-aos="zoom-in">
    <div style="background-image: url({{ asset('img/rectangle1.png') }});" class="w-full h-52 bg-cover border-2 border-solid border-black">
    </div>

    <div class="border-2 border-solid border-black">
    <h1 class="text-lg font-bold text-center my-2">SEKOLAH BETA HUSTLER <br> EPS. 39 - SCRUM FRAMEWORK</h1>
    </div>

    <div class="bg-[#D90027] text-center text-sm flex text-slate-200 justify-between border-2 border-solid border-black">
      <h1 class="mx-2 my-2">SURABAYA</h1>
      <h1  class="mx-2 my-2">SEPTEMBER 2023</h1>
    </div>
  </div>


</div>


<div class="mt-16">
  <h1 class="text-2xl text-[#D90027] text-center font-semibold mb-4">
    FILOSOFI
  </h1>
  <h1 class="text-4xl text-center font-bold mb-5">INKLUSIF dan KOLABORATIF</h1>
  <p class="text-center pb-8">Sejak diinisiasi di tahun 2016, semangat #1000StartupDigital adalah untuk berkolaborasi <br> membuat ekosistem startup Indonesia menjadi inklusif dan kolaboratif.</p>
</div>

<div class="w-full flex gap-10 justify-center">
  <div class="w-3/12">
    <div style="background-image: url({{ asset('img/img1.png') }});" class="w-full h-48 bg-cover">
    </div>

    <div class="">
    <p class="text-[#D90027] mt-2">Gain Knowledge</p>
    <h1 class="text-lg font-bold my-1">Ruang Belajar</h1>
    <p>MARKAS sangat mengedepankan kegunaan ruang untuk menunjang aktivitas penggunanya.</p>
    </div>


  </div>

  <div class="w-3/12">
    <div style="background-image: url({{ asset('img/img2.png') }});" class="w-full h-48 bg-cover">
    </div>

    <div class="">
    <p class="text-[#D90027] mt-2">Gain Knowledge</p>
    <h1 class="text-lg font-bold my-1">Ruang Belajar</h1>
    <p>MARKAS sangat mengedepankan kegunaan ruang untuk menunjang aktivitas penggunanya.</p>
    </div>


  </div>

  <div class="w-3/12">
    <div style="background-image: url({{ asset('img/img3.png') }});" class="w-full h-48 bg-cover">
    </div>

    <div class="">
    <p class="text-[#D90027] mt-2">Gain Knowledge</p>
    <h1 class="text-lg font-bold my-1">Ruang Belajar</h1>
    <p>MARKAS sangat mengedepankan kegunaan ruang untuk menunjang aktivitas penggunanya.</p>
    </div>


  </div>


  </div>

</div>

 <div class="text-center">
    <button class="backbutton py-2 rounded-2xl bg-[#D90027] text-white px-8 text-lg mt-14 mb-16">
    Cari Tahu Lebih
    </button>
  </div>
</div>

<div class="bg-[#D90027]">
  <h1 class="text-white text-3xl py-5 font-bold text-center">
    MARI BERKOLABORASI
  </h1>

  <div class="text-center">
    <button class="py-2 rounded-2xl bg-white text-[#D90027] px-12 text-lg mt-2 mb-7 font-semibold">
    Booking
    </button>
  </div>
</div>

<div style="background-image: url({{ asset('img/bg-texture.png') }});" class="text-center pt-24">

  <div>
  <h1 class="text-xl font-semibold text-[#D90027] mb-6">KARAKTERISTIK</h1>
  <h1 class="text-2xl font-bold pb-6">10 KARAKTER MARKAS</h1>
  <p class="mb-10">Sejak diinisiasi di tahun 2016, semangat #1000StartupDigital adalah untuk berkolaborasi <br> membuat ekosistem startup Indonesia menjadi inklusif dan kolaboratif.</p>
</div>

<div style="background-image: url({{ asset('img/bg-texture.png') }});">
  <div><div class="text-center">
  <button class="py-1 rounded-2xl bg-white text-black px-8 text-lg pt-2 font-semibold border-black  border-2">
    🚀 VISIONARY
  </button>

  <button class="py-1 rounded-2xl bg-white text-black px-8 text-lg pt-2 font-semibold border-black  border-2">
    👟️ EXTRAMILE
  </button>

  <button class="py-1 rounded-2xl bg-white text-black px-8 text-lg pt-2 font-semibold border-black  border-2">
    🧠 STRATEGIC
  </button></div>
  </div>



<div class="text-center">
  <button class="py-1 rounded-2xl bg-white text-black px-8 text-lg mt-3  font-semibold border-black  border-2">
    🏆 GRIT
  </button>

  <button class="py-1 rounded-2xl bg-white text-black px-8 text-lg mt-3  font-semibold border-black  border-2">
    ⚖ INTEGRITY
  </button>

  <button class="py-1 rounded-2xl bg-white text-black px-8 text-lg mt-3  font-semibold border-black  border-2">
    🎯 FOCUSED
  </button>

  <button class="py-1 rounded-2xl bg-white text-black px-8 text-lg mt-3  font-semibold border-black  border-2">
    🚅 AGILE
  </button>
</div>

<div class="text-center">
  <button class="py-1 rounded-2xl bg-white text-black px-8 text-lg mt-3  font-semibold border-black  border-2">
    🔥 PASSION
  </button>

  <button class="py-1 rounded-2xl bg-white text-black px-8 text-lg mt-3  font-semibold border-black  border-2">
    📚 RESOURCEFUL
  </button>

  <button class="py-1 rounded-2xl bg-white text-black px-8 text-lg mt-3  font-semibold border-black  border-2">
    🎨 CREATIVE
  </button>

</div>

</div>

<div class="text-center">
    <button class="backbutton py-2 rounded-2xl bg-[#D90027] text-white px-8 text-lg mt-10 mb-40">
    Cari Tahu Lebih
    </button>
  </div>
</div>

<div style="background-image: url({{ asset('img/bg-texture.png') }});">
  <div style="background-image: url({{ asset('img/shape.png') }});" class="w-full h-[570px] bg-cover">
    <div class="max-w-7xl mx-16 xl:mx-auto">
      <div class="pt-32">
        <h1 class="text-3xl font-semibold text-white">APA KATA MEREKA</h1>
        <p class="text-xl text-white pt-4">⭐ 4.6 | 30 Ulasan di Google</p>
      </div>

    <div class="w-full flex pt-14">
      <div class="w-6/12">
        <div class="text-white">
          <div class="flex items-center">
            <img src="{{ asset('img/profil2.png') }}" alt="" class="w-20 h-20">
            <div class="ml-8">
              <h1 class="font-bold text-2xl">Lexi Handi Nayana</h1>
              <p class="text-slate-200 pt-3">BuddyP2P - Hamburg, Jerman</p>
            </div>

         </div>

        </div>

        <div class="text-white pt-6">
          <h1 class="text-2xl">⭐ ⭐ ⭐ ⭐ ⭐</h1>
          <p class="text-xl text-slate-200 pt-3">Kami memulai perjalanan kami di MARKAS dan <br> tidak pernah menyesalinya. Tempat yang penuh <br> dengan sumber daya dan inspirasi.</p>
        </div>
      </div>

     <div class="w-6/12">
        <div class="text-white">
          <div class="flex items-center">
            <img src="{{ asset('img/profil.png') }}" alt="" class="w-20 h-20">
            <div class="ml-8">
              <h1 class="font-bold text-2xl">David Nasrulloh</h1>
              <p class="text-slate-200 pt-3">Elux Space - Malang, Jawa Timur</p>
            </div>

        </div>

        </div>

        <div class="text-white pt-6">
          <h1 class="text-2xl">⭐ ⭐ ⭐ ⭐ ⭐</h1>
          <p class="text-xl text-slate-200 pt-3">Kami memulai perjalanan kami di MARKAS dan <br> tidak pernah menyesalinya. Tempat yang penuh <br> dengan sumber daya dan inspirasi.</p>
        </div>
      </div>
      </div>
    </div>
</div>

 <div class="text-center pt-24">
  <h1 class="text-3xl font-bold pb-10">KAMI MENUNGGUMU DI MARKAS!</h1>

  <div class="w-fit mx-auto">
    <img src="{{ asset('img/slider1.png') }}" alt="" >
    <img src="{{ asset('img/slider2.png') }}" alt="">
  </div>

   <div class="text-center">
    <button class="backbutton py-3 rounded-2xl bg-[#D90027] text-white px-10 text-lg mt-10 mb-40">
    Kunjungi Instagram Kami
    </button>
  </div>

  <div class="text-center">
    <h1 class="text-3xl font-bold pb-10">PROGRAM AND PARTNER</h1>
    <img src="{{ asset('img/sponsor.png') }}" alt="" class="mx-auto">

    <p class="text-2xl mt-44">Ingin bekerja di tempat yang nyaman, fleksibel, dan penuh inspirasi? </p>
    <p class="text-2xl pt-4">Segera bergabung bersama kami di  <span class="text-[#D90027] text-2xl font-bold ml-2">#MARKAS</span></p>

    <div class="flex justify-center pt-12 pb-24">
    <img src="{{ asset('img/logo.png') }}" alt="">
    </div>
  </div>
</div>

</div>
<div class="mb-16 mt-52">
  <div  class="max-w-7xl mx-16 border-2 border-solid border-black rounded-2xl py-6 px-4 flex bg-white xl:mx-auto">
    <div class="w-5/12 ml-16">
      <h1 class="text-3xl font-bold text-[#D90027] ml-4">MARKAS</h1>
      <p class="ml-4 pt-8">
          MARKAS adalah tempat kolaborasi atau yang <br> lebih dikenal dengan space yang bertujuan <br> menjadi wadah tempat masyarakat melakukan <br> perintisan Startup di kota-kota seluruh <br> Indonesia maupun tempat belajar bagi para <br> peminat teknologi perusahaan digital.
      </p>
    </div>
    <div class="w-6/12 flex gap-24">
      <div class="w-2/12">
        <h1 class="text-lg font-semibold text-[#D90027] ml-4">REGIONAL</h1>
        <p class="ml-4 pt-8 font-bold text-lg">SURABAYA</p>
        <p class="ml-4 pt-5 font-bold text-lg">JAKARTA</p>
        <p class="ml-4 pt-5 font-bold text-lg">BANDUNG</p>
        <p class="ml-4 pt-5 font-bold text-lg">DENPASAR</p>
      </div>

      <div class="w-2/12">
        <h1 class="text-lg font-semibold text-[#D90027] ml-4">CONTACT</h1>
        <p class="ml-4 pt-8 font-bold text-lg">BOOKING</p>
        <p class="ml-4 pt-5 font-bold text-lg">FAQ</p>
      </div>

      <div class="w-2/12">
        <h1 class="text-lg font-semibold text-[#D90027] ml-4">ABOUT</h1>
        <p class="ml-4 pt-8 font-bold text-lg">PHILOSOPHY</p>
        <p class="ml-4 pt-5 font-bold text-lg">EVENTS</p>
        <p class="ml-4 pt-5 font-bold text-lg">CREDITS</p>
      </div>
    </div>
  </div>
</div>

@endsection()
