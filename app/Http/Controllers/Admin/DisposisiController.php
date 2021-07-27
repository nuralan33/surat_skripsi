<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Model\PengajuanSurat;
use App\Model\Disposisi;

class DisposisiController extends Controller
{
    public function create($id){
        $pegawai = User::all();
        $pengajuan_surat = PengajuanSurat::find($id);
        return view('admin.disposisi.create',compact('pegawai','pengajuan_surat'));
    }

    public function store(Request $request){
        $input = $request->all();
        $simpan = Disposisi::create($input);
        
        $surat = PengajuanSurat::find($request->id_pengajuan_surat);
        $surat->status = '1';
        $surat->save();
        
        return redirect('admin/pengajuan_surat?status=disposisi');

    }
}
