<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PLN Rantauprapat')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Latar belakang putih keabu-abuan */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .sidebar {
            height: 100vh; /* Tinggi penuh */
            background-color: #007bff; /* Biru */
            color: white; /* Teks putih */
        }
        .sidebar a {
            color: white; /* Link berwarna putih */
            text-decoration: none;
            padding: 10px 15px;
            display: block;
            font-weight: bold; /* Menu teks ditebalkan */
        }
        .sidebar a:hover {
            background-color: #0056b3; /* Biru lebih gelap saat hover */
        }
        .content-wrapper {
            flex: 1;
        }
        footer {
            background-color: #007bff; /* Biru */
            color: white;
            border-top: 1px solid #ccc;
            padding: 5px 0; /* Footer diperkecil */
            font-size: 0.9rem; /* Ukuran teks footer dikurangi */
            margin-top: auto;
            width: 100%; /* Lebar footer 100% */
            position: fixed; /* Tetap di bawah */
            bottom: 0;
        }
        .navbar {
            padding: 5px 10px; /* Navbar diperkecil */
        }
        .navbar-brand {
            font-size: 1rem; /* Ukuran teks navbar dikurangi */
            font-weight: bold; /* Teks PLN Rantauprapat ditebalkan */
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar p-3">
            <h4>Menu</h4>
            <a href="{{ route('golongan.index') }}">Daftar Golongan</a>
            <a href="{{ route('pelanggan.index') }}">Daftar Pelanggan</a>
            <a href="{{ route('users.index') }}">Daftar Users</a>
            <a href="#">Log Out</a>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1 p-4 content-wrapper">
            <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">PLN Rantauprapat</a>
                </div>
            </nav>
            <div class="container mt-4">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center">
        <p>&copy; {{ date('Y') }} PLN Rantauprapat. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
