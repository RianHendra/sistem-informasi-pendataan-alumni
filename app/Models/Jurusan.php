<?php

namespace App\Models;

use App\Models\Alumni;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_jurusan'];

    public function alumni()
    {
        return $this->hasMany(Alumni::class, 'jurusan_id');
    }
}
