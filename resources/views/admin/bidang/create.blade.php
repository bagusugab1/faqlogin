@extends('layouts.admin')
@section('title', 'Tambah Bidang')
@section('content')
<div class="container-fluid">
    <h1>Tambah Bidang Baru</h1>
    <form action="{{ route('bidang.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_bidang" class="form-label">Nama Bidang</label>
            <input type="text" name="nama_bidang" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection