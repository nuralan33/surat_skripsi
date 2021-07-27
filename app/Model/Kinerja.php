<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kinerja extends Model
{
    protected $table = 'kinerja';
    protected $fillable = [
        'id_user',
        'alpa',
        'sakit',
        'izin',
        'terlambat',
        'juml_terlambat',
        'dt_siang',
        'juml_dt_siang',
        'pl_cepat',
        'juml_pl_cepat',
        'kualitas_kerja',
        'kuantitas_kerja',
        'inisiatif',
        'disiplin',
        'tanggung_jawab',
        'motivasi',
        'kerjasama',
        'PPT',
        'PD',
        'kepemimpinan',
        'PM',
        'PT',
    ];
    public function Pegawai(){
        return $this->belongsTo('App\User','id_user','id');
    }
    
    public function Jabatan(){
        return $this->belongsTo('App\Model\Jabatan','id_jabatan','id');
    }
}
