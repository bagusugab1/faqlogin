@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid">
    <h3>Selamat Datang, {{ Auth::user()->name }}!</h3>
    <hr>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">{{ $totalBidang }}</h5>
                    <p class="card-text">Total Bidang</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">{{ $totalLayanan }}</h5>
                    <p class="card-text">Total Layanan</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-info">
                <div class="card-body">
                    <h5 class="card-title">{{ $totalFaq }}</h5>
                    <p class="card-text">Total FAQ</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection