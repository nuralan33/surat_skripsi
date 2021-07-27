@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Jabatan
                    <div style="float: right;">
                        {{-- <a href="{{route('jabatan.create')}}" class="btn btn-sm btn-primary">+</a> --}}
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
                            <th>Jabatan</th>
                            {{-- <th>Action</th> --}}
                        </thead>
                        <tbody>
                            @foreach ($jabatan as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->jabatan}}</td>
                                    {{-- <td>
                                        <a href="{{route('jabatan.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
