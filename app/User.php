<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'id_jabatan',
        'jenis_jabatan',
        'alamat',
        'no_telp',
        'tgl_daftar',
        'ttd'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Jabatan(){
        return $this->belongsTo('App\Model\Jabatan','id_jabatan','id');
    }

    public function Jenis_surat(){
        return $this->belongsTo('App\Model\JenisSurat','id_jenis_surat','id');
    }
}
