<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JenisSurat extends Model
{
    protected $table = 'jenis_surat';
    protected $fillable = [
        'jenis_surat', 
    ];
}
