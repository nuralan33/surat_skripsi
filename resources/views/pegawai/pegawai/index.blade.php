@extends('layouts.app')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Pengajuan Surat
                        <div style="float: right;">
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
                                <th>No </th>
                                <th>No Surat</th>
                                <th>Tanggal</th>
                                <th>Pegawai</th>
                                <th>Jenis Surat</th>
                                <th>Action</th>
                            </thead>
                            @if ($disposisi == null)
                            @else
                                @if ($disposisi->id_user == Auth::user()->id)
                                    @foreach ($pengajuan_surat as $item)
                                        @if ($item->id_user == 6)
                                            @if ($item->status == '0')
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
                                                        @if ($item->status == '0')

                                                        @elseif($item->status == '1')
                                                            <a href="{{ route('pimp_pengajuan_surat.show', $item->id) }}"
                                                                target="_blank" class="btn btn-sm btn-info">Belum Disetujui
                                                                -
                                                                Lihat Surat</a>
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
                                                                            <button type="button"
                                                                                class="btn btn-sm btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close">X</button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form
                                                                                action="{{ route('pimp_pengajuan_surat.update', $item->id) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="mb-3">
                                                                                    <label for="">No Surat :</label>
                                                                                    <input type="text"
                                                                                        value="{{ $item->no_surat }}"
                                                                                        class="form-control" readonly id="">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="">Status :</label>
                                                                                    <select name="status" id=""
                                                                                        class="form-control">
                                                                                        <option value="">Pilih Status
                                                                                        </option>
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
                                                            <a href="{{ route('pimp_pengajuan_surat.show', $item->id) }}"
                                                                target="_blank" class="btn btn-sm btn-danger">Ditolak -
                                                                Lihat
                                                                Surat</a>
                                                        @else
                                                            <a href="{{ route('pimp_pengajuan_surat.show', $item->id) }}"
                                                                target="_blank" class="btn btn-sm btn-success">Disetujui -
                                                                Lihat
                                                                Surat</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endif
                                        @endif
                                    @endforeach
                                @else
                                @endif
                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

@endsection
