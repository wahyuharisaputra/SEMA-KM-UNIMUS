<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - SEMA KM UNIMUS</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fc;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #1a237e; /* Premium Dark Blue */
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            transition: all 0.3s;
        }
        .sidebar-brand {
            padding: 1.5rem 1rem;
            text-align: center;
            color: #fff;
            font-weight: bold;
            font-size: 1.2rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .sidebar-brand img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
            border-radius: 50%;
            object-fit: cover;
            background-color: white;
            padding: 2px;
        }
        .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 0.8rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s;
        }
        .nav-link:hover, .nav-link.active {
            color: #fff;
            background: rgba(255, 255, 255, 0.1);
            border-right: 4px solid #ffc107; /* Gold accent */
        }
        .topbar {
            background-color: #fff;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            padding: 1rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .main-content {
            padding: 1.5rem;
            flex-grow: 1;
        }
        .card {
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            margin-bottom: 1.5rem;
        }
        .card-header {
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
            font-weight: bold;
            color: #1a237e;
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column flex-shrink-0 text-white" style="width: 250px;">
        <a href="{{ route('admin.dashboard') }}" class="sidebar-brand text-white text-decoration-none">
            <img src="{{ asset('images/logo.png') }}" alt="Logo SEMA KM">
            <div class="d-block">SEMA KM UNIMUS</div>
            <div class="small fw-normal" style="font-size: 0.7rem; color: #ffc107;">Administrator</div>
        </a>
        <ul class="nav nav-pills flex-column mb-auto mt-3">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <i class="bi bi-newspaper"></i> Berita & Artikel
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <i class="bi bi-calendar-check"></i> Program Kerja
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <i class="bi bi-diagram-3"></i> Struktur Organisasi
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <i class="bi bi-images"></i> Galeri
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <i class="bi bi-file-earmark-pdf"></i> Dokumen Publik
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <i class="bi bi-chat-square-text"></i> Aspirasi
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <i class="bi bi-gear"></i> Pengaturan
                </a>
            </li>
        </ul>
    </div>

    <!-- Content Wrapper -->
    <div class="flex-grow-1 d-flex flex-column" style="min-width: 0;">
        <!-- Topbar -->
        <header class="topbar">
            <div>
                <!-- Toggle Menu for mobile could be here -->
                <h5 class="mb-0 text-dark fw-bold">Admin Panel</h5>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span class="text-secondary small">{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
            </div>
        </header>

        <!-- Main Content -->
        <main class="main-content">
            @yield('content')
        </main>
    </div>
</div>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.css"></script>
</body>
</html>
