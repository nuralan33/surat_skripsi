<?php

namespace App\Http\Controllers\Pimpinan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\PengajuanSurat;
use App\Model\Disposisi;
use App\User;

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
    
    public function index()
    {
        $no = 1;
        $id_user = Auth::user()->id;
        $pegawai = User::all();
        $disposisi = Disposisi::where('id_user',$id_user)->first();
        $pengajuan_surat = PengajuanSurat::orderBy('tanggal', 'DESC')->orderBy('no_surat','DESC')->get();
        return view('pimpinan.pengajuan_surat.index', compact('pengajuan_surat', 'no','pegawai','disposisi'));
    }
    public function show($id)
    {
        $disposisi= Disposisi::where('id_pengajuan_surat',$id)->first();
        $pengajuan_surat = PengajuanSurat::find($id);
        return view('pimpinan.pengajuan_surat.show',compact('pengajuan_surat','disposisi'));
    }

    public function Update(Request $request,$id){
        $surat = PengajuanSurat::find($id);
        $surat->status = $request->status;
        $surat->save();
        return redirect('pimpinan/pimp_pengajuan_surat?status=sukses');
    }
}
