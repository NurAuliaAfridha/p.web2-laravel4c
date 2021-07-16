<?php

Route::get('home', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('mahasiswa', 'MahasiswaController');

//routing mahasiswa
Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');

Route::get('mahasiswa-create', 'MahasiswaController@create')->name('tambah.mahasiswa');

Route::POST('mahasiswa-store', 'MahasiswaController@store')->name('simpan.mahasiswa');

Route::get('mahasiswa-edit/{id}', 'MahasiswaController@edit')->name('edit.mahasiswa');

Route::POST('mahasiswa-update/{id}', 'MahasiswaController@update')->name('update.mahasiswa');

Route::get('mahasiswa-hapus/{id}', 'MahasiswaController@destroy')->name('hapus.mahasiswa');

//routing makul
Route::get('makul', 'MakulController@index')->name('makul');

Route::get('makul-create', 'MakulController@create')->name('tambah.makul');

Route::POST('makul-store', 'MakulController@store')->name('simpan.makul');

Route::get('makul-edit/{id}', 'MakulController@edit')->name('edit.makul');

Route::POST('makul-update/{id}', 'MakulController@update')->name('update.makul');

Route::get('makul-hapus/{id}', 'MakulController@destroy')->name('hapus.makul');

//routing nilai
Route::get('nilai', 'NilaiController@index')->name('nilai');

Route::get('nilai-create', 'NilaiController@create')->name('tambah.nilai');

Route::POST('nilai-store', 'NilaiController@store')->name('simpan.nilai');

Route::get('nilai-edit/{id}', 'NilaiController@edit')->name('edit.nilai');

Route::POST('nilai-update/{id}', 'NilaiController@update')->name('update.nilai');

Route::get('nilai-hapus/{id}', 'NilaiController@destroy')->name('hapus.nilai');