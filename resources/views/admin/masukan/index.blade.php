@extends('layouts.admin')

@section('title', 'Masukan Pengguna')

@section('content')
<div class="container-fluid">
    <h1>Daftar Masukan dari Pengguna</h1>
    <p>Halaman ini menampilkan semua data yang diinput oleh pengguna dari form di landing page.</p>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Pengirim</th>
                        <th>Subjek</th>
                        <th>Tanggal Kirim</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($masukans as $item)
                    <tr class="{{ is_null($item->dibaca_pada) ? 'fw-bold' : '' }}">
                        <td>{{ $item->nama_pengirim }}</td>
                        <td>{{ $item->subjek }}</td>
                        <td>{{ $item->created_at->format('d M Y, H:i') }}</td>
                        <td>
                            @if(is_null($item->dibaca_pada))
                                <span class="badge bg-primary">Baru</span>
                            @else
                                <span class="badge bg-secondary">Sudah Dibaca</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.masukan.show', $item->id) }}" class="btn btn-sm btn-info text-white">
                                <i class="fas fa-eye"></i> Lihat
                            </a>
                            <form action="{{ route('admin.masukan.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada masukan dari pengguna.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            {{-- Link Paginasi --}}
            <div class="mt-3">
                {{ $masukans->links() }}
            </div>
        </div>
    </div>
</div>
@endsection