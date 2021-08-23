<?php

namespace App\Http\Controllers\Pimpinan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PengajuanSurat;
use App\User;
use Carbon;
use App\Model\Disposisi;
use App\Model\JenisSurat;
use App\Model\Kinerja;

class TujuanSuratController extends Controller
{
    public function index()
    {
        $no = 1;
        $jenis_surat = JenisSurat::all();
        $izin = PengajuanSurat::where('id_jenis_surat', '1')->count();
        $mutasi = PengajuanSurat::where('id_jenis_surat', '2')->count();
        $kenaikan = PengajuanSurat::where('id_jenis_surat', '3')->count();
        $kinerja = PengajuanSurat::where('id_jenis_surat', '4')->count();
        return view('pimpinan.jenis_surat.index', compact('izin', 'no', 'mutasi', 'kenaikan', 'kinerja'));
    }

    public function surat_izin()
    {
        $no = 1;
        $pengajuan_surat = PengajuanSurat::where('id_jenis_surat', '1')->orderBy('id', 'DESC')->get();
        return view('pimpinan.pengajuan_surat.tujuan.izin.index', compact('pengajuan_surat', 'no'));
    }

    public function mutasi()
    {
        $no = 1;
        $pengajuan_surat = PengajuanSurat::where('id_jenis_surat', '2')->orderBy('id', 'DESC')->get();
        return view('pimpinan.pengajuan_surat.tujuan.mutasi.index', compact('pengajuan_surat', 'no'));
    }

    public function kinerja()
    {
        $no = 1;
        $kinerja = Kinerja::all();
        return view('admin.pengajuan_surat.tujuan.kinerja.index', compact('kinerja', 'no'));
    }

    public function kenaikan()
    {
        $no = 1;
        $pengajuan_surat = PengajuanSurat::where('id_jenis_surat', '3')->orderBy('id', 'DESC')->get();
        return view('pimpinan.pengajuan_surat.tujuan.kenaikan.index', compact('pengajuan_surat', 'no'));
    }

   
}
