<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SuratMasuk;

class SuratMasukController extends Controller
{
    public function index(){
        $no = 1;
        $surat_masuk = SuratMasuk::all();
        return view('admin.surat_masuk.index',compact('surat_masuk','no'));
    }

    public function create(){
        return view('admin.surat_masuk.create');
    }
    
    public function store(Request $request){
        $input = $request->all();
        $simpan = SuratMasuk::create($input);
        return redirect('admin/surat_masuk?status=sukses');
    }

    public function edit($id){
        $surat_masuk = SuratMasuk::find($id);
        return view('admin.surat_masuk.edit',compact('surat_masuk'));
    }

    public function update(Request $request,$id){
        $surat_masuk = SuratMasuk::find($id);
        $surat_masuk->surat_masuk = $request->surat_masuk;
        $surat_masuk->save();
        return redirect('admin/surat_masuk?status=sukses');
    }

    public function show($id){
        $surat_masuk = SuratMasuk::find($id);
        return view('admin.surat_masuk.show',compact('surat_masuk'));
    }
}
