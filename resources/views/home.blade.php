@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if (Auth::user()->id_jabatan == '1')
            {{-- Pegawai --}}
           
            <div style="padding-top: 150px">
                <img src="{{ asset('logo.jpg') }}"  alt="">
            </div>
            @elseif (Auth::user()->id_jabatan == '2')
            {{-- Admin --}}
                <div class="col">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 mb-6">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pegawai
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah Data
                                                {{ $pegawai }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{ route('pegawai.index') }}"
                                                class="btn btn-sm btn-primary">Lihat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-6">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">HRD</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah Data
                                                {{ $hrd }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{ route('hrd.index') }}" class="btn btn-sm btn-success">Lihat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-6">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pengajuan
                                                Surat</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah Data
                                                {{ $surat }} </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{ route('jenis_surat.index') }}"
                                                class="btn btn-sm btn-danger">Lihat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif (Auth::user()->id_jabatan == '3')
            {{-- Pimpinan --}}
                <div class="col">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 mb-6">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pengajuan
                                                Surat</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah Data
                                                {{ $surat }} </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{ route('p_tujuan.index') }}"
                                                class="btn btn-sm btn-danger">Lihat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
            {{-- Hrd --}}
                <div class="col">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 mb-6">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pengajuan
                                                Surat</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah Data
                                                {{ $surat }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{ route('h_tujuan.index') }}"
                                                class="btn btn-sm btn-danger">Lihat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
