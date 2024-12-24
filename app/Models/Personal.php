<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'gambar',
        'role',
        'deskripsi_singkat',
    ];
}
