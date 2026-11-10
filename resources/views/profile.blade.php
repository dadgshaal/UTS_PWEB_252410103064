
@extends('layouts.app')

@section('title', 'Profile')

@section('content')

    <div class="page-header">
        <div class="eyebrow">INFORMASI AKUN</div>
        <h1>Profile</h1>
        <p>Informasi pengguna yang sedang masuk ke MyLife.</p>
    </div>

    <div class="card">

        <div class="profile-avatar">
            {{ strtoupper(substr($username, 0, 1)) }}
        </div>

        <h2>{{ ucfirst($username) }}</h2>
        <p>Pengguna MyLife</p>

        <hr>

        <div class="profile-row">
            <span class="profile-label">Username</span>
            <span class="profile-value">{{ $username }}</span>
        </div>

        <div class="profile-row">
            <span class="profile-label">Status Akun</span>
            <span class="profile-value">Sedang Login</span>
        </div>

        <div class="profile-row">
            <span class="profile-label">Aplikasi</span>
            <span class="profile-value">MyLife</span>
        </div>

        <hr>

        <a href="{{ route('dashboard') }}" class="btn btn-light">
            Kembali ke Dashboard
        </a>

    </div>

@endsection
