<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('img/tes.svg')}}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    @vite('resources/css/app.css')

</head>
<body class=" bg-[#FBFAFA]">
    {{-- Sidebar --}}
    <div class=" absolute top-0 left-0 bottom-0 z-10">
        <div class=" w-64 drop-shadow-4xl bg-putih min-h-screen fixed font-jakartasans">
            <div class=" flex flex-col pl-10 pt-9">
                <div class=" flex items-center gap-2">
                    <img class=" w-7 h-7" src="{{asset('img/tes.svg')}}">
                    <h1 class=" pl-[3px] font-bold tracking-wider">Pengaduan <span class=" text-utama">BS</span></h1>
                </div>
                <div class=" flex flex-col pt-14">
                    <h1 class=" pl-[3px] font-bold">Main Menu</h1>
                    <div class=" flex flex-col pt-9 ">
                        <a href="{{route('masyarakat.dashboard')}}" class="{{ Route::is('masyarakat.dashboard') ? 'bg-kelima border-r border-utama' : '' }} gap-3 mb-6 rounded-l-xl hover:border-r hover:border-r-utama flex group active:bg-kelima hover:bg-kelima py-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" {{ Route::is('masyarakat.dashboard') ? 'text-utama' : '' }} w-6 h-6 text-ketiga group-hover:text-utama">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
                            </svg>
                            <h1 class="{{ Route::is('masyarakat.dashboard') ? 'text-utama' : '' }} group-hover:text-utama text-xs font-bold text-ketiga tracking-[0.02em]">Dashboard</h1>
                        </a>
                        @if (Auth::guard('petugas')->user() != null && Auth::guard('petugas')->user()->level=='admin')
                        <a href="{{route('routeP.index')}}" class="{{ Route::is('routeP.index') ? 'bg-kelima border-r border-utama' : '' }} gap-3 mb-6 rounded-l-xl hover:border-r hover:border-r-utama group hover:bg-kelima py-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{ Route::is('routeP.index') ? 'text-utama' : '' }} w-6 h-6 text-ketiga group-hover:text-utama">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>
                            <h1 class="{{ Route::is('routeP.index') ? 'text-utama' : '' }} group-hover:text-utama text-xs font-bold text-ketiga tracking-[0.02em]">Petugas</h1>
                        </a>
                        <a href="{{route('routeM.index')}}" class="{{ Route::is('routeM.index') ? 'bg-kelima border-r border-utama' : '' }} gap-3 mb-6 rounded-l-xl hover:border-r hover:border-r-utama group hover:bg-kelima py-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{ Route::is('routeM.index') ? 'text-utama' : '' }} w-6 h-6 text-ketiga group-hover:text-utama">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                            </svg>
                            <h1 class="{{ Route::is('routeM.index') ? 'text-utama' : '' }} group-hover:text-utama text-xs font-bold text-ketiga tracking-[0.02em]">Masyarakat</h1>
                        </a>
                        <a href="{{route('routePN.index')}}" class="{{ Route::is('routePN.index') ? 'bg-kelima border-r border-utama' : '' }} gap-3 group hover:bg-kelima py-2 mb-6 rounded-l-xl hover:border-r hover:border-r-utama flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{ Route::is('routePN.index') ? 'text-utama' : '' }} w-6 h-6 text-ketiga group-hover:text-utama">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                            <h1 class="{{ Route::is('routePN.index') ? 'text-utama' : '' }} group-hover:text-utama text-xs font-bold text-ketiga tracking-[0.02em]">Pengaduan</h1>
                        </a>
                        <a href="{{route('routeT.index')}}" class="{{ Route::is('routeT.index') ? 'bg-kelima border-r border-utama' : '' }} gap-3 group hover:bg-kelima py-2 mb-6 rounded-l-xl hover:border-r hover:border-r-utama flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{ Route::is('routeT.index') ? 'text-utama' : '' }} w-6 h-6 text-ketiga group-hover:text-utama">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                            </svg>
                            <h1 class="{{ Route::is('routeT.index') ? 'text-utama' : '' }} group-hover:text-utama text-xs font-bold text-ketiga tracking-[0.02em]">Tanggapan</h1>
                        </a>
                        @endif

                        @if (Auth::guard('masyarakat')->user())
                        <a href="{{route('routePN.index')}}" class="{{ Route::is('routePN.index') ? 'bg-kelima border-r border-utama' : '' }} gap-3 group hover:bg-kelima py-2 mb-6 rounded-l-xl hover:border-r hover:border-r-utama flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{ Route::is('routePN.index') ? 'text-utama' : '' }} w-6 h-6 text-ketiga group-hover:text-utama">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                            <h1 class="{{ Route::is('routePN.index') ? 'text-utama' : '' }} group-hover:text-utama text-xs font-bold text-ketiga tracking-[0.02em]">Pengaduan</h1>
                        </a>
                        @endif

                        @if (Auth::guard('petugas')->user() != null && Auth::guard('petugas')->user()->level=='petugas')
                            <a href="{{route('routePN.index')}}" class="{{ Route::is('routePN.index') ? 'bg-kelima border-r border-utama' : '' }} gap-3 group hover:bg-kelima py-2 mb-6 rounded-l-xl hover:border-r hover:border-r-utama flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{ Route::is('routePN.index') ? 'text-utama' : '' }} w-6 h-6 text-ketiga group-hover:text-utama">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                                <h1 class="{{ Route::is('routePN.index') ? 'text-utama' : '' }} group-hover:text-utama text-xs font-bold text-ketiga tracking-[0.02em]">Pengaduan</h1>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Navbar --}}
    <div class=" absolute top-0 left-0 right-0">
        <div class=" w-full fixed h-24 bg-putih flex items-center justify-between">
            <div class=" ml-[296px] flex gap-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                </svg>
                {{-- <span class=" font-bold">{{ Auth::user()->username }}</span> --}}
            </div>
            <div class=" flex">
                <button id="hamburger" name="hamburger" type="button" class=" flex items-center gap-1 mr-10">
                    <span class=" w-8 h-8 rounded-full">
                        <img src={{asset('img/user.svg')}}>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-ketiga">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>

                <nav id="navMenu" class=" hidden absolute bg-putih drop-shadow-5xl w-full max-w-[150px] rounded-md right-11 top-[90%]">
                    <div class=" flex flex-col my-2 mx-3">
                        <div class=" flex items-center ">
                            <div class=" group flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-kedua group-hover:text-utama duration-300 ease-in">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                </svg>
                                <a class=" group-hover:text-utama duration-300 text-sm text-kedua" href="{{route('logout')}}">Keluar</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    @yield('content')
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
