@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <b>Perhitungan SAW Kinerja Karyawan</b>
                        <div style="float: right;">
                            {{--  <a href="{{ route('h_tujuan.kinerja.create') }}" class="btn btn-sm btn-primary">+</a>  --}}
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

                        <h3>Data Alternatif</h3>
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pegawai</th>
                                    <?php 
                                    for ($i=1; $i <= 12; $i++) { ?>
                                    <th>C<?php echo $i; ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kinerja as $item)
                                    <tr>
                                        <td>{{ $no++ }}
                                        </td>
                                        <td>{{ $item->Pegawai->name }}
                                        </td>
                                        <td>
                                            {{ $item->kualitas_kerja }}
                                        </td>
                                        <td>
                                            {{ $item->kuantitas_kerja }}
                                        </td>
                                        <td>
                                            {{ $item->inisiatif }}
                                        </td>
                                        <td>
                                            {{ $item->disiplin }}
                                        </td>
                                        <td>
                                            {{ $item->tanggung_jawab }}
                                        </td>
                                        <td>
                                            {{ $item->motivasi }}
                                        </td>
                                        <td>
                                            {{ $item->kerjasama }}
                                        </td>
                                        <td>
                                            {{ $item->PPT }}
                                        </td>
                                        <td>
                                            {{ $item->PD }}
                                        </td>
                                        <td>
                                            {{ $item->kepemimpinan }}
                                        </td>
                                        <td>
                                            {{ $item->PM }}
                                        </td>
                                        <td>
                                            {{ $item->PT }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>

                        <h3>Normalisasi</h3>
                        <div class="table-responsive">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pegawai</th>
                                    <?php 
                                    for ($i=1; $i <= 12; $i++) { ?>
                                    <th>C<?php echo $i; ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kinerja as $item)
                                    <tr>
                                        <td>{{ $No++ }}
                                        </td>
                                        <td>
                                            {{ $item->Pegawai->name }}
                                        </td>
                                        <td>
                                            {{ $kualitas_kerja / $item->kualitas_kerja }}
                                        </td>
                                        <td>
                                            {{ $kuantitas_kerja / $item->kuantitas_kerja }}
                                        </td>
                                        <td>
                                            {{ $inisiatif / $item->inisiatif }}
                                        </td>
                                        <td>
                                            {{ $disiplin / $item->disiplin }}
                                        </td>
                                        <td>
                                            {{ $tanggung_jawab / $item->tanggung_jawab }}
                                        </td>
                                        <td>
                                            {{ $motivasi / $item->motivasi }}
                                        </td>
                                        <td>
                                            {{ $kerjasama / $item->kerjasama }}
                                        </td>
                                        <td>
                                            {{ $PPT / $item->PPT }}
                                        </td>
                                        <td>
                                            {{ $PD / $item->PD }}
                                        </td>
                                        <td>
                                            {{ $kepemimpinan / $item->kepemimpinan }}
                                        </td>
                                        <td>
                                            {{ $PM / $item->PM }}
                                        </td>
                                        <td>
                                            {{ $PT / $item->PT }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                        <br>
                        
                        <h3>Hasil Yang Diperoleh</h3>
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pegawai</th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kinerja as $item)
                                    <tr>
                                        <td>{{ $nomor++ }}</td>
                                        <td>
                                            {{ $item->Pegawai->name }}
                                        </td>
                                        <td>
                                            {{(($kualitas_kerja / $item->kualitas_kerja)*0.083)+(($kuantitas_kerja / $item->kuantitas_kerja)*0.083)+(($inisiatif / $item->inisiatif)*0.083)+(($disiplin / $item->disiplin)*0.083)+(($tanggung_jawab / $item->tanggung_jawab)*0.083)+(($motivasi / $item->motivasi)*0.082)+(($kerjasama / $item->kerjasama)*0.083)+(($PPT / $item->PPT)*0.083)+(($PD / $item->PD)*0.083)+(($kepemimpinan / $item->kepemimpinan)*0.083)+(($PM / $item->PM)*0.083)+(($PT / $item->PT)*0.087)
                                            }}
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
