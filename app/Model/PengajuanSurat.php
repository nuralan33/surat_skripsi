<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    protected $table = 'pengajuan_surat';
    protected $fillable = [
        'no_surat', 
        'id_jenis_surat', 
        'id_user', 
        'tanggal', 
        'keterangan',
        'file',
    ];
    public function Pegawai(){
        return $this->belongsTo('App\User','id_user','id');
    }
    
    public function Jabatan(){
        return $this->belongsTo('App\Model\Jabatan','id_jabatan','id');
    }

    public function Jenis_surat(){
        return $this->belongsTo('App\Model\JenisSurat','id_jenis_surat','id');
    }
}
