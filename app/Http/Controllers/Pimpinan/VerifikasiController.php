<?php

namespace App\Http\Controllers\Pimpinan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PengajuanSurat;
use App\Model\Kinerja;

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
        $surat->keterangan = $request->keterangan;
        $surat->save();
        return redirect('pimpinan/p_kinerja?status=disposisi');
    }

    public function verifikasi_kenaikan(Request $request){
        $surat = PengajuanSurat::find($request->id_pengajuan_surat);
        $surat->status = $request->status;
        $surat->keterangan = $request->keterangan;
        $surat->save();
        return redirect('pimpinan/p_kenaikan?status=disposisi');
    }
}
