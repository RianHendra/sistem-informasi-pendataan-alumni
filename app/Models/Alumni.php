<?php

namespace App\Models;

use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = ['nama','gambar','tahun_lulus', 'pekerjaan', 'tempat_bekerja_sekarang', 'deskripsi_singkat', 'email', 'telepon', 'alamat', 'jurusan_id'];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }


}
