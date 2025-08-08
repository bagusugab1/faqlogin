@extends('layouts.admin')

@section('title', 'Kelola Bidang')

@section('content')
    <div class="container-fluid">
        <h1>Manajemen Data FAQ</h1>
        
        <button class="btn btn-primary mb-3">Tambah FAQ</button>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Bidang</th>
                    <th>Layanan</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- Data akan ditampilkan di sini menggunakan @foreach --}}
                <tr>
                    <td>1</td>
                    <td>Aplikasi Informatika</td>
                    <td>Pengembangan Aplikasi</td>
                    <td>Lorem ipsum dolor sit amet?</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates obcaecati ullam sint.</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection