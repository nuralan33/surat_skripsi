<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\PengajuanSurat;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hrd = User::where('id_jabatan','4')->count();
        $pegawai = User::where('id_jabatan','1')->count();
        $surat = PengajuanSurat::count();
        return view('home',compact('hrd','pegawai','surat'));
    }
}
