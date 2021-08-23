@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <b>Surat Mutasi</b>
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
                                                @if ($item->status == '1')
                                                    <a href="{{ route('tujuan.mutasi.show', $item->id) }}"
                                                        target="_blank" class="btn btn-sm btn-info">Belum Disetujui
                                                        -
                                                        Lihat
                                                        Surat</a>
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
                                                                            action="{{ route('verifikasi.kinerja') }}"
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
                                                                            <div class="mb-3">
                                                                                <label for="">Ketrangan :</label>
                                                                                    <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
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
                                                    <a href="{{ route('tujuan.mutasi.show', $item->id) }}"
                                                        target="_blank" class="btn btn-sm btn-danger">Ditolak -
                                                        Lihat
                                                        Surat</a>
                                                @else
                                                    <a href="{{ route('tujuan.mutasi.show', $item->id) }}"
                                                        target="_blank" class="btn btn-sm btn-success">Disetujui -
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
