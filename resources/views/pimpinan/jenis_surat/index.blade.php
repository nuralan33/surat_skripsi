@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-6">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Surat izin</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah Data {{$izin}}</div>
                                </div>
                                <div class="col-auto">
                                    {{-- <i class="fas fa-calendar fa-2x text-gray-300"></i> --}}
                                    <a href="{{route('p_tujuan.surat_izin')}}" class="btn btn-sm btn-primary">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-6">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Mutasi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah Data {{$mutasi}}</div>
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('p_tujuan.mutasi')}}" class="btn btn-sm btn-success">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-6">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Kenaikan Jabatan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah Data {{$kenaikan}} </div>
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('jenis_surat.index')}}" class="btn btn-sm btn-danger">Lihat</a>
                                    {{-- <i class="fas fa-calendar fa-2x text-gray-300"></i> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-6">
                    <div class="card border-left-dark shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Surat Kinerja Karyawan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah Data {{$kinerja}} </div>
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('p_tujuan.kinerja')}}" class="btn btn-sm btn-dark">Lihat</a>
                                    {{-- <i class="fas fa-calendar fa-2x text-gray-300"></i> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
