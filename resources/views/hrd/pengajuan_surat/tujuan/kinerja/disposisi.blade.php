@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Jenis Surat
                        <div style="float: right;">
                            <a href="{{route('p_pengajuan_surat.show',$pengajuan_surat->id)}}" target="_blank" class="btn btn-sm btn-primary">Detail Surat</a>
                        </div>
                    </div>

                    <div class="card-body">
                   
                        <form action="{{ route('p_disposisi.store',$pengajuan_surat->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">No Surat</label>
                                <input type="text" class="form-control" id="" value="{{$pengajuan_surat->no_surat}}" readonly>
                                <input type="hidden" class="form-control" id="" value="{{$pengajuan_surat->id}}" name="id_pengajuan_surat">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Pimpinan</label>
                                <select name="id_user" id="" class="form-control">
                                    <option value="">Pilih Pegawai</option>
                                    @foreach ($pegawai as $item)
                                        @if ($item->id_jabatan == '3')
                                            <option value="{{$item->id}}">{{$item->name}} - {{$item->Jabatan->jabatan}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <a href="{{ route('jenis_surat.index') }}" class="btn btn-sm btn-danger">Batal</a>
                                <input type="submit" class="btn btn-sm btn-success" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
