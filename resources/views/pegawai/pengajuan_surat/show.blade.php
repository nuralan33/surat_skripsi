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
                <table class="table table-sm table-borderless">
                    <tr>
                        <td style="width: 150px;text-align: 10px">
                            <center>
                                <img src="{{ asset('logo.jpg') }}" style="width: 100px" alt="">
                            </center>
                        </td>
                        <td>
                            <div style="padding-right:180px; padding-top:20px">
                                <center>
                                    <b style="font-size:30px">PT. YUGO PUTRA SEJAHTERA</b>
                                    <br>
                                    <div style="font-size: 11px;line-height:15px;">
                                        JL. IR Sutami Kec, Sungai Kunjang, Kota Samarinda 
                                    </div>
                                </center>
                            </div>
                        </td>
                    </tr>
                </table>
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
                <p class="p">Kepada Yang Terhormat</p>
                <p class="p">Pimpinan Perusahaan</p>
                <p class="p">PT. YUGO PUTRA SEJAHTERA</p>
                <p class="p">Di -</p>
                <p class="p"><b style="color: white">......</b> Samarinda</p>
                <br>
                <p class="p">Dengan Hormat,</p>
                <p class="p">Saya yang bertanda tangan di bawah ini :</p>
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
                            <td>{{ $pengajuan_surat->Pegawai->Jabatan->jabatan }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{$pengajuan_surat->Pegawai->alamat}}</td>
                        </tr>
                        <tr>
                            <td>No Telpon</td>
                            <td>:</td>
                            <td>{{ $pengajuan_surat->Pegawai->no_telp }}</td>
                        </tr>
                    </table>
                </div>
                <p>
                    Dengan ini saya mohon {{ $pengajuan_surat->keterangan }}.
                    Atas perhatian dan kebijaksanaan yang diberikan saya ucapkan terimakasih
                    yang sebesar-besarnya.
                </p>
                <div style="float: right">
                    <br>
                    <table>
                        <tr>
                            <td>
                                {{ date('j F  Y', strtotime($pengajuan_surat->tanggal)) }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Hormat Saya
                                <br>
                                <center>
                                    <b>{{$disposisi->Pegawai->Jabatan->jabatan}}</b>
                                </center>
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
                                <center>
                                    <b>({{$disposisi->Pegawai->name}})</b>
                                </center>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
       @if ($pengajuan_surat->status == '0' || $pengajuan_surat->status == '1' || $pengajuan_surat->status == '2')
           
       @else
        <script>
            window.print();
        </script>
       @endif
</body>

</html>
