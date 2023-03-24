<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><body>
    <section>
        <div>
            <div>
                <div>
                    <span style=" font-size: 16px">Nama petugas: <span style="color: #3d5a80">{{ Auth::guard('petugas')->user()->nama_petugas }}</span></span>
                </div>
                <div class=" flex items-center">
                    <span style="font-size: 16px">Tanggal: <span style="color: #3d5a80">{{ now()->format('D, d M Y ') }}</span></span>
                </div>
            </div>
            <div class="mt-3">
                <table class=" table">
                    <thead style="background: #F4F4F4">
                        <tr>
                            <td>No</td>
                            <td>Tanggal Pengaduan</td>
                            <td>Nik Pelapor</td>
                            <td>Isi Aduan</td>
                            <td>Isi Tanggapan</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tanggapans as $item)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{{$item->getDataPengaduan->tgl_pengaduan}}</td>
                                <td>{{$item->getDataPengaduan->nik}}</td>
                                <td>{{$item->getDataPengaduan->isi_laporan}}</td>
                                <td>{{$item->tanggapan}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>
