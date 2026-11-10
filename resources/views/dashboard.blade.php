@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <section class="welcome-card">
        <span class="welcome-label">PERSONAL DASHBOARD</span>

        <h1>Halo, {{ ucfirst($username) }}! 👋</h1>

        <p>
            Selamat datang di MyLife. Kelola aktivitas dan
            rencanakan kegiatanmu agar hari-harimu lebih teratur.
        </p>
    </section>

    <div class="page-header">
        <div class="eyebrow">MENU UTAMA</div>
        <h1>Dashboard</h1>
        <p>Pilih menu yang ingin kamu akses.</p>
    </div>

    <div class="card-grid">

        <a href="{{ route('pengelolaan', ['username' => $username]) }}"
           class="card quick-card">
            <div class="quick-icon">✓</div>
            <h2>Pengelolaan Aktivitas</h2>
            <p>
                Lihat daftar kegiatan berdasarkan kategori
                yang telah disediakan.
            </p>
        </a>

        <a href="{{ route('profile', ['username' => $username]) }}"
           class="card quick-card">
            <div class="quick-icon">♙</div>
            <h2>Profile</h2>
            <p>Lihat informasi akun yang sedang digunakan.</p>
        </a>

        <div class="card quick-card">
            <div class="quick-icon">◷</div>
            <h2>Calendar</h2>
            <p>Fitur kalender aktivitas akan segera hadir.</p>
            <span class="category">Coming Soon</span>
        </div>

    </div>

@endsection
