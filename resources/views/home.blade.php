@extends('layouts.master')
@section('judul')
Kasir Angkringan Redew
@endsection
@section('judul_sub')
Halaman Utama Sesudah Login
@endsection
@section('content')
<div class="h2 mb-3 text-center">Halaman Utama</div>
<hr style="width:75%">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kasir Angkringan Redew</h6>
    </div>
    <div class="card-body">
        <div class="h2">Kasir Angkringan Redew</div>
        <hr style="width:50%"><br><br>
        <div class="h4">Aplikasi Ini Menyediakan : </div>
        <ul>
            <li>Mencatat transaksi pembelian Makanan</li>
            <li>Menampilkan daftar transaksi pembelian Makanan</li>
            <li>Authentikasi login pengguna</li>
            <li>Pengaturan data pengguna</li>
        </ul>
    </div>
</div>
@endsection
