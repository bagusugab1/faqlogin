@extends('layouts.admin')
@section('title', 'Tambah FAQ Baru')
@section('content')
<div class="container-fluid">
    <h1>Tambah Data FAQ Baru</h1>

    <form action="{{ route('faq.store') }}" method="POST">
        @csrf
        {{-- Dropdown untuk memilih Bidang --}}
        <div class="mb-3">
            <label for="bidang" class="form-label">Pilih Bidang</label>
            <select name="bidang_id" id="bidang" class="form-select" required>
                <option value="" disabled selected>-- Pilih salah satu bidang --</option>
                @foreach($bidangs as $bidang)
                    <option value="{{ $bidang->id }}">{{ $bidang->nama_bidang }}</option>
                @endforeach
            </select>
        </div>

        {{-- Dropdown untuk memilih Layanan (akan diisi oleh JavaScript) --}}
        <div class="mb-3">
            <label for="layanan" class="form-label">Pilih Layanan</label>
            <select name="layanan_id" id="layanan" class="form-select" required>
                <option value="" disabled selected>-- Pilih bidang terlebih dahulu --</option>
            </select>
        </div>

        {{-- Input untuk Pertanyaan dan Jawaban --}}
        <div class="mb-3">
            <label for="pertanyaan" class="form-label">Pertanyaan (Question)</label>
            <textarea name="pertanyaan" id="pertanyaan" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="jawaban" class="form-label">Jawaban (Answer)</label>
            <textarea name="jawaban" id="jawaban" class="form-control" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection

@push('scripts')
{{-- JavaScript untuk fungsionalitas dropdown dinamis --}}
<script>
    // Menunggu sampai seluruh dokumen HTML selesai dimuat
    document.addEventListener('DOMContentLoaded', function () {
        // Mengambil data semua layanan dari PHP (Blade) dan menyimpannya di variabel JavaScript
        const allLayanans = @json($layanans);

        // Mengambil elemen dropdown dari HTML berdasarkan ID-nya
        const bidangDropdown = document.getElementById('bidang');
        const layananDropdown = document.getElementById('layanan');

        // Menambahkan 'event listener'. Kode ini akan berjalan setiap kali pilihan bidang diubah.
        bidangDropdown.addEventListener('change', function () {
            // Mengambil ID dari bidang yang sedang dipilih
            const selectedBidangId = this.value;

            // 1. Mengosongkan dropdown layanan terlebih dahulu
            layananDropdown.innerHTML = '<option value="" disabled selected>-- Pilih layanan --</option>';

            // 2. Filter data 'allLayanans' untuk mendapatkan layanan yang sesuai dengan bidang yang dipilih
            const filteredLayanans = allLayanans.filter(function (layanan) {
                return layanan.bidang_id == selectedBidangId;
            });

            // 3. Isi dropdown layanan dengan data yang sudah difilter
            filteredLayanans.forEach(function (layanan) {
                const option = document.createElement('option');
                option.value = layanan.id;
                option.textContent = layanan.nama_layanan;
                layananDropdown.appendChild(option);
            });
        });
    });
</script>
@endpush