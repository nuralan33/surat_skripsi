<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=$kinerja->.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .p {
            line-height: 8px;
            text-align: justify;
        }

        td {
            line-height: 25px;
            align=justify;
        }

        p {
            line-height: 25px;
            text-align: justify;
        }

    </style>
</head>

<body style="background-color: white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <br>
                <center>
                    <b>
                        <h3>Surat Kinerja Karyawan</h3>
                    </b>
                </center>
                <hr>
                <p class="p">Dengan ini mengajukan Penilaian Kerja Karyawan sebagai berikut :</p>
                <div style="padding-left:25px">
                    <table class="table table-sm table-borderless">
                        <tr>
                            <td style="width: 130px">Nama</td>
                            <td style="width: 20px">:</td>
                            <td>{{ $kinerja->Pegawai->name }}</td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td>{{ $kinerja->Pegawai->jenis_jabatan }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ $kinerja->Pegawai->alamat }}</td>
                        </tr>
                        <tr>
                            <td>No Telpon</td>
                            <td>:</td>
                            <td>{{ $kinerja->Pegawai->no_telp }}</td>
                        </tr>
                    </table>
                </div>
                <hr>
                <p class="p"><b>I. Absensi dan Keterlambatan</b></p>
                <div style="padding-left:25px">
                    <table class="table table-sm table-bordered">
                        <tr>
                            <td colspan="6">1. Sebab dan Jumlah Hari Absen </td>
                        </tr>
                        <tr>
                            <td style="width: 80px"><b style="padding-left:20px"></b>a. Sakit</td>
                            <td style="width: 10px">:</td>
                            <td style="">{{ $kinerja->sakit }} Hari</td>
                            <td style="width: 130px"></td>
                            <td style="width: 10px"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="width: $kinerja->30px"><b style="padding-left:20px"></b>b. Izin</td>
                            <td style="width: $kinerja->0px">:</td>
                            <td>{{ $kinerja->izin }} Hari</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="width: $kinerja->30px"><b style="padding-left:20px"></b>c. Alpa</td>
                            <td style="width: $kinerja->0px">:</td>
                            <td>{{ $kinerja->alpa }} Hari</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="">2. Keterlambatan </td>
                            <td style="width: $kinerja->0px">:</td>
                            <td style="width: 80px">{{ $kinerja->terlambat }};</td>
                            <td>Jika Pernah</td>
                            <td>:</td>
                            <td style="">{{ $kinerja->juml_terlambat }} Hari</td>
                        </tr>
                        <tr>
                            <td colspan="">3. Datang Siang </td>
                            <td style="width: $kinerja->0px">:</td>
                            <td style="width: 80px">{{ $kinerja->dt_siang }};</td>
                            <td>Jika Pernah</td>
                            <td>:</td>
                            <td style="">{{ $kinerja->juml_dt_siang }} Hari</td>
                        </tr>
                        <tr>
                            <td colspan="">4. Pulang cepat </td>
                            <td style="width: $kinerja->0px">:</td>
                            <td style="width: 80px">{{ $kinerja->pl_cepat }};</td>
                            <td>Jika Pernah</td>
                            <td>:</td>
                            <td style="">{{ $kinerja->juml_pl_cepat }} Hari</td>
                        </tr>
                    </table>
                </div>
                <hr>
                <p class="p"><b>II. Penilaian Hasil Kerja</b></p>
                <div style="padding-left:25px">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th rowspan="3" style="padding-bottom: 40px">
                                    <center>No.</center>
                                </th>
                                <th rowspan="3" style="padding-bottom: 40px">
                                    <center>Aspek</center>
                                </th>
                                <th colspan="5">
                                    <center>Nilai</center>
                                </th>
                            </tr>
                            <tr>
                                <th>KS</th>
                                <th>K</th>
                                <th>C</th>
                                <th>CB</th>
                                <th>B</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5 </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1. </td>
                                <td>Kualitas Kerja</td>
                                <td><?php $total_kualitas_kerja_kualitas_kerja = 0; ?>
                                    @if ($kinerja->kualitas_kerja == 1)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->kualitas_kerja == 2)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->kualitas_kerja == 3)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->kualitas_kerja == 4)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->kualitas_kerja == 5)
                                        &#10004;
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>2. </td>
                                <td>Kuantitas Kerja</td>
                                <td>
                                    @if ($kinerja->kuantitas_kerja == 1)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->kuantitas_kerja == 2)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->kuantitas_kerja == 3)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->kuantitas_kerja == 4)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->kuantitas_kerja == 5)
                                        &#10004;
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>3. </td>
                                <td>Inisiatif</td>
                                <td>
                                    @if ($kinerja->inisiatif == 1)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->inisiatif == 2)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->inisiatif == 3)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->inisiatif == 4)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->inisiatif == 5)
                                        &#10004;
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>4. </td>
                                <td>Displin</td>
                                <td>
                                    @if ($kinerja->disiplin == 1)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->disiplin == 2)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->disiplin == 3)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->disiplin == 4)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->disiplin == 5)
                                        &#10004;
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>5. </td>
                                <td>Tanggung Jawab</td>
                                <td>
                                    @if ($kinerja->tanggung_jawab == 1)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->tanggung_jawab == 2)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->tanggung_jawab == 3)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->tanggung_jawab == 4)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->tanggung_jawab == 5)
                                        &#10004;
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>6. </td>
                                <td>Motivasi</td>
                                <td>
                                    @if ($kinerja->motivasi == 1)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->motivasi == 2)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->motivasi == 3)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->motivasi == 4)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->motivasi == 5)
                                        &#10004;
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>7. </td>
                                <td>Kerjasama</td>
                                <td>
                                    @if ($kinerja->kerjasama == 1)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->kerjasama == 2)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->kerjasama == 3)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->kerjasama == 4)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->kerjasama == 5)
                                        &#10004;
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>8. </td>
                                <td>Pemahaman Terhadap Tugas</td>
                                <td>
                                    @if ($kinerja->PPT == 1)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->PPT == 2)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->PPT == 3)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->PPT == 4)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->PPT == 5)
                                        &#10004;
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>9. </td>
                                <td>Percaya Diri</td>
                                <td>
                                    @if ($kinerja->PD == 1)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->PD == 2)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->PD == 3)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->PD == 4)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->PD == 5)
                                        &#10004;
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>10. </td>
                                <td>Kempemimpinan</td>
                                <td>
                                    @if ($kinerja->kepemimpinan == 1)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->kepemimpinan == 2)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->kepemimpinan == 3)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->kepemimpinan == 4)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->kepemimpinan == 5)
                                        &#10004;
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>11. </td>
                                <td>Pemecahan Masalah</td>
                                <td>
                                    @if ($kinerja->PM == 1)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->PM == 2)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->PM == 3)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->PM == 4)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->PM == 5)
                                        &#10004;
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>12. </td>
                                <td>Pengambilan Keputusan</td>
                                <td>
                                    @if ($kinerja->PT == 1)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->PT == 2)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->PT == 3)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->PT == 4)
                                        &#10004;
                                    @endif
                                </td>
                                <td>
                                    @if ($kinerja->PT == 5)
                                        &#10004;
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th colspan="2">
                                    <center>Nilai total_kualitas_kerja</center>
                                </th>
                                <th>
                                    <?php
                                    $jumlah1 = 1;
                                    $kualitas_kerja = 0;
                                    $kuantitas_kerja = 0;
                                    $inisiatif = 0;
                                    $disiplin = 0;
                                    $tanggung_jawab = 0;
                                    $motivasi = 0;
                                    $kerjasama = 0;
                                    $PPT = 0;
                                    $PD = 0;
                                    $kepemimpinan = 0;
                                    $PM = 0;
                                    $PT = 0;
                                    ?>
                                    @if ($jumlah1 == $kinerja->kualitas_kerja)
                                        <?php $kualitas_kerja = $kinerja->kualitas_kerja; ?>
                                    @endif
                                    @if ($jumlah1 == $kinerja->kuantitas_kerja)
                                        <?php $kuantitas_kerja = $kinerja->kuantitas_kerja; ?>
                                    @endif
                                    @if ($jumlah1 == $kinerja->inisiatif)
                                        <?php $inisiatif = $kinerja->inisiatif; ?>
                                    @endif
                                    @if ($jumlah1 == $kinerja->disiplin)
                                        <?php $disiplin = $kinerja->disiplin; ?>
                                    @endif
                                    @if ($jumlah1 == $kinerja->tanggung_jawab)
                                        <?php $tanggung_jawab = $kinerja->tanggung_jawab; ?>
                                    @endif
                                    @if ($jumlah1 == $kinerja->motivasi)
                                        <?php $motivasi = $kinerja->motivasi; ?>
                                    @endif
                                    @if ($jumlah1 == $kinerja->kerjasama)
                                        <?php $kerjasama = $kinerja->kerjasama; ?>
                                    @endif
                                    @if ($jumlah1 == $kinerja->PPT)
                                        <?php $PPT = $kinerja->PPT; ?>
                                    @endif
                                    @if ($jumlah1 == $kinerja->PD)
                                        <?php $PD = $kinerja->PD; ?>
                                    @endif
                                    @if ($jumlah1 == $kinerja->kepemimpinan)
                                        <?php $kepemimpinan = $kinerja->kepemimpinan; ?>
                                    @endif
                                    @if ($jumlah1 == $kinerja->PM)
                                        <?php $PM = $kinerja->PM; ?>
                                    @endif
                                    @if ($jumlah1 == $kinerja->PT)
                                        <?php $PT = $kinerja->PT; ?>
                                    @endif
                                    <?php $total1 = $kualitas_kerja + $kuantitas_kerja + $inisiatif + $disiplin + $tanggung_jawab + $motivasi + $kerjasama + $PPT + $PD + $kepemimpinan + $PM + $PT; ?>
                                    {{ $kualitas_kerja + $kuantitas_kerja + $inisiatif + $disiplin + $tanggung_jawab + $motivasi + $kerjasama + $PPT + $PD + $kepemimpinan + $PM + $PT }}
                                </th>
                                <th>
                                    <?php
                                    $jumlah2 = 2;
                                    $kualitas_kerja2 = 0;
                                    $kuantitas_kerja2 = 0;
                                    $inisiatif2 = 0;
                                    $disiplin2 = 0;
                                    $tanggung_jawab2 = 0;
                                    $motivasi2 = 0;
                                    $kerjasama2 = 0;
                                    $PPT2 = 0;
                                    $PD2 = 0;
                                    $kepemimpinan2 = 0;
                                    $PM2 = 0;
                                    $PT2 = 0;
                                    ?>
                                    @if ($jumlah2 == $kinerja->kualitas_kerja)
                                        <?php $kualitas_kerja2 = $kinerja->kualitas_kerja; ?>
                                    @endif
                                    @if ($jumlah2 == $kinerja->kuantitas_kerja)
                                        <?php $kuantitas_kerja2 = $kinerja->kuantitas_kerja; ?>
                                    @endif
                                    @if ($jumlah2 == $kinerja->inisiatif)
                                        <?php $inisiatif2 = $kinerja->inisiatif; ?>
                                    @endif
                                    @if ($jumlah2 == $kinerja->disiplin)
                                        <?php $disiplin2 = $kinerja->disiplin; ?>
                                    @endif
                                    @if ($jumlah2 == $kinerja->tanggung_jawab)
                                        <?php $tanggung_jawab2 = $kinerja->tanggung_jawab; ?>
                                    @endif
                                    @if ($jumlah2 == $kinerja->motivasi)
                                        <?php $motivasi2 = $kinerja->motivasi; ?>
                                    @endif
                                    @if ($jumlah2 == $kinerja->kerjasama)
                                        <?php $kerjasama2 = $kinerja->kerjasama; ?>
                                    @endif
                                    @if ($jumlah2 == $kinerja->PPT)
                                        <?php $PPT2 = $kinerja->PPT; ?>
                                    @endif
                                    @if ($jumlah2 == $kinerja->PD)
                                        <?php $PD2 = $kinerja->PD; ?>
                                    @endif
                                    @if ($jumlah2 == $kinerja->kepemimpinan)
                                        <?php $kepemimpinan2 = $kinerja->kepemimpinan; ?>
                                    @endif
                                    @if ($jumlah2 == $kinerja->PM)
                                        <?php $PM2 = $kinerja->PM; ?>
                                    @endif
                                    @if ($jumlah2 == $kinerja->PT)
                                        <?php $PT2 = $kinerja->PT; ?>
                                    @endif
                                    <?php $total2 = $kualitas_kerja2 + $kuantitas_kerja2 + $inisiatif2 + $disiplin2 + $tanggung_jawab2 + $motivasi2 + $kerjasama2 + $PPT2 + $PD2 + $kepemimpinan2 + $PM2 + $PT2; ?>
                                    {{ $kualitas_kerja2 + $kuantitas_kerja2 + $inisiatif2 + $disiplin2 + $tanggung_jawab2 + $motivasi2 + $kerjasama2 + $PPT2 + $PD2 + $kepemimpinan2 + $PM2 + $PT2 }}
                                </th>
                                <th>
                                    <?php
                                    $jumlah3 = 3;
                                    $kualitas_kerja3 = 0;
                                    $kuantitas_kerja3 = 0;
                                    $inisiatif3 = 0;
                                    $disiplin3 = 0;
                                    $tanggung_jawab3 = 0;
                                    $motivasi3 = 0;
                                    $kerjasama3 = 0;
                                    $PPT3 = 0;
                                    $PD3 = 0;
                                    $kepemimpinan3 = 0;
                                    $PM3 = 0;
                                    $PT3 = 0;
                                    ?>
                                    @if ($jumlah3 == $kinerja->kualitas_kerja)
                                        <?php $kualitas_kerja3 = $kinerja->kualitas_kerja; ?>
                                    @endif
                                    @if ($jumlah3 == $kinerja->kuantitas_kerja)
                                        <?php $kuantitas_kerja3 = $kinerja->kuantitas_kerja; ?>
                                    @endif
                                    @if ($jumlah3 == $kinerja->inisiatif)
                                        <?php $inisiatif3 = $kinerja->inisiatif; ?>
                                    @endif
                                    @if ($jumlah3 == $kinerja->disiplin)
                                        <?php $disiplin3 = $kinerja->disiplin; ?>
                                    @endif
                                    @if ($jumlah3 == $kinerja->tanggung_jawab)
                                        <?php $tanggung_jawab3 = $kinerja->tanggung_jawab; ?>
                                    @endif
                                    @if ($jumlah3 == $kinerja->motivasi)
                                        <?php $motivasi3 = $kinerja->motivasi; ?>
                                    @endif
                                    @if ($jumlah3 == $kinerja->kerjasama)
                                        <?php $kerjasama3 = $kinerja->kerjasama; ?>
                                    @endif
                                    @if ($jumlah3 == $kinerja->PPT)
                                        <?php $PPT3 = $kinerja->PPT; ?>
                                    @endif
                                    @if ($jumlah3 == $kinerja->PD)
                                        <?php $PD3 = $kinerja->PD; ?>
                                    @endif
                                    @if ($jumlah3 == $kinerja->kepemimpinan)
                                        <?php $kepemimpinan3 = $kinerja->kepemimpinan; ?>
                                    @endif
                                    @if ($jumlah3 == $kinerja->PM)
                                        <?php $PM3 = $kinerja->PM; ?>
                                    @endif
                                    @if ($jumlah3 == $kinerja->PT)
                                        <?php $PT3 = $kinerja->PT; ?>
                                    @endif
                                    <?php $total3 = $kualitas_kerja3 + $kuantitas_kerja3 + $inisiatif3 + $disiplin3 + $tanggung_jawab3 + $motivasi3 + $kerjasama3 + $PPT3 + $PD3 + $kepemimpinan3 + $PM3 + $PT3; ?>
                                    {{ $kualitas_kerja3 + $kuantitas_kerja3 + $inisiatif3 + $disiplin3 + $tanggung_jawab3 + $motivasi3 + $kerjasama3 + $PPT3 + $PD3 + $kepemimpinan3 + $PM3 + $PT3 }}
                                </th>
                                <th>
                                    <?php
                                    $jumlah4 = 4;
                                    $kualitas_kerja4 = 0;
                                    $kuantitas_kerja4 = 0;
                                    $inisiatif4 = 0;
                                    $disiplin4 = 0;
                                    $tanggung_jawab4 = 0;
                                    $motivasi4 = 0;
                                    $kerjasama4 = 0;
                                    $PPT4 = 0;
                                    $PD4 = 0;
                                    $kepemimpinan4 = 0;
                                    $PM4 = 0;
                                    $PT4 = 0;
                                    ?>
                                    @if ($jumlah4 == $kinerja->kualitas_kerja)
                                        <?php $kualitas_kerja4 = $kinerja->kualitas_kerja; ?>
                                    @endif
                                    @if ($jumlah4 == $kinerja->kuantitas_kerja)
                                        <?php $kuantitas_kerja4 = $kinerja->kuantitas_kerja; ?>
                                    @endif
                                    @if ($jumlah4 == $kinerja->inisiatif)
                                        <?php $inisiatif4 = $kinerja->inisiatif; ?>
                                    @endif
                                    @if ($jumlah4 == $kinerja->disiplin)
                                        <?php $disiplin4 = $kinerja->disiplin; ?>
                                    @endif
                                    @if ($jumlah4 == $kinerja->tanggung_jawab)
                                        <?php $tanggung_jawab4 = $kinerja->tanggung_jawab; ?>
                                    @endif
                                    @if ($jumlah4 == $kinerja->motivasi)
                                        <?php $motivasi4 = $kinerja->motivasi; ?>
                                    @endif
                                    @if ($jumlah4 == $kinerja->kerjasama)
                                        <?php $kerjasama4 = $kinerja->kerjasama; ?>
                                    @endif
                                    @if ($jumlah4 == $kinerja->PPT)
                                        <?php $PPT4 = $kinerja->PPT; ?>
                                    @endif
                                    @if ($jumlah4 == $kinerja->PD)
                                        <?php $PD4 = $kinerja->PD; ?>
                                    @endif
                                    @if ($jumlah4 == $kinerja->kepemimpinan)
                                        <?php $kepemimpinan4 = $kinerja->kepemimpinan; ?>
                                    @endif
                                    @if ($jumlah4 == $kinerja->PM)
                                        <?php $PM4 = $kinerja->PM; ?>
                                    @endif
                                    @if ($jumlah4 == $kinerja->PT)
                                        <?php $PT4 = $kinerja->PT; ?>
                                    @endif
                                    <?php $total4 = $kualitas_kerja4 + $kuantitas_kerja4 + $inisiatif4 + $disiplin4 + $tanggung_jawab4 + $motivasi4 + $kerjasama4 + $PPT4 + $PD4 + $kepemimpinan4 + $PM4 + $PT4; ?>
                                    {{ $kualitas_kerja4 + $kuantitas_kerja4 + $inisiatif4 + $disiplin4 + $tanggung_jawab4 + $motivasi4 + $kerjasama4 + $PPT4 + $PD4 + $kepemimpinan4 + $PM4 + $PT4 }}
                                </th>
                                <th>
                                    <?php
                                    $jumlah5 = 5;
                                    $kualitas_kerja5 = 0;
                                    $kuantitas_kerja5 = 0;
                                    $inisiatif5 = 0;
                                    $disiplin5 = 0;
                                    $tanggung_jawab5 = 0;
                                    $motivasi5 = 0;
                                    $kerjasama5 = 0;
                                    $PPT5 = 0;
                                    $PD5 = 0;
                                    $kepemimpinan5 = 0;
                                    $PM5 = 0;
                                    $PT5 = 0;
                                    ?>
                                    @if ($jumlah5 == $kinerja->kualitas_kerja)
                                        <?php $kualitas_kerja5 = $kinerja->kualitas_kerja; ?>
                                    @endif
                                    @if ($jumlah5 == $kinerja->kuantitas_kerja)
                                        <?php $kuantitas_kerja5 = $kinerja->kuantitas_kerja; ?>
                                    @endif
                                    @if ($jumlah5 == $kinerja->inisiatif)
                                        <?php $inisiatif5 = $kinerja->inisiatif; ?>
                                    @endif
                                    @if ($jumlah5 == $kinerja->disiplin)
                                        <?php $disiplin5 = $kinerja->disiplin; ?>
                                    @endif
                                    @if ($jumlah5 == $kinerja->tanggung_jawab)
                                        <?php $tanggung_jawab5 = $kinerja->tanggung_jawab; ?>
                                    @endif
                                    @if ($jumlah5 == $kinerja->motivasi)
                                        <?php $motivasi5 = $kinerja->motivasi; ?>
                                    @endif
                                    @if ($jumlah5 == $kinerja->kerjasama)
                                        <?php $kerjasama5 = $kinerja->kerjasama; ?>
                                    @endif
                                    @if ($jumlah5 == $kinerja->PPT)
                                        <?php $PPT5 = $kinerja->PPT; ?>
                                    @endif
                                    @if ($jumlah5 == $kinerja->PD)
                                        <?php $PD5 = $kinerja->PD; ?>
                                    @endif
                                    @if ($jumlah5 == $kinerja->kepemimpinan)
                                        <?php $kepemimpinan5 = $kinerja->kepemimpinan; ?>
                                    @endif
                                    @if ($jumlah5 == $kinerja->PM)
                                        <?php $PM5 = $kinerja->PM; ?>
                                    @endif
                                    @if ($jumlah5 == $kinerja->PT)
                                        <?php $PT5 = $kinerja->PT; ?>
                                    @endif
                                    <?php $total5 = $kualitas_kerja5 + $kuantitas_kerja5 + $inisiatif5 + $disiplin5 + $tanggung_jawab5 + $motivasi5 + $kerjasama5 + $PPT5 + $PD5 + $kepemimpinan5 + $PM5 + $PT5; ?>
                                    {{ $kualitas_kerja5 + $kuantitas_kerja5 + $inisiatif5 + $disiplin5 + $tanggung_jawab5 + $motivasi5 + $kerjasama5 + $PPT5 + $PD5 + $kepemimpinan5 + $PM5 + $PT5 }}
                                </th>
                            </tr>
                            <tr>
                                <th colspan="2">
                                    <center>Nilai Total / Jumlah Aspek</center>
                                </th>
                                <th colspan="5">
                                    <center> {{ $total1 + $total2 + $total3 + $total4 + $total5 }}</center>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div style="">
                    <br>
                    <table>
                        <tr>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Pemberi Kuasa
                                <br>

                            </td>
                            <td style="width: 300px"></td>
                            <td>
                                Penerima Kuasa
                                <br>

                            </td>
                        </tr>
                        <tr style="width: 30px">
                            <td>
                                <br>
                                <br>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        <script>
            window.print();
        </script>
</body>
</html>
