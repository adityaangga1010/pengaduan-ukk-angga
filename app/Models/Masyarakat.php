<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Masyarakat extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'masyarakats';
    protected $fillable = [
        'nik',
        'nama',
        'username',
        'password',
        'telp',
        'jenis_kelamin',
    ];

    public function pengaduan(){
        return $this->hasMany(Pengaduan::class, 'nik', 'nik');
    }
}
