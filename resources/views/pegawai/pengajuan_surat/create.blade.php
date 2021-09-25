@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Pengajuan Surat
                        <div style="float: right;">
                            {{-- <a href="" class="btn btn-sm btn-primary">+</a> --}}
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ route('p_pengajuan_surat.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">No Surat</label>
                                <input type="text" class="form-control" id="" value="{{ $no_surat }}" readonly placeholder="No Surat" name="no_surat">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Jenis Surat</label>
                                <input type="text" class="form-control" id="" placeholder="" value="Surat Izin" readonly>
                                <input type="hidden" class="form-control" id="" name="id_jenis_surat" value="1">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Pegawai</label>
                                <input type="text" class="form-control" id="" placeholder="No Surat"
                                    value="{{ Auth::user()->name }}" readonly>
                                <input type="hidden" class="form-control" id="" placeholder="No Surat" name="id_user"
                                    value="{{ Auth::user()->id }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Surat</label>
                                <input type="text" class="form-control" id="" value="{{ $tanggal }}" readonly name="tanggal">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Keterangan</label>
                                <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Choose File</label>
                                <input type="file" class="form-control" id="" name="file">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <a href="{{ route('p_pengajuan_surat.index') }}" class="btn btn-sm btn-danger">Batal</a>
                                <input type="submit" class="btn btn-sm btn-success" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
