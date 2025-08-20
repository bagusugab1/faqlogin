@extends('layouts.admin')
@section('title', 'Edit Layanan')
@section('content')
<div class="container-fluid">
    <h1>Edit Layanan</h1>
    
    
    <form action="{{ route('layanan.update', $layanan) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_layanan" class="form-label">Nama Layanan</label>
            <input type="text" name="nama_layanan" id="nama_layanan" class="form-control" value="{{ old('nama_layanan', $layanan->nama_layanan) }}" required>
        </div>
        <div class="mb-3">
            <label for="bidang_id" class="form-label">Pilih Bidang Induk</label>
            <select name="bidang_id" id="bidang_id" class="form-select" required>
                <option value="" disabled>-- Pilih salah satu bidang --</option>
                
                @foreach($bidangs as $bidang)
                    <option value="{{ $bidang->id }}" {{ $layanan->bidang_id == $bidang->id ? 'selected' : '' }}>
                        {{ $bidang->nama_bidang }}
                    </option>
                @endforeach
            </select>
        </div>

        
        {{-- <div class="mb-3">
            <label for="detail" class="form-label">Detail Layanan</label>
            <textarea name="detail" id="detail" class="form-control" rows="3">{{ old('detail', $layanan->detail) }}</textarea>
        </div> --}}

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection