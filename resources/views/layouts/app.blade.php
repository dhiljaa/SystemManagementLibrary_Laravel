<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Sistem Manajemen Perpustakaan') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/library.png') }}" type="image/png" />

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <style>
        /* ===== Modern & professional styles ===== */
        body {
            background-color: #f9fafb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #374151; /* Tailwind Gray 700 */
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header styles */
        #header {
            background-color: #fff;
            box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);
            position: sticky;
            top: 0;
            z-index: 1100;
            padding: 1rem 0;
        }

        /* Logo styles */
        .logo img {
            max-height: 56px;
            transition: transform 0.25s ease;
            cursor: pointer;
        }

        .logo img:hover {
            transform: scale(1.1);
        }

        /* Navigation Menu styles */
        #menubar {
            background-color: #fff;
            border-bottom: 1px solid #e5e7eb; /* Tailwind Gray 200 */
            box-shadow: 0 2px 6px rgb(0 0 0 / 0.05);
            z-index: 1050;
        }

        #menubar .menu {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin: 0;
            padding: 0.5rem 0;
            flex-wrap: wrap;
        }

        #menubar .menu li a {
            text-decoration: none;
            color: #2563eb; /* Tailwind Blue 600 */
            font-weight: 500;
            padding: 0.5rem 0;
            position: relative;
            transition: color 0.3s ease;
            font-size: 1rem;
        }

        #menubar .menu li a::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #2563eb;
            transition: width 0.3s ease;
        }

        #menubar .menu li a:hover,
        #menubar .menu li a.active {
            color: #1e40af; /* Tailwind Blue 800 */
            font-weight: 600;
        }

        #menubar .menu li a:hover::after,
        #menubar .menu li a.active::after {
            width: 100%;
        }

        /* Dropdown button styles */
        .btn-secondary.dropdown-toggle {
            background-color: #2563eb;
            border-color: #2563eb;
            font-weight: 600;
            box-shadow: 0 3px 8px rgb(37 99 235 / 0.5);
            transition: background-color 0.3s ease, border-color 0.3s ease;
            color: #fff;
        }

        .btn-secondary.dropdown-toggle:hover,
        .btn-secondary.dropdown-toggle:focus {
            background-color: #1e40af;
            border-color: #1e40af;
            color: #fff;
            box-shadow: 0 5px 12px rgb(29 78 216 / 0.7);
        }

        /* Dropdown menu styles */
        .dropdown-menu {
            border-radius: 0.5rem;
            box-shadow: 0 8px 24px rgb(0 0 0 / 0.15);
            min-width: 12rem;
            padding: 0.25rem 0;
            font-weight: 500;
        }

        .dropdown-menu .dropdown-item {
            transition: background-color 0.25s ease, color 0.25s ease;
            font-size: 0.95rem;
            padding: 0.5rem 1.25rem;
        }

        .dropdown-menu .dropdown-item:hover,
        .dropdown-menu .dropdown-item:focus {
            background-color: #3b82f6; /* Tailwind Blue 500 */
            color: white;
        }

        /* Main content container */
        main.container {
            flex: 1 0 auto;
            padding-top: 2rem;
            padding-bottom: 2rem;
            max-width: 1140px;
        }

        /* Footer styles */
        #footer {
            font-size: 0.875rem;
            background-color: #f3f4f6; /* Tailwind Gray 100 */
            color: #6b7280; /* Tailwind Gray 500 */
            padding: 1rem 0;
            text-align: center;
            box-shadow: inset 0 1px 3px rgb(0 0 0 / 0.05);
            flex-shrink: 0;
        }

        /* Responsive adjustments */
        @media (max-width: 767.98px) {
            #menubar .menu {
                gap: 1rem;
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header id="header" class="shadow-sm">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 d-flex justify-content-center justify-content-md-start">
                    <a href="{{ route('dashboard') }}" class="logo" aria-label="Halaman Dasbor">
                        <img src="{{ asset('images/library.png') }}" alt="Logo Perpustakaan" />
                    </a>
                </div>
                <div
                    class="col-12 col-md-8 d-flex justify-content-center justify-content-md-end mt-3 mt-md-0">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                            Halo, {{ auth()->user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="{{ route('change_password') }}">Ubah Kata Sandi</a></li>
                            <li>
                                <a class="dropdown-item" href="#"
                                   onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                    Keluar
                                </a>
                            </li>
                        </ul>
                    </div>
                    <form method="POST" id="logoutForm" action="{{ route('logout') }}" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation Menu -->
    <nav id="menubar" aria-label="Navigasi Utama">
        <div class="container">
            <ul class="menu" role="menubar">
                <li role="none"><a role="menuitem" href="{{ route('dashboard') }}"
                        class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dasbor</a></li>
                <li role="none"><a role="menuitem" href="{{ route('authors') }}"
                        class="{{ request()->routeIs('authors') ? 'active' : '' }}">Penulis</a></li>
                <li role="none"><a role="menuitem" href="{{ route('publishers') }}"
                        class="{{ request()->routeIs('publishers') ? 'active' : '' }}">Penerbit</a></li>
                <li role="none"><a role="menuitem" href="{{ route('categories') }}"
                        class="{{ request()->routeIs('categories') ? 'active' : '' }}">Kategori</a></li>
                <li role="none"><a role="menuitem" href="{{ route('books') }}"
                        class="{{ request()->routeIs('books') ? 'active' : '' }}">Buku</a></li>
                <li role="none"><a role="menuitem" href="{{ route('students') }}"
                        class="{{ request()->routeIs('students') ? 'active' : '' }}">Siswa Terdaftar</a></li>
                <li role="none"><a role="menuitem" href="{{ route('book_issued') }}"
                        class="{{ request()->routeIs('book_issued') ? 'active' : '' }}">Peminjaman Buku</a></li>
                <li role="none"><a role="menuitem" href="{{ route('reports') }}"
                        class="{{ request()->routeIs('reports') ? 'active' : '' }}">Laporan</a></li>
                <li role="none"><a role="menuitem" href="{{ route('settings') }}"
                        class="{{ request()->routeIs('settings') ? 'active' : '' }}">Pengaturan</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-4 container">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="footer">
        <small>
            © Hak Cipta {{ now()->format('Y') }}
            <a href="#" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-primary">
                Sungokong Company 😎
            </a>
        </small>
    </footer>

    <!-- Bootstrap 5 Bundle JS (Popper included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Optional: Your app custom JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
