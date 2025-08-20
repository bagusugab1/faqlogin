@extends('layouts.admin')

@section('title', 'Kelola Bidang')

@section('content')
    <div class="container-fluid">
        <h1>Manajemen Data Bidang</h1>
        <p>Di halaman ini, Anda dapat menambah, mengubah, dan menghapus data bidang.</p>
        
        <a href="{{ route('bidang.create') }}" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Tambah Bidang Baru</a>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Bidang</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bidangs as $bidang)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>Bidang {{ $bidang->nama_bidang }}</td>
                    <td>{{ $bidang->deskripsi }}</td>
                    <td>
                        <a href="{{ route('bidang.edit', $bidang) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen"></i>Edit</a>
                        <form action="{{ route('bidang.destroy', $bidang) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection