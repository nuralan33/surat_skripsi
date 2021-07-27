<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class PimpinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $pimpinan = User::all();
        return view('admin.pimpinan.index', compact('pimpinan', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pimpinan.create');
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
        return redirect('admin/pimpinan?status=sukses');
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
        $pimpinan = User::find($id);
        return view('admin.pimpinan.edit', compact('pimpinan'));
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
        $pimpinan = User::find($id);
        $pimpinan->name = $request->name;
        $pimpinan->jenis_jabatan = $request->jenis_jabatan;
        $pimpinan->no_telp = $request->no_telp;
        $pimpinan->tgl_daftar = $request->tgl_daftar;
        $pimpinan->email = $request->email;
        $pimpinan->alamat = $request->alamat;
        if ($request->password != null) {
            $pimpinan->password =  Hash::make($request->password);
        }
        $pimpinan->save();
        // dd($pimpinan);
        return redirect('admin/pimpinan?status=sukses');
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

