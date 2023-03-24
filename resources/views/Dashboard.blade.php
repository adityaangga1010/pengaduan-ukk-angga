@extends('layouts.MainD')

@section('title', 'Dashboard')

@section ('content')
    <section class=" ml-[296px] mr-11 mt-[116px] mx-auto font-jakartasans">
        <div class=" w-full rounded-xl h-full">
            <div class=" flex flex-col gap-8">
                <div class=" flex flex-col gap-1">
                    <h1 class=" font-bold tracking-[1px] text-ketiga text-lg">Dashboard</h1>
                    <h1 class=" font-bold text-ketiga text-xs"> Halo, <span class=" text-utama">{{ Auth::user()->username }}</span></h1>
                </div>
                <span class=" w-full border rounded-full border-kelima"></span>
                @if (Auth::guard('petugas')->user() != null && Auth::guard('petugas')->user())
                <div class=" grid grid-cols-4 gap-4 mt-6">
                    <div class=" bg-putih aspect-video flex items-center justify-center rounded-3xl drop-shadow-4xl relative">
                        <div class=" absolute top-0 -translate-y-6 rounded-full shadow-lg shadow-utama p-4 bg-utama">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-putih">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                            </svg>
                        </div>
                        <div class=" flex items-center translate-y-4 flex-col gap-4">
                            <h1 class=" text-ketiga text-xs">Total Masyarakat</h1>
                            <h1>{{ $totalMasyarakat }}</h1>
                        </div>
                    </div>
                    <div class=" bg-putih aspect-video flex items-center justify-center rounded-3xl drop-shadow-4xl relative">
                        <div class=" absolute top-0 -translate-y-6 rounded-full shadow-lg shadow-merah p-4 bg-merah">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-putih">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </div>
                        <div class=" flex items-center translate-y-4 flex-col gap-4">
                            <h1 class=" text-ketiga text-xs">Total Aduan</h1>
                            <h1>{{$totalAduan}}</h1>
                        </div>
                    </div>
                    <div class=" bg-putih aspect-video flex items-center justify-center rounded-3xl drop-shadow-4xl relative">
                        <div class=" absolute top-0 -translate-y-6 rounded-full shadow-lg shadow-kuning p-4 bg-kuning">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-putih">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                            </svg>
                        </div>
                        <div class=" flex items-center translate-y-4 flex-col gap-4">
                            <h1 class="text-ketiga text-xs">Aduan Proses</h1>
                            <h1 class="">{{$aduanProses}}</h1>
                        </div>
                    </div>
                    <div class=" bg-putih aspect-video flex items-center justify-center rounded-3xl drop-shadow-4xl relative">
                        <div class=" absolute top-0 -translate-y-6 rounded-full shadow-lg shadow-keempat p-4 bg-keempat">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-putih">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                            </svg>
                        </div>
                        <div class=" flex items-center translate-y-4 flex-col gap-4">
                            <h1 class=" text-ketiga text-xs">Aduan Selesai</h1>
                            <h1 class="">{{$aduanSelesai}}</h1>
                        </div>
                    </div>
                </div>
                @endif

                @if (Auth::guard('masyarakat')->user())
                <div class=" w-full rounded-xl bg-putih h-full py-28 mb-[116px] px-10">
                    <div class=" flex justify-between items-start">
                        <div class=" flex flex-col gap-4">
                            <div class=" flex flex-col text-3xl tracking-wider gap-1 font-bold">
                                <h1>Halo, <span class=" text-utama">{{Auth::user()->nama}}</span></h1>
                                <span>Selamat Datang Di Aplikasi</span>
                                <span>Pengaduan Masyarakat Kelurahan</span>
                                <span class=" text-utama">Baranang Siang</span>
                            </div>
                            <div class=" max-w-[400px]">
                                <h1 class=" tracking-wider text-kedua">Ayo berikan keluhan kalian, Agar bisa cepat di tanggani oleh petugas kami , Pesan kami Jangan lupa untuk selalu jujur dalam menjalankan apapun, enjoy!!!!!</h1>
                            </div>
                            <a href="{{route('routePN.create')}}">
                                <button class=" before:bg-putih  before:border-utama border bg-utama flex py-3 px-6 items-center text-sm text-putih hover:text-utama rounded-full overflow-hidden relative cursor-pointer transition-all duration-100 ease-in-out z-[1]  before:inline-block before:translate-y-full before:left-0 before:w-[100%] before:h-[300%] before:absolute before:rounded-full before:z-[-1] before:transition-transform before:ease-in before:duration-300 hover:transition-colors hover:duration-500 hover:ease-in hover:before:-translate-y-0  focus:outline-none">Ayo Berikan Keluhan Kalian !!!</button>
                            </a>
                        </div>
                        <div class="">
                            <img class=" w-96 h-w-96" src="{{asset('img/Banner.svg')}}">
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
@endsection
