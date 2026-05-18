<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('welcome');
});

// Route Anggota
Route::get('/anggota', function () {
    $anggota_list = [
        ['id' => 1, 'kode' => 'AGT-001', 'nama' => 'Budi Santoso', 'email' => 'budi@email.com', 'telepon' => '081234567890', 'alamat' => 'Jakarta', 'status' => 'Aktif'],
        ['id' => 2, 'kode' => 'AGT-002', 'nama' => 'Maya Wulandari', 'email' => 'maya@email.com', 'telepon' => '082345678901', 'alamat' => 'Bandung', 'status' => 'Aktif'],
        ['id' => 3, 'kode' => 'AGT-003', 'nama' => 'Dimas Saputra', 'email' => 'dimas@email.com', 'telepon' => '083456789012', 'alamat' => 'Surabaya', 'status' => 'Non-Aktif'],
        ['id' => 4, 'kode' => 'AGT-004', 'nama' => 'Rina Amelia', 'email' => 'rina@email.com', 'telepon' => '084567890123', 'alamat' => 'Yogyakarta', 'status' => 'Aktif'],
        ['id' => 5, 'kode' => 'AGT-005', 'nama' => 'Joko Susilo', 'email' => 'joko@email.com', 'telepon' => '085678901234', 'alamat' => 'Semarang', 'status' => 'Aktif'],
    ];
    return view('anggota.index', compact('anggota_list'));
})->name('anggota.index');

Route::get('/anggota/{id}', function ($id) {
    $anggota_list = [
        1 => ['id' => 1, 'kode' => 'AGT-001', 'nama' => 'Budi Santoso', 'email' => 'budi@email.com', 'telepon' => '081234567890', 'alamat' => 'Jakarta', 'status' => 'Aktif'],
        2 => ['id' => 2, 'kode' => 'AGT-002', 'nama' => 'Maya Wulandari', 'email' => 'maya@email.com', 'telepon' => '082345678901', 'alamat' => 'Bandung', 'status' => 'Aktif'],
        3 => ['id' => 3, 'kode' => 'AGT-003', 'nama' => 'Dimas Saputra', 'email' => 'dimas@email.com', 'telepon' => '083456789012', 'alamat' => 'Surabaya', 'status' => 'Non-Aktif'],
        4 => ['id' => 4, 'kode' => 'AGT-004', 'nama' => 'Rina Amelia', 'email' => 'rina@email.com', 'telepon' => '084567890123', 'alamat' => 'Yogyakarta', 'status' => 'Aktif'],
        5 => ['id' => 5, 'kode' => 'AGT-005', 'nama' => 'Joko Susilo', 'email' => 'joko@email.com', 'telepon' => '085678901234', 'alamat' => 'Semarang', 'status' => 'Aktif'],
    ];
    if (!isset($anggota_list[$id])) abort(404);
    return view('anggota.show', compact('anggota_list', 'id'));
})->name('anggota.show');

// Route Kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/search/{keyword}', [KategoriController::class, 'search'])->name('kategori.search');
Route::get('/kategori/{id}', [KategoriController::class, 'show'])->name('kategori.show');