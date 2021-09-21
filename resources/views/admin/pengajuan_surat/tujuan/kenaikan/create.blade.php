@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Pengajuan Mutasi
                        <div style="float: right;">
                            {{--  <a href="" class="btn btn-sm btn-primary">+</a>  --}}
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{route('h_tujuan.kenaikan.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">No Surat</label>
                                <input type="text" class="form-control" id=""
                                    placeholder="No Surat" name="no_surat" value="{{ $no_surat }}" readonly>
                                    <input type="hidden" class="form-control" id="" value="3" name="id_jenis_surat">
                            </div>
                          
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Pegawai</label>
                                <select name="id_user" id="" class="form-control">
                                    <option value="">Pilih Pegawai</option>
                                    @foreach ($pegawai as $item)
                                        <option value="{{$item->id}}">{{$item->name}} - {{$item->Jabatan->jabatan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Surat</label>
                                <input type="text" class="form-control" id="" name="tanggal" value="{{$tanggal}}", readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Keterangan</label>
                                <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <a href="{{route('h_tujuan.surat_izin')}}" class="btn btn-sm btn-danger">Kembali</a>
                                <input type="submit" class="btn btn-sm btn-success" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
