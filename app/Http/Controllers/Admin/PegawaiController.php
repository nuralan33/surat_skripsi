<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class PegawaiController extends Controller
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
        return view('admin.pegawai.index', compact('pegawai', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id_jabatan' => $request->id_jabatan,
            'jenis_jabatan' => $request->jenis_jabatan,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'tgl_daftar' => $request->tgl_daftar,
        ]);
        return redirect('admin/pegawai?status=sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = User::find($id);
        return view('admin.pegawai.edit', compact('pegawai'));
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
        $pegawai = User::find($id);
        $pegawai->name = $request->name;
        $pegawai->jenis_jabatan = $request->jenis_jabatan;
        $pegawai->no_telp = $request->no_telp;
        $pegawai->tgl_daftar = $request->tgl_daftar;
        $pegawai->email = $request->email;
        $pegawai->alamat = $request->alamat;
        if ($request->password != null) {
            $pegawai->password = Hash::make($request->password);
        }
        $pegawai->save();
        // dd($pegawai);
        return redirect('admin/pegawai?status=sukses');
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
