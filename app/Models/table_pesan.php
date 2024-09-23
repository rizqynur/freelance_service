<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_pesan extends Model
{
    use HasFactory;

    protected $table = 'table_pesan';
    protected $fillable = [
        'freelance_id',
        'jasa_id',
        'tanggal',
        'harga',
    ];
    
}
