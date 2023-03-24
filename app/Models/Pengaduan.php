<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduans';
    protected $fillable = [
        'tgl_pengaduan',
        'nik',
        'kategori',
        'isi_laporan',
        'image',
        'status',
    ];

    public function getDataMasyarakat(){
        return $this->belongsTo(Masyarakat::class, 'nik', 'nik');
    }
    public function getDataTanggapan(){
        return $this->belongsTo(Tanggapan::class, 'id', 'id_pengaduan');
    }
}
