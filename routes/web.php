<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/produk', function () {
    $kode = ['BRG001', 'BRG002'];
    $nama = ['pena', 'buku'];
    $jenis = ['alat tulis', 'elektronik', 'sembako'];
    $harga = ['15000', '20000'];
    $jumlah = count($kode);
    return view('produk', compact('kode', 'nama', 'jenis', 'harga', 'jumlah'));
});