<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <h3>Surat Mutasi</h3>
                    </b>
                </center>
                <hr>
                <table class="table table-sm table-borderless">
                    <tr>
                        <td style="width: 100px">No Surat</td>
                        <td style="width: 20px">:</td>
                        <td>{{ $pengajuan_surat->no_surat }}</td>
                    </tr>
                    <tr>
                        <td>Perihal</td>
                        <td>:</td>
                        <td>{{ $pengajuan_surat->Jenis_surat->jenis_surat }}</td>
                    </tr>
                </table>
                <br>
                <p class="p">Yang Bertanda Tangan Di bawah ini :</p>
                <div style="padding-left:25px">
                    @if ($disposisi == null)
                        <table class="table table-sm table-borderless">
                            <tr>
                                <td style="width: 100px">Nama</td>
                                <td style="width: 20px">:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>No Telpon</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                        </table>
                    @else
                        <table class="table table-sm table-borderless">
                            <tr>
                                <td style="width: 100px">Nama</td>
                                <td style="width: 20px">:</td>
                                <td>{{ $pengajuan_surat->Pegawai->name }}</td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td>{{ $pengajuan_surat->Pegawai->jenis_jabatan }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $pengajuan_surat->Pegawai->alamat }}</td>
                            </tr>
                            <tr>
                                <td>No Telpon</td>
                                <td>:</td>
                                <td>{{ $pengajuan_surat->Pegawai->no_telp }}</td>
                            </tr>
                        </table>
                    @endif
                  
                </div>
                <br>
                <p class="p">Dengan ini memberi memberikan kuasa kepada karyawa PT. Yugo Putra Sejahtera di bawah ini :</p>
                <div style="padding-left:25px">
                    <table class="table table-sm table-borderless">
                        <tr>
                            <td style="width: 100px">Nama</td>
                            <td style="width: 20px">:</td>
                            <td>{{ $pengajuan_surat->Pegawai->name }}</td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td>{{ $pengajuan_surat->Pegawai->jenis_jabatan }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ $pengajuan_surat->Pegawai->alamat }}</td>
                        </tr>
                        <tr>
                            <td>No Telpon</td>
                            <td>:</td>
                            <td>{{ $pengajuan_surat->Pegawai->no_telp }}</td>
                        </tr>
                    </table>
                </div>
                <p>
                    Untuk mengurus proses Mutasi {{ $pengajuan_surat->keterangan }}.
                    Atas perhatian dan kebijaksanaan yang diberikan saya ucapkan terimakasih
                    yang sebesar-besarnya.
                </p>
                <div style="">
                    <br>
                    <table>
                        <tr>
                            <td>
                                {{ $pengajuan_surat->tanggal }}
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
                        <tr>
                            <td>
                                @if ($disposisi == null)

                                @else
                                    <b>({{ $disposisi->Pegawai->name }})</b>
                                @endif
                            </td>
                            <td style="width: 300px"></td>
                            <td>
                                <b>({{ $pengajuan_surat->Pegawai->name }})</b>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        @if ($pengajuan_surat->status == '0' || $pengajuan_surat->status == '1' || $pengajuan_surat->status == '2')

        @else
            {{-- <script>
                window.print();
            </script> --}}
        @endif
</body>

</html>
