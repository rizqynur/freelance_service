<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelance extends Model
{
    use HasFactory;

    protected $table = "table_freelance";
    protected $fillable = [
        'nama_perusahaan',
        'email',
        'alamat',
        'gambar',
        'bidang',
    ];
}
