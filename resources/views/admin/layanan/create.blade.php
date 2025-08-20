@extends('layouts.admin')
@section('title', 'Tambah Layanan Baru')
@section('content')
<div class="container-fluid">
    <h1>Tambah Data Layanan Baru</h1>
    <form action="{{ route('layanan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama_layanan" class="form-label">Nama Layanan</label>
            <input type="text" name="nama_layanan" id="nama_layanan" class="form-control" required>
        </div>

        {{-- Dropdown menu --}}
        <div class="mb-3">
            <label for="bidang_id">Pilih Bidang Induk</label>
            <select name="bidang_id" id="bidang_id" class="form-select" required>
                <option value="" disabled selected>--Pilih salah satu bidang--</option>

                @foreach ($bidangs as $bidang)
                    <option value="{{ $bidang->id }}">{{ $bidang->nama_bidang }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="detail" class="form-label">Detail Layanan</label>
            <textarea name="detail" id="detail" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
    </form>
</div>
@endsection