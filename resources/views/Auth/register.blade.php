@extends('layouts.MainLR')

@section('title', 'Register')

@section('content')
    <div class=" mx-auto">
        <nav class=" top-0 mx-auto">
            <div class=" px-14 py-3 absolute top-0 h-1/2 w-full bg-utama">
                <div class=" flex justify-between">
                    <a href="{{route('routeLP.landing')}}" class=" flex items-center gap-2">
                        <img class=" w-14 h-14" src="{{asset('img/tes.svg')}}">
                        <h1 class=" text-putih font-bold">Pengaduan BS</h1>
                    </a>
                </div>
            </div>
        </nav>
        <div class=" min-h-screen flex justify-center font-jakartasans">
            <div class=" flex items-center">
                <div class=" drop-shadow-3xl bg-putih rounded-xl w-[500px] p-10 flex flex-col items-center">
                    @foreach ($errors->all() as $item)
                        <small class=" text-merah">{{ $item }}</small>
                    @endforeach
                    <h1 class=" font-medium text-2xl">Daftar</h1>
                    <span class=" text-sm pt-1 text-kedua">Masukkan detail data Anda untuk membuat akun</span>
                    <div class=" w-full pt-8">
                        <form action="{{ route('store.register') }}" method="POST">
                            @csrf
                            <div class=" flex items-center gap-5 mb-5">
                                <div class=" w-1/2">
                                    <label for="username" class=" text-sm text-ketiga">Username</label>
                                    <input id="username" type="text" name="username" placeholder="Username"
                                        class=" text-utama text-sm w-full placeholder:text-sm placeholder:text-ketiga focus:placeholder:text-kedua focus:outline-none mt-2 border border-kedua rounded-md p-3" required>
                                </div>
                                <div class=" w-1/2">
                                    <label for="nama" class=" text-sm text-ketiga">Nama</label>
                                    <input id="nama" type="text" name="nama" placeholder="Name"
                                        class=" text-utama text-sm w-full placeholder:text-sm placeholder:text-ketiga focus:placeholder:text-kedua focus:outline-none mt-2 border border-kedua rounded-md p-3" required>
                                </div>
                            </div>
                            <div class=" flex items-center gap-5 mb-5">
                                <div class=" w-1/2">
                                    <label for="nik" class=" text-sm text-ketiga">Nik</label>
                                    <input id="nik" type="number" name="nik" placeholder="Nik"
                                        class=" text-utama text-sm w-full placeholder:text-sm placeholder:text-ketiga focus:placeholder:text-kedua focus:outline-none mt-2 border border-kedua rounded-md p-3" required>
                                </div>
                                <div class=" w-1/2">
                                    <label for="telp" class=" text-sm text-ketiga">Telp</label>
                                    <input id="telp" type="number" name="telp" placeholder="Telp"
                                        class=" text-utama text-sm w-full placeholder:text-sm placeholder:text-ketiga focus:placeholder:text-kedua focus:outline-none mt-2 border border-kedua rounded-md p-3" required>
                                </div>
                            </div>
                            <div class=" flex items-center gap-5 mb-5">
                                <div class="w-1/2">
                                    <label for="password"
                                        class=" text-sm text-ketiga duration-300 ease-in-out">Password</label>
                                    <input id="password" name="password" type="password" placeholder="Password"
                                        class=" text-utama text-sm w-full placeholder:text-sm placeholder:text-ketiga focus:placeholder:text-kedua focus:outline-none mt-2 border border-kedua rounded-md p-3" required>
                                </div>
                                <div class=" w-1/2">
                                    <label for="jenis_kelamin" class=" text-sm text-ketiga">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class=" text-ketiga text-sm w-full focus:outline-none mt-2 border border-kedua rounded-md p-3 appearance-none">
                                        <option selected disabled>Jenis Kelamin</option>
                                        <option value="perempuan">Perempuan</option>
                                        <option value="laki-laki">Laki-laki</option>
                                    </select>
                                </div>
                            </div>
                            <button class=" hover:bg-opacity-80 duration-300 ease-in-out bg-utama w-full text-putih py-3 mb-4 rounded-md">Register</button>
                            <div class=" flex justify-center">
                                <h1 class=" text-sm">Sudah memiliki akun? <a href="{{ route('route.login') }}"
                                        class=" text-utama hover:underline">Login</a></h1>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
