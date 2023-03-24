@extends('layouts.MainD')

@section('title', 'Detail | Pengaduan')

@section('content')
<div class=" ml-[296px] mr-11 mt-[116px] mx-auto font-jakartasans">
    <div class=" flex  justify-between gap-5 items-start">
        <div class=" bg-putih w-full rounded-xl h-full pt-6 pb-16 px-6">
            <div class=" flex">
                <h1 class=" font-bold">Detail Pengaduan</h1>
            </div>
            <div class=" mt-11">
                <div class=" border border-kelima rounded-xl p-4 flex flex-col gap-6">
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Nik <span>:</span></h1>
                        <h1 class=" text-utama">{{$pengaduans->getDataMasyarakat->nik}}</h1>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Tgl Pengaduan <span>:</span></h1>
                        <h1 class=" text-utama">{{$pengaduans->tgl_pengaduan}}</h1>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Kategori <span>:</span></h1>
                        <h1 class=" text-utama">{{$pengaduans->kategori}}</h1>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Isi Laporan <span>:</span></h1>
                        <h1 class=" text-utama">{{$pengaduans->isi_laporan}}</h1>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Image <span>:</span></h1>
                        <img class=" w-7 h-7" src="{{asset('img/'.$pengaduans->image)}}">
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Status <span>:</span></h1>
                        @if ($pengaduans->status == '0')
                            <a class=" font-bold italic text-merah">Pending</a>
                        @elseif($pengaduans->status == 'proses')
                            <a class=" font-bold italic text-biru">Proses</a>
                        @else
                            <a class=" font-bold italic text-keempat">Selesai</a>
                        @endif
                    </div>
                    <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                        <h1>Hapus Pengaduan <span>:</span></h1>
                        <form action="{{route('routePN.destroy', ['id_pengaduan' =>$pengaduans->id])}}">
                            @csrf
                            @method('GET')
                            <button class=" bg-merah text-putih px-4 duration-300 ease-in-out hover:bg-opacity-80 text-sm py-1 rounded-full">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=" bg-putih w-full rounded-xl h-full pt-6 pb-16 px-6">
            <div class=" flex flex-col">
                <h1 class=" font-bold">Tanggapan Petugas</h1>
                <form action="{{route('routeT.store', $pengaduans->id)}}" method="POST" class=" flex flex-col mt-11 gap-4">
                    @csrf
                    @method('PUT')
                    <div class=" flex flex-col gap-2 relative">
                        <label for="status" class=" text-sm">Status</label>
                        <select name="status" id="status" class=" w-full rounded-md p-3 border border-kelima appearance-none text-sm">
                            <option selected disabled value="">Pilih Status</option>
                            <option {{$pengaduans->status == 'proses' ? 'selected' : ''}} value="proses">Proses</option>
                            <option {{$pengaduans->status == 'selesai' ? 'selected' : ''}} value="selesai">Selesai</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 absolute right-0 translate-y-10 -translate-x-2">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class=" flex justify-start flex-col items-start gap-2">
                        <label for="tanggapan" class=" text-sm">Tanggapan</label>
                        <textarea type="text" placeholder="Isi Tanggapan" id="tanggapan" name="tanggapan" class=" rounded-md w-full p-3 text-sm border border-kelima">
                            @if (isset($tanggapan))
                                {{$tanggapan->tanggapan}}
                            @endif
                        </textarea>
                    </div>
                    <button class=" bg-merah p-2 rounded-md text-putih">Submit</button>
                </form>
            </div>  
        </div>
    </div>
</div>
@endsection
