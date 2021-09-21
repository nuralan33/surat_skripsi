@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <b>Surat Izin</b>
                    <div style="float: right;">
                        <!-- <a href="{{ route('tujuan.surat_izin.create') }}" class="btn btn-sm btn-primary">+</a> -->
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

                    <div class="card-body">

                        <div class="tab">
                            <button class="tablinks btn btn-sm btn-info" id="defaultOpen" onclick="openCity(event, 'London')">Belum Disetujui</button>
                            <button class="tablinks btn btn-sm btn-danger" onclick="openCity(event, 'Paris')">Ditolak</button>
                            <button class="tablinks btn btn-sm btn-success " onclick="openCity(event, 'Tokyo')">Disetujui </button>
                            <br>
                            <div id="London" class="tabcontent">
                                <h3>Disposisi </h3>
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
                                        @if ($item->status == '1')
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->no_surat }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>{{ $item->Pegawai->name }} -
                                                {{ $item->Pegawai->Jabatan->jabatan }}
                                            </td>
                                            <td>
                                                @if ($item->status == '1')
                                                <a href="{{ route('pengajuan_surat.show', $item->id) }}" target="_blank" class="btn btn-sm btn-info">Belum Disetujui
                                                    -
                                                    Lihat
                                                    Surat</a>
                                                @elseif($item->status == '2')
                                                <a href="{{ route('pengajuan_surat.show', $item->id) }}" target="_blank" class="btn btn-sm btn-danger">Ditolak -
                                                    Lihat
                                                    Surat</a>
                                                @else
                                                <a href="{{ route('pengajuan_surat.show', $item->id) }}" target="_blank" class="btn btn-sm btn-success">Disetujui -
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
                                <h3>Belum Disetujui</h3>
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
                                        @if ($item->status == '2')
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->no_surat }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>{{ $item->Pegawai->name }} -
                                                {{ $item->Pegawai->Jabatan->jabatan }}
                                            </td>
                                            <td>
                                                @if ($item->status == '1')
                                                <a href="{{ route('pengajuan_surat.show', $item->id) }}" target="_blank" class="btn btn-sm btn-info">Belum Disetujui
                                                    -
                                                    Lihat
                                                    Surat</a>
                                                @elseif($item->status == '2')
                                                <a href="{{ route('pengajuan_surat.show', $item->id) }}" target="_blank" class="btn btn-sm btn-danger">Ditolak -
                                                    Lihat
                                                    Surat</a>
                                                @else
                                                <a href="{{ route('pengajuan_surat.show', $item->id) }}" target="_blank" class="btn btn-sm btn-success">Disetujui -
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
                                        <th>No Surat</th>
                                        <th>Tanggal</th>
                                        <th>Pegawai</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengajuan_surat as $item)
                                        @if ($item->status == '3')
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->no_surat }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>{{ $item->Pegawai->name }} -
                                                {{ $item->Pegawai->Jabatan->jabatan }}
                                            </td>
                                            <td>
                                                @if ($item->status == '1')
                                                <a href="{{ route('pengajuan_surat.show', $item->id) }}" target="_blank" class="btn btn-sm btn-info">Belum Disetujui
                                                    -
                                                    Lihat
                                                    Surat</a>
                                                @elseif($item->status == '2')
                                                <a href="{{ route('pengajuan_surat.show', $item->id) }}" target="_blank" class="btn btn-sm btn-danger">Ditolak -
                                                    Lihat
                                                    Surat</a>
                                                @else
                                                <a href="{{ route('pengajuan_surat.show', $item->id) }}" target="_blank" class="btn btn-sm btn-success">Disetujui -
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