@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Pengajuan Surat
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

                        <form action="{{route('pengajuan_surat.update',$pengajuan_surat->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="" class="form-label">No Surat</label>
                                <input type="text" class="form-control" id="" value="{{$pengajuan_surat->no_surat}}" readonly
                                    placeholder="No Surat" name="no_surat">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Jenis Surat</label>
                                <select name="id_jenis_surat" id="" class="form-control">
                                    <option value="">Pilih Jenis Surat</option>
                                    @foreach ($jenis_surat as $item)
                                        <option value="{{$item->id}}" {{($item->id == $pengajuan_surat->id_jenis_surat) ? 'selected' : '' }}>{{$item->jenis_surat}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Pegawai</label>
                                <select name="id_user" id="" class="form-control">
                                    <option value="">Pilih Pegawai</option>
                                    @foreach ($pegawai as $item)
                                        <option value="{{$item->id}}" {{ ( $item->id == $pengajuan_surat->id_user) ? 'selected' : '' }}>{{$item->name}} - {{$item->Jabatan->jabatan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Surat</label>
                                <input type="date" class="form-control" id="" name="tanggal" value="{{$pengajuan_surat->tanggal}}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Keterangan</label>
                                <textarea name="keterangan" id="" cols="30" rows="10" class="form-control">{{$pengajuan_surat->keterangan}}</textarea>

                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <a href="{{route('pengajuan_surat.index')}}" class="btn btn-sm btn-danger">Batal</a>
                                <input type="submit" class="btn btn-sm btn-success" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
