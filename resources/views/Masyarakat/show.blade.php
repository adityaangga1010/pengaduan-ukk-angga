@extends('layouts.MainD')

@section('title', 'Detail | Masyarakat')

@section('content')
    <div class=" ml-[296px] mr-11 mt-[116px] mx-auto font-jakartasans">
        <div class=" bg-putih w-1/2 rounded-xl h-full pt-6 pb-16 px-6">
            <div class=" flex">
                <h1 class=" font-bold">Detail Masyarakat</h1>
            </div>
            <div class=" mt-11">
                @foreach ( $masyarakats as $item )
                    <div class=" border border-kelima rounded-xl p-4 flex flex-col gap-6">
                        <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                            <h1>Nik <span>:</span></h1>
                            <h1 class=" text-utama">{{$item->nik}}</h1>
                        </div>
                        <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                            <h1>Nama <span>:</span></h1>
                            <h1 class=" text-utama">{{$item->nama}}</h1>
                        </div>
                        <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                            <h1>Username <span>:</span></h1>
                            <h1 class=" text-utama">{{$item->username}}</h1>
                        </div>
                        <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                            <h1>Telp <span>:</span></h1>
                            <h1 class=" text-utama">{{$item->telp}}</h1>
                        </div>
                        <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                            <h1>Jenis Kelamin <span>:</span></h1>
                            <h1 class=" text-utama">{{$item->jenis_kelamin}}</h1>
                        </div>
                        <div class="flex items-center justify-between border-b pb-3 border-b-kelima">
                            <h1>Hapus Masyarakat <span>:</span></h1>
                            <form action="{{route('routeM.destroy', ['id_masyarakat' =>$item->id])}}">
                                @csrf
                                @method('GET')
                                <button class=" bg-merah text-putih px-4 duration-300 ease-in-out hover:bg-opacity-80 text-sm py-1 rounded-full">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
