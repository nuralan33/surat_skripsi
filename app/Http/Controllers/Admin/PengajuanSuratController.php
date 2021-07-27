<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PengajuanSurat;
use App\Model\JenisSurat;
use App\Model\Disposisi;
use App\User;

class PengajuanSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $pegawai = User::all();
        $pengajuan_surat = PengajuanSurat::orderBy('tanggal', 'DESC')->orderBy('no_surat','DESC')->get();
        return view('admin.pengajuan_surat.index', compact('pengajuan_surat', 'no','pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_surat = JenisSurat::all();
        $pegawai = User::all();
        return view('admin.pengajuan_surat.create',compact('pegawai','jenis_surat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $simpan = PengajuanSurat::create($input);
        return redirect('admin/pengajuan_surat?status=sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disposisi= Disposisi::where('id_pengajuan_surat',$id)->first();
        $pengajuan_surat = PengajuanSurat::find($id);
        return view('admin.pengajuan_surat.show',compact('pengajuan_surat','disposisi'));
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
        return view('admin.pengajuan_surat.edit',compact('pengajuan_surat','jenis_surat','pegawai'));
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
        return redirect('admin/pengajuan_surat?status=sukses');
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
