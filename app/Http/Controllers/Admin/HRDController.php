<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class HRDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $hrd = User::all();
        return view('admin.hrd.index', compact('hrd', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hrd.create');
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
        return redirect('admin/hrd?status=sukses');
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
        $hrd = User::find($id);
        return view('admin.hrd.edit', compact('hrd'));
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
        $hrd = User::find($id);
        $hrd->name = $request->name;
        $hrd->jenis_jabatan = $request->jenis_jabatan;
        $hrd->no_telp = $request->no_telp;
        $hrd->tgl_daftar = $request->tgl_daftar;
        $hrd->email = $request->email;
        $hrd->alamat = $request->alamat;
        if ($request->password != null) {
            $hrd->password = Hash::make($request->password);
        }
        if( $file = $request->file('ttd') != null){
            $file = $request->file('ttd');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'ttd';
            $file->move($tujuan_upload, $nama_file);
            $hrd->ttd = $nama_file;
        }
        $hrd->save();
        // dd($hrd);
        return redirect('admin/hrd?status=sukses');
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
