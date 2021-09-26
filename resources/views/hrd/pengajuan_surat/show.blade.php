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
        hr  
        {  
            /* width: 80%;   */
            height: 2px;  
            background-color: black;  
            border-color: black;  
        } 
        .con {
                position: relative;
                text-align: center;
                color: white;
        }
        .top-left {
            position: absolute;
            top: 8px;
            left: 16px;
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
                                        JL. Ir Sutami Blok A No. 1-3 Telp. (0541) 272436, 272438 Facs. (0541)271228
                                        SAMARINDA 75126
                                    </div>
                                </center>
                            </div>
                        </td>
                    </tr>
                </table>
                <hr size="90px">
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
                <p class="p">Bapak/Ibu HRD</p>
                <p class="p">PT. YUGO PUTRA SEJAHTERA</p>
                <p class="p">Di -</p>
                <p class="p"><b style="color: white"></b> Samarinda</p>
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
                            <td></td>
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
                                @if ($disposisi == null)

                                @else
                                    @if ( $pengajuan_surat->status == '3')
                                        <div class="con">
                                            <img src="{{ asset('pel.png') }}" class="top-left" style="width: 100px" alt="Snow">
                                            <img  src="{{ asset('ttd') }}/{{ $disposisi->Pegawai->ttd }}" class="top-left" width="150px" style="padding-left:1px" alt="">
                                            {{--  <img class="top-left" src="{{ asset('ttd') }}/{{ $disposisi->Pegawai->ttd }}" width="120px" alt="">  --}}
                                        </div>
                                    @endif
                                @endif
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
