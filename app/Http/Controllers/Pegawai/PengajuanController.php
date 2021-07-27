<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PengajuanSurat;
use App\Model\JenisSurat;
use App\Model\Disposisi;
use App\User;
use Carbon;
use DB;

class PengajuanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $pegawai = User::all();
        $pengajuan_surat = PengajuanSurat::orderBy('tanggal', 'DESC')->orderBy('no_surat', 'DESC')->get();
        return view('pegawai.pengajuan_surat.index', compact('pengajuan_surat', 'no', 'pegawai'));
    }

    public function detail($id){
        $pengajuan = PengajuanSurat::find($id);
        return view('pegawai.pengajuan_surat.detail',compact('pengajuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count=  DB::table('pengajuan_surat')->where('id_jenis_surat','1')->latest()->first();
        $tgl = Carbon\Carbon::now()->translatedFormat('Y');
        $no_surat = ($count->id+1)."/SI/".$tgl;
        
        $jenis_surat = JenisSurat::all();
        $pegawai = User::all();
        $tanggal = Carbon\Carbon::now()->translatedFormat('l, d F Y');
        return view('pegawai.pengajuan_surat.create', compact('pegawai', 'jenis_surat', 'tanggal','no_surat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $pengajuan = new PengajuanSurat;
        
        if( $file = $request->file('file') != null){
            $file = $request->file('file');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'izin';
            $file->move($tujuan_upload, $nama_file);
            $pengajuan->file = $nama_file;
        }

        $pengajuan->no_surat = $request->no_surat;
        $pengajuan->id_jenis_surat = $request->id_jenis_surat;
        $pengajuan->id_user = $request->id_user;
        $pengajuan->tanggal = $request->tanggal;
        $pengajuan->keterangan = $request->keterangan;
        $pengajuan->save();
        return redirect('pegawai/p_pengajuan_surat?status=sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disposisi = Disposisi::where('id_pengajuan_surat', $id)->first();
        $pengajuan_surat = PengajuanSurat::find($id);
        return view('pegawai.pengajuan_surat.show', compact('pengajuan_surat', 'disposisi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis_surat = JenisSurat::all();
        $pegawai = User::all();
        $pengajuan_surat = PengajuanSurat::find($id);
        return view('pegawai.pengajuan_surat.edit', compact('pengajuan_surat', 'jenis_surat', 'pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengajuan_surat = PengajuanSurat::find($id);
        $pengajuan_surat->no_surat = $request->no_surat;
        $pengajuan_surat->id_jenis_surat = $request->id_jenis_surat;
        $pengajuan_surat->tanggal = $request->tanggal;
        $pengajuan_surat->keterangan = $request->keterangan;
        $pengajuan_surat->save();
        return redirect('pegawai/p_pengajuan_surat?status=sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
