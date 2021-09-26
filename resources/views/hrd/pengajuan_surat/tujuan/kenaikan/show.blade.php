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
                                    <div style="font-size: 13px;line-height:20px;">
                                        JL. Ir Sutami Blok A No. 1-3 Telp. (0541)272436, 272438 Facs. (0541)271228
                                         SAMARINDA 75126 
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
                                <td>{{ $disposisi->Pegawai->name }}</td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td>{{ $disposisi->Pegawai->jenis_jabatan }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $disposisi->Pegawai->alamat }}</td>
                            </tr>
                            <tr>
                                <td>No Telpon</td>
                                <td>:</td>
                                <td>{{ $disposisi->Pegawai->no_telp }}</td>
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
                    Untuk mengurus proses Kenaikan Jabatan {{ $pengajuan_surat->keterangan }}.
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
                        <td></td>
                        <td>
                            <div class="con">
                                <img src="{{ asset('pel.png') }}" class="top-left" style="width: 100px" alt="Snow">
                                <img  src="{{ asset('ttd') }}/{{ $pengajuan_surat->Pegawai->ttd }}" class="top-left" width="150px" style="padding-left:1px" alt="">
                                {{--  <img class="top-left" src="{{ asset('ttd') }}/{{ $disposisi->Pegawai->ttd }}" width="120px" alt="">  --}}
                            </div>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if ($disposisi == null)

                            @else
                            <br>
                            <br>
                            <br>
                            <br>
                                <b>({{ $disposisi->Pegawai->name }})</b>
                            @endif
                            </td>
                            <td style="width: 300px"></td>
                            <td>
                                <br>
                                <br>
                                <br>
                                <br>
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
