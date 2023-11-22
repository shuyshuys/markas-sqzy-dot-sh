<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Checkout</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="bg-[rgba(255, 255, 255, 1)]">
    <div class="px-20 pt-7">
      <div>
        <button style=" 
          background-color: white; color: black; cursor: pointer; transition: all 0.3s ease-in-out; border: 1px solid black; box-shadow: 0 0 0 0 black;" onmouseover="this.style.transform='translateY(-4px) translateX(-2px)'; this.style.boxShadow='2px 5px 0 0 black';" onmouseout="this.style.transform=''; this.style.boxShadow='';" onmousedown="this.style.transform='translateY(2px) translateX(1px)'; this.style.boxShadow='0 0 0 0 black';" onmouseup="this.style.transform=''; this.style.boxShadow='';" 
          class="px-6 py-3 rounded-2xl text-base">
         Kembali ke Pemilihan Ruangan
        </button>
      </div>

      <div class="flex text-lg mt-8 justify-center font-bold">
        <div class="mr-8"><h1><span class="text-[#D90027]">1 /</span> <span class="text-[#BCBCBC] ml-1">Pilih Tanggal</span></h1></div>
        <div class="mr-8"><h1><span class="text-[#D90027]">2 /</span> <span class="text-black ml-1">Pesan</span></h1></div>
        <div><h1><span class="text-[#D90027] ml-1">3 /</span> <span class="text-[#BCBCBC]">Selesai</span></h1></div>
      </div>

      <div class="mt-8">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label font-bold">Nama</label>
          <input type="email" class="form-control rounded-2xl py-2.5" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label font-bold mb-3">Gender</label>
          <form action="/" class="flex font-bold">
            <div class="form-check mr-6">
              <input type="radio" class="form-check-input" id="radio1" name="optradio" value="male" checked>
              <label class="form-check-label" for="radio1">Male</label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="radio2" name="optradio" value="femele">
              <label class="form-check-label" for="radio2">Femele</label>
            </div>
           </form>
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label font-bold">Email</label>
          <input type="email" class="form-control rounded-2xl py-2.5" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label font-bold">Nomor Telepon</label>
          <input type="email" class="form-control rounded-2xl py-2.5" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label font-bold">Instansi/Komunitas/Perusahaan</label>
          <input type="email" class="form-control rounded-2xl py-2.5" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label font-bold">Jenis Kegiatan</label>
          <input type="email" class="form-control w-3/12 rounded-2xl py-2.5" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label font-bold">Nama Kegiatan</label>
          <input type="email" class="form-control rounded-2xl py-2.5" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label font-bold">Deskripsi Singkat</label>
          <textarea class="form-control rounded-2xl" rows="8" id="comment" name="text"></textarea>
        </div>

        <div class="text-right">
          <button class="backbutton py-2 rounded-2xl bg-[#D90027] text-white px-24 text-lg mt-14 mb-6">
          Pesan
          </button>
        </div>

       
      </div>
      
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>