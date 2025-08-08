<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-g">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body { display: flex; }
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar a {
            padding: 15px 20px;
            text-decoration: none;
            font-size: 18px;
            color: #ddd;
            display: block;
        }
        .sidebar a:hover {
            background-color: #495057;
            color: white;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }
        .navbar-custom {
            display: flex;
            justify-content: flex-end;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h4 class="text-white text-center mb-4">Admin Panel</h4>
    <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>

    {{-- Menu Hanya untuk Super Admin --}}
    @if(auth()->user()->role == 'super_admin')
        <a href="{{ route('users.index') }}"><i class="fas fa-users"></i> Kelola User</a>
        <a href="{{ route('bidang.index') }}"><i class="fas fa-building"></i> Kelola Bidang</a>
        <a href="{{ route('layanan.index') }}"><i class="fas fa-concierge-bell"></i> Kelola Layanan</a>
        <a href="{{ route('faq.index') }}"><i class="fas fa-question-circle"></i> Kelola FAQ</a>
    @endif

    {{-- Menu Hanya untuk Admin Bidang --}}
    @if(auth()->user()->role == 'admin_bidang')
        <a href="{{ route('admin.masukan.index') }}"><i class="fas fa-inbox"></i> Masukan Pengguna</a>
    @endif
</div>

<div class="main-content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-fluid navbar-custom">
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <main>
        @yield('content')
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>