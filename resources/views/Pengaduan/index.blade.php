@extends('layouts.MainD')

@section('title', 'Dashboard | Pengaduan')

@section('content')
<section class=" ml-[296px] mr-11 mt-[116px] mx-auto font-jakartasans">
    {!! Toastr::message() !!}
    <div class=" bg-putih w-full rounded-xl h-full pt-6 pb-16 px-6">
        <div class=" flex justify-end">
            @if (Auth::guard('masyarakat')->user())
            <a href={{route('routePN.create')}} class=" bg-keempat py-2 hover:bg-opacity-80 duration-300 ease-in-out flex items-center px-4 rounded-full text-xs text-putih gap-1 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                </svg>
                <span>Tambah Pengaduan</span>
            </a>
            @endif
        </div>
        <div class=" mt-11">
            <table class=" w-full flex flex-col gap-4">
                <thead>
                    <tr class=" flex bg-kelima rounded-2xl px-10 py-3 text-xs font-bold">
                        <td class=" w-[17%]">No</td>
                        <td class=" w-[17%]">Tgl pengaduan</td>
                        <td class=" w-[17%] translate-x-12">status</td>
                        <td class=" w-[17%] translate-x-24">Isi laporan</td>
                        <td class=" w-[17%] translate-x-32">foto</td>
                        @if (Auth::guard('masyarakat')->user())
                        <td class=" w-[17%] text-end">Kategori</td>
                        @endif
                        @if (Auth::guard('petugas')->user() != null && Auth::guard('petugas'))
                        <td class=" w-[17%] text-end">Action</td>
                        @endif
                    </tr>
                </thead>
                <tbody class=" flex flex-col gap-4 relative">
                    @foreach ($pengaduans as $item)
                        <tr class=" flex bg-putih border border-kelima rounded-lg px-10 py-4 text-[10px] items-center">
                            <td class=" w-[17%]">{{$loop->index + 1}}</td>
                            <td class=" w-[17%]">{{$item->tgl_pengaduan}}</td>
                            <td class=" w-[17%] translate-x-12">
                                @if ($item->status == '0')
                                    <a class=" font-bold italic text-merah">Pending</a>
                                @elseif($item->status == 'proses')
                                    <a class=" font-bold italic text-biru">Proses</a>
                                @else
                                    <a class=" font-bold italic text-keempat">Selesai</a>
                                @endif
                            </td>
                            <td class=" w-[17%] translate-x-24">{{$item->isi_laporan}}</td>
                            <td class=" w-[17%] translate-x-32"><img class=" w-6 h-6" src="{{asset('img/'.$item->image)}}"></td>
                            @if (Auth::guard('masyarakat')->user())
                            <td class=" w-[17%] text-end">{{$item->kategori}}</td>
                            @endif
                            @if (Auth::guard('petugas')->user() != null && Auth::guard('petugas'))
                            <td class=" w-[17%] justify-end flex">
                                <div class=" cursor-pointer bg-kelima py-2 rounded-lg px-2 group/2 relative" >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-ketiga duration-300 ease-in-out group-hover/2:text-utama">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                    </svg>
                                    <div class=" hidden absolute group-hover/2:flex z-10 rounded-md group-hover/2:bg-putih group-hover/2:drop-shadow-5xl top-full left-0 ">
                                        <div class=" flex flex-col items-start gap-3 py-3 px-4 w-full">
                                            <a href="{{route('routePN.show', $item->id)}}" class=" text-biru text-sm font-bold w-full hover:underline">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
