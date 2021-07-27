@extends('layouts.app')

@section('content')
 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Pengajuan Surat
                        <div style="float: right;">
                            <a href="{{ route('h_pengajuan_surat.create') }}" class="btn btn-sm btn-primary">+</a>
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
                                <th>Jenis Surat</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($pengajuan_surat as $item)
                                    @if ($item->id_jenis_surat == '1' || $item->id_jenis_surat == '4')
                                        @if ($item->status == '0' )
                                        @else
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->no_surat }}</td>
                                                <td>{{ date('j F  Y', strtotime($item->tanggal)) }}</td>
                                                <td>{{ $item->Pegawai->name }} -
                                                    {{ $item->Pegawai->Jabatan->jabatan }}
                                                </td>
                                                <td>{{ $item->Jenis_surat->jenis_surat }}</td>
                                                <td>
                                                    @if ($item->status == '1')
                                                        <button type="button" class="btn btn-sm btn-warning"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal{{ $item->id }}">
                                                            Verifikasi
                                                        </button>
                                                        <div class="modal fade" id="exampleModal{{ $item->id }}"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Verifikasi</h5>
                                                                        <button type="button" class="btn btn-sm btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close">X</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form
                                                                            action="{{ route('h_disposisi.verifikasi') }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <div class="mb-3">
                                                                                <label for="">No Surat :</label>
                                                                                <input type="text"
                                                                                    value="{{ $item->no_surat }}"
                                                                                    class="form-control" readonly id="">
                                                                                <input type="hidden"
                                                                                    value="{{ $item->id_user }}"
                                                                                    class="form-control" readonly id="" name="id_user">
                                                                                    <input type="hidden"
                                                                                    value="{{ $item->id }}"
                                                                                    class="form-control" readonly id="" name="id_pengajuan_surat">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="">Status :</label>
                                                                                <select name="status" id=""
                                                                                    class="form-control">
                                                                                    <option value="">Pilih Status</option>
                                                                                    <option value="2">Ditolak</option>
                                                                                    <option value="3">DiSetujui</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="d-grid gap-2 d-md-block">
                                                                                <input type="submit"
                                                                                    class="btn btn-sm btn-success"
                                                                                    value="Simpan">
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @elseif($item->status == '2')
                                                        <a href="{{ route('h_pengajuan_surat.show', $item->id) }}"
                                                            target="_blank" class="btn btn-sm btn-danger">Ditolak -
                                                            Lihat Surat</a>
                                                    @else
                                                        <a href="{{ route('h_pengajuan_surat.show', $item->id) }}"
                                                            target="_blank" class="btn btn-sm btn-success">Disetujui -
                                                            Lihat Surat</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                    @else

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
