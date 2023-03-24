@extends('layouts.MainD')

@section('title', 'Create | Petugas')

@section('content')
    <div class=" ml-[296px] mr-11 mt-[116px] mx-auto font-jakartasans">
        <div class="bg-putih w-full rounded-xl h-full pt-6 pb-16 px-6">
            <div class=" flex">
                <h1 class=" font-bold">Tambah Petugas</h1>
            </div>
            <div class=" mt-11">
                <form action="{{route('routeP.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class=" w-full flex flex-col gap-4">
                        <div class=" flex items-center gap-3 mb-4">
                            <div class=" w-1/2 flex flex-col gap-2">
                                <label for="nama_petugas" class=" text-xs">Nama Petuugas</label>
                                <input type="text" placeholder="Nama Petuugas" id="nama_petugas" name="nama_petugas" class=" w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-keempat focus:outline-none border rounded-lg border-kedua p-4" required>
                            </div>
                            <div class=" w-1/2 flex flex-col gap-2">
                                <label for="username" class=" text-xs">Username</label>
                                <input type="text" placeholder="Username" id="username" name="username" class=" w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-keempat focus:outline-none border rounded-lg border-kedua p-4" required>
                            </div>
                        </div>
                        <div class=" flex items-center gap-3 mb-4">
                            <div class=" w-1/2 flex flex-col gap-2">
                                <label for="telp" class=" text-xs">Telp</label>
                                <input type="number" placeholder="Telp" id="telp" name="telp" class=" w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-keempat focus:outline-none border rounded-lg border-kedua p-4" required>
                            </div>
                            <div class=" w-1/2 flex flex-col gap-2 relative">
                                <label for="Level" class=" text-xs">Level</label>
                                <select name="level" id="" class="w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-keempat focus:outline-none border rounded-lg border-kedua p-4 appearance-none" required>
                                    <option selected disabled value="">Pilih Petugas</option>
                                    <option>admin</option>
                                    <option>petugas</option>
                                </select>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 absolute right-0 translate-y-10 -translate-x-4 text-keempat">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-col flex gap-2 mb-4">
                            <label for="password" class=" text-xs">Password</label>
                            <input type="password" placeholder="Password" id="password" name="password" class=" w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-keempat focus:outline-none border rounded-lg border-kedua p-4" required>
                        </div>
                        <button type="submit" class=" flex items-center justify-center bg-keempat text-putih p-4 gap-1 duration-300 ease-in-out hover:bg-opacity-80 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                            <span>Create</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
