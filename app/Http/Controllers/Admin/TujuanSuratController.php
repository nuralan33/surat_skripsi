<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PengajuanSurat;
use App\User;
use Carbon;
use App\Model\Disposisi;
use App\Model\Kinerja;
use DB;

class TujuanSuratController extends Controller
{
    public function surat_izin()
    {
        $no = 1;
        $pengajuan_surat = PengajuanSurat::where('id_jenis_surat', '1')->orderBy('id', 'DESC')->get();
        return view('admin.pengajuan_surat.tujuan.izin.index', compact('pengajuan_surat', 'no'));
    }

    public function surat_izin_create()
    {
        $count=  DB::table('pengajuan_surat')->where('id_jenis_surat','1')->latest()->first();
        $tgl = Carbon\Carbon::now()->translatedFormat('Y');
        $no_surat = ($count->id+1)."/SI/".$tgl;

        $pegawai = User::all();
        $tanggal = Carbon\Carbon::now()->translatedFormat('l, d F Y');
        return view('admin.pengajuan_surat.tujuan.izin.create', compact('pegawai', 'tanggal','no_surat'));
    }

    public function surat_izin_store(Request $request)
    {
        $input = $request->all();
        $simpan = PengajuanSurat::create($input);
        return redirect('admin/tujuan/izin?status=sukses');
    }

    public function mutasi()
    {
        $no = 1;
        $pengajuan_surat = PengajuanSurat::where('id_jenis_surat', '2')->orderBy('id', 'DESC')->get();
        return view('admin.pengajuan_surat.tujuan.mutasi.index', compact('pengajuan_surat', 'no'));
    }

    public function mutasi_create()
    {
        $count=  DB::table('pengajuan_surat')->where('id_jenis_surat','2')->latest()->first();
        $tgl = Carbon\Carbon::now()->translatedFormat('Y');
        $no_surat = ($count->id+1)."/Mutasi/".$tgl;

        $pegawai = User::all();
        $tanggal = Carbon\Carbon::now()->translatedFormat('l, d F Y');
        return view('admin.pengajuan_surat.tujuan.mutasi.create', compact('pegawai', 'tanggal', 'no_surat'));
    }

    public function mutasi_store(Request $request)
    {
        $input = $request->all();
        $simpan = PengajuanSurat::create($input);
        return redirect('admin/tujuan/mutasi?status=sukses');
    }

    public function mutasi_show($id)
    {
        $disposisi = Disposisi::where('id_pengajuan_surat', $id)->first();
        $pengajuan_surat = PengajuanSurat::find($id);
        return view('admin.pengajuan_surat.tujuan.mutasi.show', compact('pengajuan_surat', 'disposisi'));
    }

    public function kinerja()
    {
        $no = 1;
        $kinerja = Kinerja::all();
        return view('admin.pengajuan_surat.tujuan.kinerja.index', compact('kinerja', 'no'));
    }
    
    public function kinerja_create()
    {
        $pegawai = User::all();
        $tanggal = Carbon\Carbon::now()->translatedFormat('l, d F Y');
        return view('admin.pengajuan_surat.tujuan.kinerja.create', compact('pegawai', 'tanggal'));
    }

    public function kinerja_store(Request $request)
    {
        $input = $request->all();
        $simpan = Kinerja::create($input);
        // dd($simpan);
        return redirect('admin/tujuan/kinerja?status=sukses');
    }

    public function kinerja_show($id)
    {
        $kinerja = Kinerja::find($id);
        return view('admin.pengajuan_surat.tujuan.kinerja.show', compact('kinerja'));
    }
}
