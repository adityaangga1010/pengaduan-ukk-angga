@extends('layouts.MainD')

@section('title', 'Create | Pengaduan')

@section('content')
<div class=" ml-[296px] mr-11 mt-[116px] mx-auto font-jakartasans">
    <div class="bg-putih w-1/2 rounded-xl h-full pt-6 pb-16 px-6">
        <div class=" flex">
            <h1 class=" font-bold">Tambah Pengaduan</h1>
        </div>
        <div class=" mt-11">
            <form action="{{route('routePN.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class=" w-full flex flex-col gap-4">
                    <div class=" flex flex-col gap-3 mb-4">
                        <div class=" w-full flex flex-col gap-2">
                            <label for="image" class=" text-xs">Foto</label>
                            <input type="file" placeholder="Foto" id="image" name="image" class=" w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-keempat focus:outline-none border rounded-lg border-kedua p-[13px]" required>
                        </div>
                        <div class=" w-full flex flex-col gap-2">
                            <label for="kategori" class=" text-xs">kategori</label>
                            <select name="kategori" id="kategori" class="w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-keempat focus:outline-none border rounded-lg border-kedua p-4 appearance-none" required>
                                <option selected disabled value="">Pilih Kategori</option>
                                <option>lingkungan</option>
                                <option>sosial</option>
                            </select>
                        </div>
                        <div class=" w-full flex flex-col gap-2">
                            <label for="isi_laporan" class=" text-xs">Isi laporan</label>
                            <textarea type="text" placeholder="Isi Laporan" id="isi_laporan" name="isi_laporan" class=" w-full placeholder:text-xs text-xs focus:placeholder:text-kedua text-keempat focus:outline-none border rounded-lg border-kedua p-4" required></textarea>
                        </div>
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
