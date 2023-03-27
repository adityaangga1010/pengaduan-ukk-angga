@extends('layouts.MainLR')

@section('title', 'LandingPage | Pengaduan')

@section('content')
    <div class=" min-h-screen ">
        {!! Toastr::message() !!}
        <nav class=" mx-auto">
            <div class=" px-14 py-3 bg-utama">
                <div class=" flex justify-between">
                    <div class=" flex items-center gap-2">
                        <img class=" w-14 h-14" src="{{asset('img/tes.svg')}}">
                        <h1 class=" text-putih font-bold">Pengaduan BS</h1>
                    </div>
                    <div class=" flex items-center gap-4">
                        <a href="{{route('route.login')}}" class=" hover:underline text-putih text-sm">Masuk</a>
                        <a href="{{route('route.register')}}" class=" before:bg-putih gap-2  before:border-utama border bg-utama flex py-1 px-3 items-center text-sm text-putih hover:text-utama rounded-full overflow-hidden relative cursor-pointer transition-all duration-100 ease-in-out z-[1]  before:inline-block before:translate-y-full before:left-0 before:w-[100%] before:h-[300%] before:absolute before:rounded-full before:z-[-1] before:transition-transform before:ease-in before:duration-300 hover:transition-colors hover:duration-500 hover:ease-in hover:before:-translate-y-0  focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M15.988 3.012A2.25 2.25 0 0118 5.25v6.5A2.25 2.25 0 0115.75 14H13.5v-3.379a3 3 0 00-.879-2.121l-3.12-3.121a3 3 0 00-1.402-.791 2.252 2.252 0 011.913-1.576A2.25 2.25 0 0112.25 1h1.5a2.25 2.25 0 012.238 2.012zM11.5 3.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75v.25h-3v-.25z" clip-rule="evenodd" />
                                <path d="M3.5 6A1.5 1.5 0 002 7.5v9A1.5 1.5 0 003.5 18h7a1.5 1.5 0 001.5-1.5v-5.879a1.5 1.5 0 00-.44-1.06L8.44 6.439A1.5 1.5 0 007.378 6H3.5z" />
                            </svg>
                            <h1>Daftar</h1>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <main class=" mx-auto pt-24">
            <div class=" flex justify-between">
                <div class=" max-w-[550px] pl-14 flex flex-col gap-4">
                    <h1 class=" text-4xl font-bold tracking-wide leading-normal">Selamat Datang Di Aplikasi Pengaduan Masyarakat <span class=" text-utama">Baranang Siang</span></h1>
                    <span class="">Ayo berikan keluhan kalian, Agar bisa cepat di tanggani oleh petugas kami , Pesan kami Jangan lupa untuk selalu jujur dalam menjalankan apapun, enjoy!!!!!</span>
                    <div class=" pt-4">
                        <span class=" bg-utama text-putih px-6 py-3 text-sm rounded-full">Total Pengaduan : {{$totalAduan}}</span>
                    </div>
                </div>
                <div class=" -translate-y-10 -translate-x-1">
                    <img src="{{asset('img/Landing.svg')}}">
                </div>
            </div>
            <div class=" grid grid-cols-3 px-14 gap-9">
                <div class=" w-full h-44 border border-kedua rounded-lg flex flex-col">
                    <div class=" bg-merah rounded-t-lg flex pl-9 py-3 gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-putih">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                        <h1 class=" text-putih">Tulis Laporan</h1>
                    </div>
                    <div class=" px-9 h-full flex items-center">
                        <h1>Laporkan keluhan Anda dengan jelas dan lengkap</h1>
                    </div>
                </div>
                <div class=" w-full h-44 border border-kedua rounded-lg flex flex-col">
                    <div class=" bg-kuning rounded-t-lg flex pl-9 py-3 gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-putih">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                        </svg>
                        <h1 class=" text-putih">Proses tindak lanjut dan tanggapan</h1>
                    </div>
                    <div class=" px-9 h-full flex items-center">
                        <h1>Pihak instansi akan menindaklanjuti dan menanggapi laporan Anda</h1>
                    </div>
                </div>
                <div class=" w-full h-44 border border-kedua rounded-lg flex flex-col">
                    <div class=" bg-keempat rounded-t-lg flex pl-9 py-3 gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-putih">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                        <h1 class=" text-putih">Selesai</h1>
                    </div>
                    <div class=" px-9 h-full flex items-center">
                        <h1>Laporan Anda akan terus ditindaklanjuti hingga selesai</h1>
                    </div>
                </div>
            </div>
            <div class=" px-14 mt-24 bg-kelima rounded-lg pt-5 py-20">
                <div class=" flex flex-col mb-4">
                    <span class=" tracking-[2px] text-center class font-medium text-ketiga">PENGADUAN</span>
                </div>
                <div class=" grid grid-cols-3 gap-10">
                    <div class=" flex flex-col ">
                        <div class=" border border-kedua rounded-lg gap-5 flex flex-col w-full h-full">
                            <div class=" pl-9 flex gap-2 py-3 bg-merah rounded-t-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-putih">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <h1 class=" text-putih">Pengaduan Belum Ditanggapi</h1>
                            </div>
                            @foreach ($PengaduanPending as $item)
                            <div class=" flex flex-col gap-4 px-9 w-full mb-4">
                                <div class=" border rounded-lg border-kedua">
                                    <div class=" w-full h-full border-b-kedua">
                                        <img class=" border-b border-kedua rounded-t-lg w-full h-36" src="{{asset('img/'.$item->image)}}" alt="">
                                        <div class=" flex flex-col gap-2 px-2 py-2">
                                            <div class=" flex justify-center">
                                                <span class=" bg-merah px-3 py-1 rounded-full text-xs text-putih">Pending</span>
                                            </div>
                                            <h1>Nama Pengaduan : {{$item->getDataMasyarakat->nama}}</h1>
                                            <h1 class=" text-kedua">Isi Laporan : {{$item->isi_laporan}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class=" flex flex-col ">
                        <div class=" border border-kedua rounded-lg gap-5 flex flex-col w-full h-full">
                            <div class=" pl-9 flex gap-2 py-3 bg-kuning rounded-t-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-putih">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                                </svg>
                                <h1 class=" text-putih">Pengaduan Diproses</h1>
                            </div>
                            @foreach ($PengaduanProses as $item)
                            <div class=" flex flex-col gap-4 px-9 w-full mb-4">
                                <div class=" border rounded-lg border-kedua">
                                    <div class=" w-full h-full border-b-kedua">
                                        <img class=" border-b border-kedua rounded-t-lg w-full h-36" src="{{asset('img/'.$item->image)}}" alt="">
                                        <div class=" flex flex-col gap-2 px-2 py-2">
                                            <div class=" flex justify-center">
                                                <span class=" bg-kuning px-3 py-1 rounded-full text-xs text-putih">Proses</span>
                                            </div>
                                            <h1>Nama Pengaduan : {{$item->getDataMasyarakat->nama}}</h1>
                                            <h1 class=" text-kedua">Tanggal Pengaduan : {{$item->tgl_pengaduan}}</h1>
                                            <h1 class=" text-kedua">Tanggal Proses : {{$item->getDataTanggapan->tgl_tanggapan}}</h1>
                                            <h1 class=" text-kedua">Isi Laporan : {{$item->isi_laporan}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class=" flex flex-col ">
                        <div class=" border border-kedua rounded-lg gap-5 flex flex-col w-full h-full">
                            <div class=" pl-9 flex gap-2 py-3 bg-keempat rounded-t-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-putih">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <h1 class=" text-putih">Pengaduan Selesai</h1>
                            </div>
                            @foreach ($PengaduanSelesai as $item)
                            <div class=" flex flex-col gap-4 px-9 w-full mb-4">
                                <div class=" border rounded-lg border-kedua">
                                    <div class=" w-full h-full border-b-kedua">
                                        <img class=" border-b border-kedua rounded-t-lg w-full h-36" src="{{asset('img/'.$item->image)}}" alt="">
                                        <div class=" flex flex-col gap-2 px-2 py-2">
                                            <div class=" flex justify-center">
                                                <span class=" bg-keempat px-3 py-1 rounded-full text-xs text-putih">Selesai</span>
                                            </div>
                                            <h1>Nama Pengaduan : {{$item->getDataMasyarakat->nama}}</h1>
                                            <h1 class=" text-kedua">Tanggal Pengaduan : {{$item->tgl_pengaduan}}</h1>
                                            <h1 class=" text-kedua">Tanggal Selesai : {{$item->getDataTanggapan->tgl_tanggapan}}</h1>
                                            <h1 class=" text-kedua">Isi Laporan : {{$item->isi_laporan}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class=" bg-biru flex justify-center items-center py-9">
            <h1 class=" text-putih">&copy; Copyright 2023 Pengaduan-Baranang-Siang-Bogor Allright Reserved.</h1>
        </footer>
    </div>
@endsection
