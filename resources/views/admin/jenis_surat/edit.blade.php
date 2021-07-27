@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Jenis Surat
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

                        <form action="{{route('jenis_surat.update',$jenis_surat->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Jenis Surat</label>
                                <input type="text" class="form-control" id=""
                                    placeholder="Jenis Surat" name="jenis_surat" value="{{$jenis_surat->jenis_surat}}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <a href="{{route('jenis_surat.index')}}" class="btn btn-sm btn-danger">Batal</a>
                                <input type="submit" class="btn btn-sm btn-success" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
