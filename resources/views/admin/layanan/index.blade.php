@extends('layouts.admin')
@section('title', 'Kelola Layanan')
@section('content')
<div class="container-fluid">
    <h1>Manajemen Data Layanan</h1>
    <a href="{{ route('layanan.create') }}" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Tambah Layanan Baru</a>
    {{-- ... notifikasi sukses ... --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Layanan</th>
                <th>Bidang Induk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($layanans as $layanan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $layanan->nama_layanan }}</td>
                <td>{{ $layanan->bidang->nama_bidang ?? 'Tidak ada' }}</td>
                <td>
                    <a href="{{ route('layanan.edit', $layanan) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen"></i> Edit</a>
                    <form action="{{ route('layanan.destroy', $layanan) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i> Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection