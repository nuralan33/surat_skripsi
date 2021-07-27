<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PengajuanSurat;
use App\Model\JenisSurat;

class JenisSuratController extends Controller
{
    public function index(){
        $no = 1;
        $jenis_surat = JenisSurat::all();
        $izin = PengajuanSurat::where('id_jenis_surat','1')->count();
        $mutasi = PengajuanSurat::where('id_jenis_surat','2')->count();
        $kenaikan = PengajuanSurat::where('id_jenis_surat','3')->count();
        $kinerja = PengajuanSurat::where('id_jenis_surat','4')->count();
        return view('admin.jenis_surat.index',compact('izin','no','mutasi','kenaikan','kinerja'));
    }

    public function create(){
        return view('admin.jenis_surat.create');
    }
    
    public function store(Request $request){
        $input = $request->all();
        $simpan = JenisSurat::create($input);
        return redirect('admin/jenis_surat?status=sukses');
    }

    public function edit($id){
        $jenis_surat = JenisSurat::find($id);
        return view('admin.jenis_surat.edit',compact('jenis_surat'));
    }
    public function update(Request $request,$id){
        $jenis_surat = JenisSurat::find($id);
        $jenis_surat->jenis_surat = $request->jenis_surat;
        $jenis_surat->save();
        return redirect('admin/jenis_surat?status=sukses');
    }
}
