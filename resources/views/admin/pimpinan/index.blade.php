@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        pimpinan
                        <div style="float: right;">
                            <a href="{{ route('pimpinan.create') }}" class="btn btn-sm btn-primary">+</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <?php ?>
                        @if (isset($_GET['status']))
                            @if ($_GET['status'] == 'sukses')
                                <div class="alert alert-success" role="alert">
                                    Surat Berhasil Disimpan
                                </div>
                            @else
                                <div class="alert alert-primary" role="alert">
                                    Surat Berhasil Di Disposisikan
                                </div>
                            @endif

                        @endif

                        <table class="table table-sm table-bordered">
                            <thead>
                                <th>No</th>
                                <th>Nama Pimpinan</th>
                                <th>Jabatan</th>
                                <th>Alamat</th>
                                <th>No Telpon</th>
                                <th>Tanggal Daftar</th>
                                <th>E-Mail</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($pimpinan as $item)
                                    @if ($item->id_jabatan == '3')
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->jenis_jabatan }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->no_telp }}</td>
                                            <td>{{ $item->tgl_daftar }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>
                                                <a href="{{ route('pimpinan.edit', $item->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
