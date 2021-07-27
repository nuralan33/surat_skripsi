<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    protected $table = 'disposisi';
    protected $fillable = [
        'id_pengajuan_surat', 
        'id_user',
    ];

    public function Pegawai(){
        return $this->belongsTo('App\User','id_user','id');
    }
    
    public function Jabatan(){
        return $this->belongsTo('App\Model\Jabatan','id_jabatan','id');
    }
}
