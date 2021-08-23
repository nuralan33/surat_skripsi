@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <b>Surat kenaikan</b>
                        <div style="float: right;">
                            <a href="{{ route('h_tujuan.kenaikan.create') }}" class="btn btn-sm btn-primary">+</a>
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
                                <th>No Surat</th>
                                <th>Tanggal</th>
                                <th>Pegawai</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($pengajuan_surat as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->no_surat }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->Pegawai->name }} -
                                            {{ $item->Pegawai->Jabatan->jabatan }}
                                        </td>
                                        <td>
                                            @if ($item->status == '0')
                                                <a href="{{ route('disposisi.kenaikan', $item->id) }}"
                                                    class="btn btn-sm btn-primary">Disposisi</a>
                                                <a href="{{ route('h_tujuan.kenaikan.show', $item->id) }}" target="_blank"
                                                    class="btn btn-sm btn-info">
                                                    Lihat Surat
                                                </a>
                                                {{--  <button type="button" class="btn btn-sm btn-warning">  --}}
                                               
                                            @elseif($item->status == '1')
                                                <a href="{{ route('h_tujuan.kenaikan.show', $item->id) }}" target="_blank" class="btn btn-sm btn-info">Belum Disetujui
                                                    -
                                                    Lihat
                                                    Surat
                                                </a>

                                            @elseif($item->status == '2')
                                                <a href="{{ route('h_tujuan.kenaikan.show', $item->id) }}" target="_blank"
                                                    class="btn btn-sm btn-danger">Ditolak -
                                                    Lihat
                                                    Surat</a>
                                            @else
                                                <a href="{{ route('h_tujuan.kenaikan.show', $item->id) }}" target="_blank"
                                                    class="btn btn-sm btn-success">Disetujui -
                                                    Lihat
                                                    Surat</a>
                                            @endif
                                        </td>
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