@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid">
    <h3>Selamat Datang, {{ Auth::user()->name }}!</h3>
    <hr>
    <div class="row">

        @if (isset($stats['totalBidang']))
            <div class="col-md-4 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <i class="fa-solid fa-building"></i>
                    <h5 class="card-title">{{ $stats['totalBidang'] }}</h5>
                    
                    <p class="card-text">Total Bidang</p>
                </div>
            </div>
        </div>
        @endif
        
        @if (isset($stats['totalLayanan']))
            <div class="col-md-4 mb-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <i class="fa-solid fa-bell-concierge"></i>
                    <h5 class="card-title">{{ $stats['totalLayanan'] }}</h5>
                    
                    <p class="card-text">Total Layanan</p>
                </div>
            </div>
        </div>
        @endif
        
        @if (isset($stats['totalLayanan']))
            <div class="col-md-4 mb-3">
            <div class="card text-white bg-info">
                <div class="card-body">
                    <i class="fa-solid fa-comments"></i>
                    <h5 class="card-title">{{ $stats['totalFaq'] }}</h5>
                    
                    <p class="card-text">Total FAQ</p>
                </div>
            </div>
        </div>
        @endif
        
        @if (isset($stats['totalUser']))
            <div class="col-md-4 mb-3">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <i class="fa-solid fa-user"></i>
                    <h5 class="card-title">{{ $stats['totalUser'] }}</h5>
                    
                    <p class="card-text">Total User</p>
                </div>
            </div>
        </div>
        @endif
        
    </div>
</div>
@endsection