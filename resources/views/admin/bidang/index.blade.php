@extends('layouts.admin')

@section('title', 'Kelola Bidang')

@section('content')
    <div class="container-fluid">
        <h1>Manajemen Data Bidang</h1>
        <p>Di halaman ini, Anda dapat menambah, mengubah, dan menghapus data bidang.</p>
        
        <button class="btn btn-primary mb-3">Tambah Bidang Baru</button>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Bidang</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- Data akan ditampilkan di sini menggunakan @foreach --}}
                <tr>
                    <td>1</td>
                    <td>Bidang Teknologi Informasi</td>
                    <td>Mengelola semua hal terkait TI.</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection