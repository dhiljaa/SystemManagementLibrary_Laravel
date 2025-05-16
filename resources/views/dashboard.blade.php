@extends('layouts.app')

@section('content')

<!-- Tambah Google Fonts dan Bootstrap Icons -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
    body {
        background: linear-gradient(135deg, #f0f4f8, #ffffff);
        font-family: 'Roboto', sans-serif;
        color: #34495e;
    }

    .admin-heading {
        font-size: 2.25rem;
        font-weight: 700;
        color: #2c3e50;
        margin-top: 2rem;
        margin-bottom: 2rem;
        text-align: center;
        letter-spacing: 1.2px;
        text-transform: uppercase;
    }

    .dashboard-cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1.5rem;
    }

    .card {
        flex: 1 1 280px;
        max-width: 320px;
        background-color: #ffffff;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: default;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 2rem 1.5rem;
        text-align: center;
    }

    .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(41, 128, 185, 0.3);
    }

    .card-icon {
        font-size: 3.5rem;
        color: #2980b9;
        margin-bottom: 1rem;
    }

    .card-text {
        font-size: 3rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 0.5rem;
        letter-spacing: 0.03em;
    }

    .card-title {
        font-size: 1.15rem;
        font-weight: 600;
        color: #7f8c8d;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
        .card {
            max-width: 100%;
        }
    }
</style>

<div id="admin-content" class="container">
    <h2 class="admin-heading">Dashboard Admin</h2>

    <div class="dashboard-cards">
        <div class="card">
            <i class="bi bi-pen-fill card-icon"></i>
            <p class="card-text">{{ $authors }}</p>
            <h5 class="card-title">Penulis Terdaftar</h5>
        </div>

        <div class="card">
            <i class="bi bi-building card-icon"></i>
            <p class="card-text">{{ $publishers }}</p>
            <h5 class="card-title">Penerbit Terdaftar</h5>
        </div>

        <div class="card">
            <i class="bi bi-tags-fill card-icon"></i>
            <p class="card-text">{{ $categories }}</p>
            <h5 class="card-title">Kategori Buku</h5>
        </div>

        <div class="card">
            <i class="bi bi-book-fill card-icon"></i>
            <p class="card-text">{{ $books }}</p>
            <h5 class="card-title">Jumlah Buku</h5>
        </div>

        <div class="card">
            <i class="bi bi-people-fill card-icon"></i>
            <p class="card-text">{{ $students }}</p>
            <h5 class="card-title">Siswa Terdaftar</h5>
        </div>

        <div class="card">
            <i class="bi bi-journal-arrow-up card-icon"></i>
            <p class="card-text">{{ $issued_books }}</p>
            <h5 class="card-title">Buku Dipinjam</h5>
        </div>
    </div>
</div>

@endsection
