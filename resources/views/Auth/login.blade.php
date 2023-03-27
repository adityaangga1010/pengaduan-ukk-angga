@extends('layouts.MainLR')

@section('title', 'Login')

@section('content')
    <div class=" mx-auto">
        <nav class=" mx-auto">
            <div class=" px-14 py-3 absolute top-0 h-1/2 w-full bg-utama">
                <div class=" flex justify-between">
                    <a href="{{route('routeLP.landing')}}" class=" flex items-center gap-2">
                        <img class=" w-14 h-14" src="{{asset('img/tes.svg')}}">
                        <h1 class=" text-putih font-bold">Pengaduan BS</h1>
                    </a>
                </div>
            </div>
        </nav>
        {!! Toastr::message() !!}
        <div class=" min-h-screen flex justify-center font-jakartasans">
            <div class=" flex items-center">
                <div class=" drop-shadow-3xl bg-putih rounded-xl w-[500px] p-10 flex flex-col items-center">
                    {{-- @foreach ($errors->all() as $item)
                        <h1 class=" top-0 absolute font-bold text-merah">Login Gagal !!!</h1>
                    @endforeach --}}
                    <h1 class=" font-medium text-2xl">Masuk</h1>
                    <span class=" text-sm pt-1 text-kedua">Anda sudah memiliki akun? Silahkan Masuk</span>
                    <div class=" w-full pt-8">
                        <form action="{{route('authenticate')}}" method="POST">
                            @csrf
                            <div class=" mb-5">
                                <label for="username" class=" text-sm text-ketiga">Username</label>
                                <input id="username" type="username" name="username" placeholder="Username"
                                    class=" text-utama text-sm w-full placeholder:text-sm placeholder:text-ketiga focus:placeholder:text-kedua focus:outline-none mt-2 border border-kedua rounded-md p-3" required>
                            </div>
                            <div class=" mb-5">
                                <label for="password" class=" text-sm text-ketiga duration-300 ease-in-out">Password</label>
                                <input id="password" name="password" type="password" placeholder="Password"
                                    class=" text-utama text-sm w-full placeholder:text-sm placeholder:text-ketiga focus:placeholder:text-kedua focus:outline-none mt-2 border border-kedua rounded-md p-3" required>
                            </div>
                            <button type="submit" class=" hover:bg-opacity-80 duration-300 ease-in-out bg-utama w-full text-putih py-3 mb-5 rounded-md">Masuk</button>
                            <div class=" flex justify-center">
                                <h1 class=" text-sm">Belum Memiliki Akun? <a href="{{route('route.register')}}" class=" text-utama hover:underline">Daftar</a></h1>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

