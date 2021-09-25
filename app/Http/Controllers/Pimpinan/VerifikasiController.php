<?php

namespace App\Http\Controllers\Pimpinan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PengajuanSurat;
use App\Model\Kinerja;
use App\Model\Disposisi;

class VerifikasiController extends Controller
{
    public function verifikasi_mutasi(Request $request){
        $surat = PengajuanSurat::find($request->id_pengajuan_surat);
        $surat->status = $request->status;
        $surat->save();
        return redirect('pimpinan/p_mutasi?status=disposisi');

    }

    public function verifikasi_kinerja(Request $request){
        $surat = Kinerja::find($request->id_pengajuan_surat);
        $surat->status = $request->status;
        $surat->save();
        return redirect('pimpinan/p_kinerja?status=disposisi');
    }

    public function verifikasi_kenaikan(Request $request){
        $surat = PengajuanSurat::find($request->id_pengajuan_surat);
        $surat->status = $request->status;
        $surat->save();
        $disposisi = new  Disposisi();
        $disposisi->id_user = $surat->id_user;
        $disposisi->keterangan = $request->keterangan;
        $disposisi->save();
        return redirect('pimpinan/p_kenaikan?status=disposisi');
    }
}
