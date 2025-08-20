<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        
        body {
            display: flex;
            overflow-x: hidden;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
            z-index: 1000;
            transition: transform 0.3s ease-in-out;
        }

        .sidebar a {
            padding: 15px 20px;
            text-decoration: none;
            font-size: 18px;
            color: #ddd;
            display: block;
            white-space: nowrap;
        }

        .sidebar a:hover {
            background-color: #495057;
            color: white;
        }

        .main-content {
            margin-left: 250px;
            padding: 0;
            width: calc(100% - 250px);
            transition: margin-left 0.3s ease-in-out, width 0.3s ease-in-out;
        }

        .sidebar.collapsed {
            transform: translateX(-100%);
        }
        .main-content.expanded {
            margin-left: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="sidebar" id="sidebar">
        <h4 class="text-white text-center mb-4">Admin Panel</h4>
        <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        @if (auth()->user()->role == 'super_admin')
            <a href="{{ route('users.index') }}"><i class="fas fa-users"></i> Kelola User</a>
            <a href="{{ route('bidang.index') }}"><i class="fas fa-building"></i> Kelola Bidang</a>
        @endif
        @if (auth()->user()->role == 'admin_bidang')
            <a href="{{ route('layanan.index') }}"><i class="fas fa-concierge-bell"></i> Kelola Layanan</a>
            <a href="{{ route('faq.index') }}"><i class="fas fa-question-circle"></i> Kelola FAQ</a>
            <a href="{{ route('admin.masukan.index') }}"><i class="fas fa-inbox fa-fw"></i> Masukan Pengguna</a>
        @endif
    </div>

    <div class="main-content" id="mainContent">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <div class="container-fluid">

                <button class="btn btn-light" type="button" id="sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="ms-auto">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="fa-solid fa-power-off"></i> Logout</button>
                                </form>
                                <a href="#" class="dropdown-item"><i class="fa-solid fa-circle-user"></i> Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="p-3">
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
    
    <script>
        // Menunggu sampai seluruh dokumen HTML selesai dimuat
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil elemen yang kita butuhkan
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            const sidebarToggle = document.getElementById('sidebarToggle');

            // Pastikan semua elemen ada sebelum menambahkan event listener
            if (sidebar && mainContent && sidebarToggle) {

                // Tambahkan event listener untuk klik pada tombol hamburger
                sidebarToggle.addEventListener('click', function() {
                    // Toggle (tambah/hapus) kelas 'collapsed' pada sidebar
                    sidebar.classList.toggle('collapsed');

                    // Toggle (tambah/hapus) kelas 'expanded' pada konten utama
                    mainContent.classList.toggle('expanded');
                });
            }
        });
    </script>
</body>

</html>
