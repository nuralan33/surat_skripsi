@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <b>Surat Kinerja Karyawan</b>
                    <div style="float: right;">
                        {{-- <a href="{{ route('p_tujuan.kinerja.create') }}" class="btn btn-sm btn-primary">+</a> --}}
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
                        Surat Berhasil Di Verifikasi
                    </div>
                    @endif

                    @endif

                    <div class="card-body">

                        <div class="tab">
                            <button class="tablinks btn btn-sm btn-info" id="defaultOpen" onclick="openCity(event, 'London')">Belum Disetujui</button>
                            <button class="tablinks btn btn-sm btn-danger" onclick="openCity(event, 'Paris')">Ditolak</button>
                            <button class="tablinks btn btn-sm btn-success " onclick="openCity(event, 'Tokyo')">Disetujui </button>
                        </div>
                        <br>
                        <div id="London" class="tabcontent">
                            <h3>Belum Disetujui </h3>
                            <table class="table table-sm table-bordered">
                                <thead>
                                    <th>No</th>
                                    <th>Pegawai</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($kinerja as $item)
                                    @if ($item->status == '1')
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->Pegawai->name }} -
                                            {{ $item->Pegawai->Jabatan->jabatan }}
                                        </td>
                                        <td>
                                            @if ($item->status == '1')
                                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                                                Verifikasi
                                            </button>
                                            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Verifikasi</h5>
                                                            <button type="button" class="btn btn-sm btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('verifikasi.kinerja') }}" method="POST">
                                                                @csrf
                                                                <div class="mb-3">
                                                                    <label for="">Nama Pegawai :</label>
                                                                    <input type="text" value="{{ $item->Pegawai->name }}" class="form-control" readonly id="">
                                                                    <input type="hidden" value="{{ $item->id_user }}" class="form-control" readonly id="" name="id_user">
                                                                    <input type="hidden" value="{{ $item->id }}" class="form-control" readonly id="" name="id_pengajuan_surat">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="">Status :</label>
                                                                    <select name="status" id="" class="form-control">
                                                                        <option value="">Pilih Status</option>
                                                                        <option value="2">Ditolak</option>
                                                                        <option value="3">DiSetujui</option>
                                                                    </select>
                                                                </div>
                                                                <div class="d-grid gap-2 d-md-block">
                                                                    <input type="submit" class="btn btn-sm btn-success" value="Simpan">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{ route('p_tujuan.kinerja.show', $item->id) }}" target="_blank" class="btn btn-sm btn-info">
                                                Lihat Surat
                                            </a>
                                            @elseif($item->status == '2')
                                            <a href="{{ route('p_tujuan.kinerja.show', $item->id) }}" target="_blank" class="btn btn-sm btn-info">Belum Disetujui
                                                -
                                                Lihat
                                                Surat
                                            </a>

                                            @elseif($item->status == '3')
                                            <a href="{{ route('p_tujuan.kinerja.show', $item->id) }}" target="_blank" class="btn btn-sm btn-danger">Ditolak -
                                                Lihat
                                                Surat</a>
                                            @else
                                            <a href="{{ route('p_tujuan.kinerja.show', $item->id) }}" target="_blank" class="btn btn-sm btn-success">Disetujui -
                                                Lihat
                                                Surat</a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div id="Paris" class="tabcontent">
                            <h3>Ditolak</h3>
                            <table class="table table-sm table-bordered">
                                <thead>
                                    <th>No</th>
                                    <th>Pegawai</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($kinerja as $item)
                                    @if ($item->status == '2')
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->Pegawai->name }} -
                                            {{ $item->Pegawai->Jabatan->jabatan }}
                                        </td>
                                        <td>
                                            @if ($item->status == '1')
                                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                                                Verifikasi
                                            </button>
                                            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Verifikasi</h5>
                                                            <button type="button" class="btn btn-sm btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('verifikasi.kinerja') }}" method="POST">
                                                                @csrf
                                                                <div class="mb-3">
                                                                    <label for="">Nama Pegawai :</label>
                                                                    <input type="text" value="{{ $item->Pegawai->name }}" class="form-control" readonly id="">
                                                                    <input type="hidden" value="{{ $item->id_user }}" class="form-control" readonly id="" name="id_user">
                                                                    <input type="hidden" value="{{ $item->id }}" class="form-control" readonly id="" name="id_pengajuan_surat">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="">Status :</label>
                                                                    <select name="status" id="" class="form-control">
                                                                        <option value="">Pilih Status</option>
                                                                        <option value="2">Ditolak</option>
                                                                        <option value="3">DiSetujui</option>
                                                                    </select>
                                                                </div>
                                                                <div class="d-grid gap-2 d-md-block">
                                                                    <input type="submit" class="btn btn-sm btn-success" value="Simpan">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{ route('p_tujuan.kinerja.show', $item->id) }}" target="_blank" class="btn btn-sm btn-info">
                                                Lihat Surat
                                            </a>

                                            @elseif($item->status == '2')
                                            <a href="{{ route('p_tujuan.kinerja.show', $item->id) }}" target="_blank" class="btn btn-sm btn-danger">Ditolak -
                                                Lihat
                                                Surat</a>
                                            @else
                                            <a href="{{ route('p_tujuan.kinerja.show', $item->id) }}" target="_blank" class="btn btn-sm btn-success">Disetujui -
                                                Lihat
                                                Surat</a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div id="Tokyo" class="tabcontent">
                            <h3>Disetujui</h3>
                            <table class="table table-sm table-bordered">
                                <thead>
                                    <th>No</th>
                                    <th>Pegawai</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($kinerja as $item)
                                    @if ($item->status == '3')
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->Pegawai->name }} -
                                            {{ $item->Pegawai->Jabatan->jabatan }}
                                        </td>
                                        <td>
                                            @if ($item->status == '1')
                                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                                                Verifikasi
                                            </button>
                                            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Verifikasi</h5>
                                                            <button type="button" class="btn btn-sm btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('verifikasi.kinerja') }}" method="POST">
                                                                @csrf
                                                                <div class="mb-3">
                                                                    <label for="">Nama Pegawai :</label>
                                                                    <input type="text" value="{{ $item->Pegawai->name }}" class="form-control" readonly id="">
                                                                    <input type="hidden" value="{{ $item->id_user }}" class="form-control" readonly id="" name="id_user">
                                                                    <input type="hidden" value="{{ $item->id }}" class="form-control" readonly id="" name="id_pengajuan_surat">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="">Status :</label>
                                                                    <select name="status" id="" class="form-control">
                                                                        <option value="">Pilih Status</option>
                                                                        <option value="2">Ditolak</option>
                                                                        <option value="3">DiSetujui</option>
                                                                    </select>
                                                                </div>
                                                                <div class="d-grid gap-2 d-md-block">
                                                                    <input type="submit" class="btn btn-sm btn-success" value="Simpan">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{ route('p_tujuan.kinerja.show', $item->id) }}" target="_blank" class="btn btn-sm btn-info">
                                                Lihat Surat
                                            </a>

                                            @elseif($item->status == '2')
                                            <a href="{{ route('p_tujuan.kinerja.show', $item->id) }}" target="_blank" class="btn btn-sm btn-danger">Ditolak -
                                                Lihat
                                                Surat</a>
                                            @else
                                            <a href="{{ route('p_tujuan.kinerja.show', $item->id) }}" target="_blank" class="btn btn-sm btn-success">Disetujui -
                                                Lihat
                                                Surat</a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <script>
                            function openCity(evt, cityName) {
                                var i, tabcontent, tablinks;
                                tabcontent = document.getElementsByClassName("tabcontent");
                                for (i = 0; i < tabcontent.length; i++) {
                                    tabcontent[i].style.display = "none";
                                }
                                tablinks = document.getElementsByClassName("tablinks");
                                for (i = 0; i < tablinks.length; i++) {
                                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                                }
                                document.getElementById(cityName).style.display = "block";
                                evt.currentTarget.className += " active";
                            }

                            // Get the element with id="defaultOpen" and click on it
                            document.getElementById("defaultOpen").click();
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection