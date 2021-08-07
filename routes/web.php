<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('jenis_surat', 'Admin\JenisSuratController');
    Route::resource('jabatan', 'Admin\JabatanController');
    Route::resource('pengajuan_surat', 'Admin\PengajuanSuratController');
    Route::resource('pegawai', 'Admin\PegawaiController');
    Route::resource('hrd', 'Admin\HRDController');
    Route::resource('pimpinan', 'Admin\PimpinanController');
    Route::get('disposisi_surat/{id}','Admin\DisposisiController@create')->name('disposisi.create');
    Route::post('disposisi_surat','Admin\DisposisiController@store')->name('disposisi.store');

    Route::get('tujuan/izin','Admin\TujuanSuratController@surat_izin')->name('tujuan.surat_izin');
    Route::get('tujuan/create_izin','Admin\TujuanSuratController@surat_izin_create')->name('tujuan.surat_izin.create');
    Route::post('tujuan/create_izin','Admin\TujuanSuratController@surat_izin_store')->name('tujuan.surat_izin.store');

    Route::get('tujuan/mutasi','Admin\TujuanSuratController@mutasi')->name('tujuan.mutasi');
    Route::get('tujuan/mutasi_create','Admin\TujuanSuratController@mutasi_create')->name('tujuan.mutasi.create');
    Route::post('tujuan/mutasi','Admin\TujuanSuratController@mutasi_store')->name('tujuan.mutasi.store');
    Route::get('tujuan/mutasi/{id}','Admin\TujuanSuratController@mutasi_show')->name('tujuan.mutasi.show');

    Route::get('tujuan/kinerja','Admin\TujuanSuratController@kinerja')->name('tujuan.kinerja');
    Route::get('tujuan/kinerja_create','Admin\TujuanSuratController@kinerja_create')->name('tujuan.kinerja.create');
    Route::post('tujuan/kinerja','Admin\TujuanSuratController@kinerja_store')->name('tujuan.kinerja.store');
    Route::get('tujuan/kinerja/{id}','Admin\TujuanSuratController@kinerja_show')->name('tujuan.kinerja.show');


});

Route::group(['prefix' => 'pimpinan'], function () {
    Route::resource('pimp_pengajuan_surat', 'Pimpinan\PengajuanController');
    Route::get('p_jenis_surat','pimpinan\TujuanSuratController@index')->name('p_tujuan.index');
    Route::get('p_surat_izin','pimpinan\TujuanSuratController@surat_izin')->name('p_tujuan.surat_izin');
    Route::get('p_mutasi','pimpinan\TujuanSuratController@mutasi')->name('p_tujuan.mutasi');
    Route::get('p_kinerja','pimpinan\TujuanSuratController@kinerja')->name('p_tujuan.kinerja');
    Route::post('verifikasi_mutasi','pimpinan\VerifikasiController@verifikasi_mutasi')->name('verifikasi.mutasi');

});

Route::group(['prefix' => 'pegawai'], function () {
    Route::resource('p_pengajuan_surat', 'Pegawai\PengajuanController');
    Route::get('p_detail/{id}','Pegawai\PengajuanController@detail')->name('p_pengajuan.detail');
    Route::get('p_disposisi_surat/{id}','pegawai\DisposisiController@create')->name('p_disposisi.create');
    Route::post('p_disposisi_surat','pegawai\DisposisiController@store')->name('p_disposisi.store');
});

Route::group(['prefix' => 'hrd'], function () {
    // Route::post('h_disposisi_surat','HRD\DisposisiController@store')->name('h_disposisi.store');
    Route::get('h_disposisi_surat/{id}','HRD\DisposisiController@create')->name('h_disposisi.create');
    Route::post('h_disposisi_surat','HRD\DisposisiController@verifikasi')->name('h_disposisi.verifikasi');
    Route::resource('h_pengajuan_surat', 'HRD\PengajuanController');

    Route::get('h_jenis_surat','HRD\TujuanController@index')->name('h_tujuan.index');

    // Surat Izin
    Route::get('h_tujuan/izin','HRD\TujuanController@surat_izin')->name('h_tujuan.surat_izin');
    Route::get('h_tujuan/create_izin','HRD\TujuanController@surat_izin_create')->name('h_tujuan.surat_izin.create');
    Route::post('h_tujuan/create_izin','HRD\TujuanController@surat_izin_store')->name('h_tujuan.surat_izin.store');
    Route::get('h_tujuan/disposisi_mutasi/{id}','HRD\DisposisiController@disposisi_mutasi')->name('disposisi.mutasi');
    Route::post('h_tujuan/disposisi_mutasi','HRD\DisposisiController@store')->name('h_disposisi.store');
    
    // Mutasi
    Route::get('h_tujuan/mutasi','HRD\TujuanController@mutasi')->name('h_tujuan.mutasi');
    Route::get('h_tujuan/mutasi_create','HRD\TujuanController@mutasi_create')->name('h_tujuan.mutasi.create');
    Route::post('h_tujuan/mutasi','HRD\TujuanController@mutasi_store')->name('h_tujuan.mutasi.store');
    Route::get('h_tujuan/mutasi/{id}','HRD\TujuanController@mutasi_show')->name('h_tujuan.mutasi.show');

    // Kinerja
    Route::get('h_tujuan/kinerja','HRD\TujuanController@kinerja')->name('h_tujuan.kinerja');
    Route::get('h_tujuan/kinerja/perhitungan','HRD\TujuanController@kinerja_perhitungan')->name('h_tujuan.kinerja.perhitungan');
    Route::get('h_tujuan/kinerja_create','HRD\TujuanController@kinerja_create')->name('h_tujuan.kinerja.create');
    Route::post('h_tujuan/kinerja','HRD\TujuanController@kinerja_store')->name('h_tujuan.kinerja.store');
    Route::get('h_tujuan/kinerja/{id}','HRD\TujuanController@kinerja_show')->name('h_tujuan.kinerja.show');


});