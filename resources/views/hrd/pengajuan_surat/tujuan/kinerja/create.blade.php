@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Pengajuan Kinerja Karyawan
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('h_tujuan.kinerja.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Pegawai</label>
                                <select name="id_user" id="" class="form-control">
                                    <option value="">Pilih Pegawai</option>
                                    @foreach ($pegawai as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ $item->Jabatan->jabatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label"><b>I. Absensi Keterlambatan</b></label>
                                <br>

                                1. Sebab dan Jumlah Hari Absen:
                                <table class="table table-sm table-borderless">
                                    <tr>
                                        <td>a. Sakit</td>
                                        <td>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" min="0" name="sakit"
                                                    style="width: 10px;">
                                                <span class="input-group-text">Hari</span>
                                            </div>
                                        </td>
                                        <td>b. Izin</td>
                                        <td>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" min="0" name="izin"
                                                    style="width: 10px;">
                                                <span class="input-group-text">Hari</span>
                                            </div>
                                        </td>
                                        <td>c .Alpa</td>
                                        <td>
                                            <div class="input-group mb-3" name="alpa">
                                                <input type="number" class="form-control" name="alpa" min="0"
                                                    style="width: 10px;">
                                                <span class="input-group-text">Hari</span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                                2. Keterlambatan:
                                <table class="table table-sm table-borderless">
                                    <tr>
                                        <td>
                                            <select name="terlambat" id="" class="form-control">
                                                <option value="pernah">Pilih</option>
                                                <option value="pernah">Pernah</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" name="juml_terlambat">
                                                <span class="input-group-text">Hari</span><br>
                                            </div>
                                            <b style="color:red">*Jika Pernah</b>
                                        </td>
                                    </tr>
                                </table>

                                3. Datang Siang:
                                <table class="table table-sm table-borderless">
                                    <tr>
                                        <td>
                                            <select name="dt_siang" id="" class="form-control">
                                                <option value="pernah">Pilih</option>
                                                <option value="pernah">Pernah</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" name="juml_dt_siang">
                                                <span class="input-group-text">Hari</span><br>
                                            </div>
                                            <b style="color:red">*Jika Pernah</b>

                                        </td>
                                    </tr>
                                </table>

                                4. Pulang Cepat:
                                <table class="table table-sm table-borderless">
                                    <tr>
                                        <td>
                                            <select name="pl_cepat" id="" class="form-control">
                                                <option value="pernah">Pilih</option>
                                                <option value="pernah">Pernah</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" name="juml_pl_cepat">
                                                <span class="input-group-text">Hari</span><br>
                                            </div>
                                            <b style="color:red">*Jika Pernah</b>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="mb3">
                                <label for=""><b>II. Penilaian Hasil Kerja</b></label>
                                <table class="table table-sm table-bordered">
                                    <tr>
                                        <thead>
                                            <th>No.</th>
                                            <th>Aspek</th>
                                            <th>Nilai</th>
                                        </thead>
                                    </tr>
                                    <tr>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Kualitas Kerja</td>
                                                <td>
                                                    <select name="kualitas_kerja" id="" class="form-control">
                                                        <option value="">Pilih Nilai</option>
                                                        <option value="1">Kurang Sekali (1)</option>
                                                        <option value="2">Kurang (2)</option>
                                                        <option value="3">Cukup (3)</option>
                                                        <option value="4">Cukup Baik (4)</option>
                                                        <option value="5">Baik (5)</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Kuantitas Kerja</td>
                                                <td>
                                                    <select name="kuantitas_kerja" id="" class="form-control">
                                                        <option value="">Pilih Nilai</option>
                                                        <option value="1">Kurang Sekali (1)</option>
                                                        <option value="2">Kurang (2)</option>
                                                        <option value="3">Cukup (3)</option>
                                                        <option value="4">Cukup Baik (4)</option>
                                                        <option value="5">Baik (5)</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>Inisiatif</td>
                                                <td>
                                                    <select name="inisiatif" id="" class="form-control">
                                                        <option value="">Pilih Nilai</option>
                                                        <option value="1">Kurang Sekali (1)</option>
                                                        <option value="2">Kurang (2)</option>
                                                        <option value="3">Cukup (3)</option>
                                                        <option value="4">Cukup Baik (4)</option>
                                                        <option value="5">Baik (5)</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Disiplin</td>
                                                <td>
                                                    <select name="disiplin" id="" class="form-control">
                                                        <option value="">Pilih Nilai</option>
                                                        <option value="1">Kurang Sekali (1)</option>
                                                      <option value="2">Kurang (2)</option>
                                                        <option value="3">Cukup (3)</option>
                                                        <option value="4">Cukup Baik (4)</option>
                                                        <option value="5">Baik (5)</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5.</td>
                                                <td>Tanggung Jawab</td>
                                                <td>
                                                    <select name="tanggung_jawab" id="" class="form-control">
                                                        <option value="">Pilih Nilai</option>
                                                        <option value="1">Kurang Sekali (1)</option>
                                                      <option value="2">Kurang (2)</option>
                                                        <option value="3">Cukup (3)</option>
                                                        <option value="4">Cukup Baik (4)</option>
                                                        <option value="5">Baik (5)</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6.</td>
                                                <td>Motovasi</td>
                                                <td>
                                                    <select name="motivasi" id="" class="form-control">
                                                        <option value="">Pilih Nilai</option>
                                                        <option value="1">Kurang Sekali (1)</option>
                                                        <option value="2">Kurang (2)</option>
                                                        <option value="3">Cukup (3)</option>
                                                        <option value="4">Cukup Baik (4)</option>
                                                        <option value="5">Baik (5)</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7.</td>
                                                <td>Kerjasama</td>
                                                <td>
                                                    <select name="kerjasama" id="" class="form-control">
                                                        <option value="">Pilih Nilai</option>
                                                        <option value="1">Kurang Sekali (1)</option>
                                                        <option value="2">Kurang (2)</option>
                                                        <option value="3">Cukup (3)</option>
                                                        <option value="4">Cukup Baik (4)</option>
                                                        <option value="5">Baik (5)</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8.</td>
                                                <td>Pemahaman Terhadap Tugas</td>
                                                <td>
                                                    <select name="PPT" id="" class="form-control">
                                                        <option value="">Pilih Nilai</option>
                                                        <option value="1">Kurang Sekali (1)</option>
                                                        <option value="2">Kurang (2)</option>
                                                        <option value="3">Cukup (3)</option>
                                                        <option value="4">Cukup Baik (4)</option>
                                                        <option value="5">Baik (5)</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9.</td>
                                                <td>Penyesuaian Diri</td>
                                                <td>
                                                    <select name="PD" id="" class="form-control">
                                                        <option value="">Pilih Nilai</option>
                                                        <option value="1">Kurang Sekali (1)</option>
                                                        <option value="2">Kurang (2)</option>
                                                        <option value="3">Cukup (3)</option>
                                                        <option value="4">Cukup Baik (4)</option>
                                                        <option value="5">Baik (5)</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10.</td>
                                                <td>Kepemimpinan</td>
                                                <td>
                                                    <select name="kepemimpinan" id="" class="form-control">
                                                        <option value="">Pilih Nilai</option>
                                                        <option value="1">Kurang Sekali (1)</option>
                                                        <option value="2">Kurang (2)</option>
                                                        <option value="3">Cukup (3)</option>
                                                        <option value="4">Cukup Baik (4)</option>
                                                        <option value="5">Baik (5)</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11.</td>
                                                <td>Pemecahan Masalah</td>
                                                <td>
                                                    <select name="PM" id="" class="form-control">
                                                        <option value="">Pilih Nilai</option>
                                                        <option value="1">Kurang Sekali (1)</option>
                                                        <option value="2">Kurang (2)</option>
                                                        <option value="3">Cukup (3)</option>
                                                        <option value="4">Cukup Baik (4)</option>
                                                        <option value="5">Baik (5)</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12.</td>
                                                <td>Pengembalian Tugas</td>
                                                <td>
                                                    <select name="PT" id="" class="form-control">
                                                        <option value="">Pilih Nilai</option>
                                                        <option value="1">Kurang Sekali (1)</option>
                                                        <option value="2">Kurang (2)</option>
                                                        <option value="3">Cukup (3)</option>
                                                        <option value="4">Cukup Baik (4)</option>
                                                        <option value="5">Baik (5)</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </tr>
                                </table>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <a href="{{ route('h_tujuan.surat_izin') }}" class="btn btn-sm btn-danger">Kembali</a>
                                <input type="submit" class="btn btn-sm btn-success" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
