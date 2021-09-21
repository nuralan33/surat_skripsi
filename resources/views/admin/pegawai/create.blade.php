@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Pegawai
                        <div style="float: right;">
                            <a href="" class="btn btn-sm btn-primary">+</a>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('pegawai.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="" placeholder="Nama" name="name">
                                <input type="hidden" class="form-control" id="" placeholder="Nama" name="id_jabatan" value="1">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Jenis Jabatan</label>
                                <input type="text" class="form-control" id="" placeholder="Jenis Jabatan" name="jenis_jabatan">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">No. Telpon</label>
                                <input type="text" class="form-control" id="" placeholder="No. Telepon" name="no_telp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Daftar</label>
                                <input type="date" class="form-control" id="" placeholder="Tanggal Daftar" name="tgl_daftar">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">E-Mail</label>
                                <input type="email" class="form-control" id="" placeholder="E-Mail" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" id="" placeholder="password" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control" id="" cols="30" rows="5"></textarea>
                            </div>


                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <a href="{{ route('pengajuan_surat.index') }}" class="btn btn-sm btn-danger">Batal</a>
                                <input type="submit" class="btn btn-sm btn-success" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
