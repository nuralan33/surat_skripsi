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
                   
                        @if (isset($_GET['status']))
                            <div class="alert alert-success" role="alert">
                            </div>
                        @endif
                        <form action="{{ route('jenis_surat.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Jenis Surat</label>
                                <input type="text" class="form-control" id="" placeholder="Jenis Surat" name="jenis_surat">
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
