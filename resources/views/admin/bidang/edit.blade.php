@extends('layouts.admin')
@section('title', 'Edit Bidang')
@section('content')
<div class="container-fluid">
    <h1>Edit Bidang</h1>
    <form action="{{ route('bidang.update', $bidang) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_bidang" class="form-label">Nama Bidang</label>
            <input type="text" name="nama_bidang" class="form-control" value="{{ $bidang->nama_bidang }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $bidang->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection