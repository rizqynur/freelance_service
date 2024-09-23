<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_jasa extends Model
{
    use HasFactory;

    protected $table = 'table_jasa';
    protected $fillable = [
        'freelance_id',
        'nama_jasa',
        'harga',
        'gambar'
    ];
}
