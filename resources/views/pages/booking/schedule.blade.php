@extends('partials/body')
@section('content')

<x-tag-title text="Sceduling | MARKAS"/>

<div class="max-w-7xl mx-auto">
   <div>
      <button class="selectbutton px-6 py-2 mt-14 rounded-2xl">
         Kembali ke Pemilihan Ruangan
      </button>
   </div>

   <div class="flex text-lg mt-8 justify-center font-bold">
      <div class="mr-8"><h1><span class="text-[#D90027]">1 /</span> <span class="text-black ml-1">Pilih Tanggal</span></h1></div>
      <div class="mr-8"><h1><span class="text-[#D90027]">2 /</span> <span class="text-[#BCBCBC] ml-1">Pesan</span></h1></div>
      <div><h1><span class="text-[#D90027] ml-1">3 /</span> <span class="text-[#BCBCBC]">Selesai</span></h1></div>
   </div>

   <div class="max-w-sm flex justify-between text-3xl mt-10 mx-auto">
      <div>&lt;</div>
      <div class="font-bold">November 2023</div>
      <div>&gt;</div>
   </div>

   <table class="w-full mt-7 bg-white border-collapse">
      <thead class="bg-[#D90027] text-white font-semibold">
         <tr>
            <th class="p-2 border border-black h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs py-3">
               <span class="xl:block lg:block md:block sm:block hidden">Minggu</span>
            </th>
            <th class="p-2 border border-black h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs py-3">
               <span class="xl:block lg:block md:block sm:block hidden">Senin</span>
            </th>
            <th class="p-2 border border-black h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs py-3">
               <span class="xl:block lg:block md:block sm:block hidden">Selasa</span>
            </th>
            <th class="p-2 border border-black h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs py-3">
               <span class="xl:block lg:block md:block sm:block hidden">Rabu</span>
            </th>
            <th class="p-2 border border-black h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs py-3">
               <span class="xl:block lg:block md:block sm:block hidden">Kamis</span>
            </th>
            <th class="p-2 border border-black h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs py-3">
               <span class="xl:block lg:block md:block sm:block hidden">Jum'at</span>
            </th>
            <th class="p-2 border border-black h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs py-3">
               <span class="xl:block lg:block md:block sm:block hidden">Sabtu</span>
            </th>
         </tr>
      </thead>
      <tbody>
         <!-- line 1 -->
         <tr class="text-center h-20">
            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300 ">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">29</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">30</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">31</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">1</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">2</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">3</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">4</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
         </tr>
         <!-- line 1 -->

         <!-- line 2 -->
         <tr class="text-center h-20">
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">5</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">6</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">7</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">8</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">9</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">10</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">11</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
         </tr>
         <!-- line 2 -->

         <!-- line 3 -->
         <tr class="text-center h-20">
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">12</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">13</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">14</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">15</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">16</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">17</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">18</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
         </tr>
         <!-- line 3 -->

         <!-- line 4 -->
         <tr class="text-center h-20">
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">19</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">20</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">21</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">22</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">23</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">24</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">25</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
         </tr>
         <!-- line 4 -->

         <!-- line 5 -->
         <tr class="text-center h-20">
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">26</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">27</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">28</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">29</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">30</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">1</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
               <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                  <div class="top h-5 w-full">
                     <span class="text-gray-500">2</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
               </div>
            </td>
         </tr>
         <!-- line 5 -->

      </tbody>
   </table>
</div>

<div class="max-w-7xl mx-auto flex justify-end">
   <div class="flex justify-center mt-10 mb-16">
      <a class="backbutton py-3 rounded-2xl bg-[#D90027] text-white px-10 text-lg" href="/home">
         Kembali ke Home
      </a>
   </div>
</div>

@endsection()