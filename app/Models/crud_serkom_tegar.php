<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crud_serkom_tegar extends Model
{
    use HasFactory;
    protected $fillable = [
        'nim',
        'nama',
        'skema',
        'hasil',
        'tanggal_sertifikasi',
    ];
}
