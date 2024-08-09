<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langon extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nomer',
        
    ];
}
