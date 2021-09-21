<?php

namespace App\Http\Controllers\HRD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PengajuanSurat;
use App\User;
use Carbon;
use App\Model\Disposisi;
use App\Model\JenisSurat;
use App\Model\Kinerja;
use Illuminate\Support\Facades\DB;
class TujuanController extends Controller
{
    public function index()
    {
        $no = 1;
        $jenis_surat = JenisSurat::all();
        $izin = PengajuanSurat::where('id_jenis_surat', '1')->count();
        $mutasi = PengajuanSurat::where('id_jenis_surat', '2')->count();
        $kenaikan = PengajuanSurat::where('id_jenis_surat', '3')->count();
        $kinerja = Kinerja::all()->count();
        return view('hrd.jenis_surat.index', compact('izin', 'no', 'mutasi', 'kenaikan', 'kinerja'));
    }

    public function surat_izin()
    {
        $no = 1;
        $disposisi = Disposisi::all();
        $pengajuan_surat = PengajuanSurat::where('id_jenis_surat', '1')->orderBy('id', 'DESC')->get();
        return view('hrd.pengajuan_surat.tujuan.izin.index', compact('pengajuan_surat', 'no', 'disposisi'));
    }

    public function surat_izin_create()
    {
        $count =  DB::table('pengajuan_surat')->where('id_jenis_surat', '1')->latest()->first();
        $tgl = Carbon\Carbon::now()->translatedFormat('Y');
        $no_surat = ($count->id + 1) . "/SI/" . $tgl;

        $pegawai = User::all();
        $tanggal = Carbon\Carbon::now()->translatedFormat('l, d F Y');
        return view('hrd.pengajuan_surat.tujuan.izin.create', compact('pegawai', 'tanggal', 'no_surat'));
    }

    public function surat_izin_store(Request $request)
    {
        $input = $request->all();
        $simpan = PengajuanSurat::create($input);
        return redirect('hrd/h_tujuan/izin?status=sukses');
    }

    public function mutasi()
    {
        $no = 1;
        $pengajuan_surat = PengajuanSurat::where('id_jenis_surat', '2')->orderBy('id', 'DESC')->get();
        return view('hrd.pengajuan_surat.tujuan.mutasi.index', compact('pengajuan_surat', 'no'));
    }

    public function mutasi_create()
    {
        $count =  DB::table('pengajuan_surat')->where('id_jenis_surat', '2')->latest()->first();
        $tgl = Carbon\Carbon::now()->translatedFormat('Y');
        $no_surat = ($count->id + 1) . "/Mutasi/" . $tgl;

        $pegawai = User::all();
        $tanggal = Carbon\Carbon::now()->translatedFormat('l, d F Y');
        return view('hrd.pengajuan_surat.tujuan.mutasi.create', compact('pegawai', 'tanggal', 'no_surat'));
    }

    public function mutasi_store(Request $request)
    {
        $input = $request->all();
        $simpan = PengajuanSurat::create($input);
        return redirect('hrd/h_tujuan/mutasi?status=sukses');
    }

    public function mutasi_show($id)
    {
        $disposisi = Disposisi::where('id_pengajuan_surat', $id)->first();
        $pengajuan_surat = PengajuanSurat::find($id);
        return view('hrd.pengajuan_surat.tujuan.mutasi.show', compact('pengajuan_surat', 'disposisi'));
    }

    public function kinerja()
    {
        $no = 1;
        $kinerja = Kinerja::all();
        return view('hrd.pengajuan_surat.tujuan.kinerja.index', compact(
            'kinerja',
            'no',
        ));
    }
    public function kinerja_perhitungan()
    {
        $no = 1;
        $No = 1;
        $nomor = 1;
        $kinerja = Kinerja::all();
        $kualitas_kerja =  $kinerja->max('kualitas_kerja');
        $kuantitas_kerja =  $kinerja->max('kuantitas_kerja');
        $inisiatif =  $kinerja->max('inisiatif');
        $disiplin =  $kinerja->max('disiplin');
        $tanggung_jawab =  $kinerja->max('tanggung_jawab');
        $motivasi =  $kinerja->max('motivasi');
        $kerjasama =  $kinerja->max('kerjasama');
        $PPT =  $kinerja->max('PPT');
        $PD =  $kinerja->max('PD');
        $kepemimpinan =  $kinerja->max('kepemimpinan');
        $PM =  $kinerja->max('PM');
        $PT =  $kinerja->max('PT');
        return view('hrd.pengajuan_surat.tujuan.kinerja.perhitungan', compact(
            'kinerja',
            'no',
            'No',
            'nomor',
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
        ));
    }

    public function kinerja_create()
    {
        $pegawai = User::all();
        $tanggal = Carbon\Carbon::now()->translatedFormat('l, d F Y');
        return view('hrd.pengajuan_surat.tujuan.kinerja.create', compact('pegawai', 'tanggal'));
    }

    public function kinerja_store(Request $request)
    {
        $input = $request->all();
        $simpan = Kinerja::create($input);
        // dd($simpan);
        return redirect('hrd/h_tujuan/kinerja?status=sukses');
    }

    public function kinerja_show($id)
    {
        // $disposisi= Disposisi::where('id_pengajuan_surat',$id)->first();
        $kinerja = Kinerja::find($id);
        return view('hrd.pengajuan_surat.tujuan.kinerja.show', compact('kinerja'));
    }

    public function kenaikan()
    {
        $no = 1;
        $pengajuan_surat = PengajuanSurat::where('id_jenis_surat', '3')->orderBy('id', 'DESC')->get();
        return view('hrd.pengajuan_surat.tujuan.kenaikan.index', compact('pengajuan_surat', 'no'));
    }

    public function kenaikan_create()
    {
        $count =  DB::table('pengajuan_surat')->where('id_jenis_surat', '2')->latest()->first();
        $tgl = Carbon\Carbon::now()->translatedFormat('Y');
        $no_surat = ($count->id + 1) . "/kenaikan/" . $tgl;

        $pegawai = User::all();
        $tanggal = Carbon\Carbon::now()->translatedFormat('l, d F Y');
        return view('hrd.pengajuan_surat.tujuan.kenaikan.create', compact('pegawai', 'tanggal', 'no_surat'));
    }

    public function kenaikan_store(Request $request)
    {
        $input = $request->all();
        $simpan = PengajuanSurat::create($input);
        return redirect('hrd/h_tujuan/kenaikan?status=sukses');
    }

    public function kenaikan_show($id)
    {
        $disposisi = Disposisi::where('id_pengajuan_surat', $id)->first();
        $pengajuan_surat = PengajuanSurat::find($id);
        return view('hrd.pengajuan_surat.tujuan.kenaikan.show', compact('pengajuan_surat', 'disposisi'));
    }
}

