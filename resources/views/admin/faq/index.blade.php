@extends('layouts.admin')

@section('title', 'Kelola Bidang')

@section('content')
    <div class="container-fluid">
        <h1>Manajemen Data FAQ</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('faq.create') }}" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Tambah Data FAQ</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Bidang</th>
                    <th>Layanan</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- Data akan ditampilkan di sini menggunakan @foreach --}}
                @foreach ($faqs as $faq)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $faq->bidang->nama_bidang ?? 'Tidak Ada' }}</td>
                        <td>{{ $faq->layanan->nama_layanan ?? 'Tidak Ada' }}</td>
                        <td>{{ $faq->pertanyaan }}</td>
                        <td>{{ $faq->jawaban }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen"></i> Edit</a>
                            <form action="{{ route('faq.destroy', $faq) }}" method="POST"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mt-2"><i
                                        class="fa-solid fa-trash-can"></i> Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
