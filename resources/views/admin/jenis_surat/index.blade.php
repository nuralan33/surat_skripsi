@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Jenis Surat
                    <div style="float: right;">
                        <a href="{{route('jenis_surat.create')}}" class="btn btn-sm btn-primary">+</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table table-sm table-bordered">
                        <thead>
                            <th>No</th>
                            <th>Jenis Surat</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($jenis_surat as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->jenis_surat}}</td>
                                    <td>
                                        <a href="{{route('jenis_surat.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            {{-- <a href="" class="btn btn-danger btn-sm">Kembali</a>
            <br>
            <br> --}}
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
                                    <a href="{{route('tujuan.surat_izin')}}" class="btn btn-sm btn-primary">Lihat</a>
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
                                    <a href="{{route('tujuan.mutasi')}}" class="btn btn-sm btn-success">Lihat</a>
                                    {{-- <i class="fas fa-calendar fa-2x text-gray-300"></i> --}}
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
                                    <a href="{{route('tujuan.kenaikan')}}" class="btn btn-sm btn-danger">Lihat</a>
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
                                    <a href="{{route('tujuan.kinerja')}}" class="btn btn-sm btn-dark">Lihat</a>
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
