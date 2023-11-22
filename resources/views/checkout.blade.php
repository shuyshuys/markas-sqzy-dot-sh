<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  
  <title>Checkout</title>
  @vite('resources/css/app.css')
 
</head>
<body>
  <div class="bg-white">
    <div class="px-20 pt-7">
      <div>
        <button class="selectbutton px-6 py-3 rounded-2xl text-base">
         Kembali ke Pemilihan Ruangan
        </button>
      </div>

      <div class="flex text-lg mt-8 justify-center font-bold">
        <div class="mr-8"><h1><span class="text-[#D90027]">1 /</span> <span class="text-[#BCBCBC] ml-1">Pilih Tanggal</span></h1></div>
        <div class="mr-8"><h1><span class="text-[#D90027]">2 /</span> <span class="text-[#BCBCBC] ml-1">Pesan</span></h1></div>
        <div><h1><span class="text-[#D90027] ml-1">3 /</span> <span class="text-black">Selesai</span></h1></div>
      </div>

      <div id="paragraf" class="flex flex-col items-center mx-16 pt-28">
        <h1 class="text-4xl font-bold">PESANAN KAMU TELAH TERKIRIM</h1>
        <p class="text-lg font-bold text-center pt-8">Admin MARKAS akan meninjau kegiatan kamu dan akan dikonfirmasi 1x24 jam <br>  melalui email dan nomor telepon yang telah dicantumkan</p>
      </div>

      <div class="flex justify-center mt-28">
        <button class="backbutton py-3 rounded-2xl bg-[#D90027] text-white px-10 text-lg">
         Kembali ke beranda
        </button>
      </div>

      <x-button text="Coba Button" class="mt-28"/>
      
    </div>
  </div>

  <script t>
    import AOS from 'aos';

    AOS.intt();
  </script>
</body>
</html>