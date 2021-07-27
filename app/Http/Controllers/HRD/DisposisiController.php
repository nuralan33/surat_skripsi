<?php

namespace App\Http\Controllers\HRD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Model\PengajuanSurat;
use App\Model\Disposisi;

class DisposisiController extends Controller
{
    public function disposisi_mutasi($id){
        $pegawai = User::all();
        $pengajuan_surat = PengajuanSurat::find($id);
        return view('hrd.pengajuan_surat.tujuan.mutasi.disposisi',compact('pegawai','pengajuan_surat'));
    }

    public function store(Request $request){
        $input = $request->all();
        $simpan = Disposisi::create($input);
        
        $surat = PengajuanSurat::find($request->id_pengajuan_surat);
        $surat->status = '1';
        $surat->save();
        
        return redirect('hrd/h_tujuan/mutasi?status=disposisi');

    }
    public function verifikasi(Request $request){
        $surat = PengajuanSurat::find($request->id_pengajuan_surat);
        $surat->status = $request->status;
        $surat->save();
        return redirect('hrd/h_tujuan/izin?status=disposisi');

    }

    
   
}