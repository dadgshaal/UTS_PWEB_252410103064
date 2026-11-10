@extends('layouts.app')

@section('title', 'Pengelolaan Aktivitas')

@section('content')

    <div class="page-header">
        <div class="eyebrow">TASK MANAGEMENT</div>
        <h1>Pengelolaan Aktivitas</h1>
        <p>
            Berikut daftar aktivitas yang dimiliki oleh
            akun {{ ucfirst($username) }}.
        </p>
    </div>

    <div class="card">

        <h2>Daftar Aktivitas</h2>

        <p style="margin-bottom: 22px;">
            Aktivitas dikelompokkan berdasarkan kategori.
        </p>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th style="width: 65px;">No.</th>
                        <th>Nama Aktivitas</th>
                        <th>Kategori</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($aktivitas as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>

                            <td>
                                <strong>{{ $item['name'] }}</strong>
                            </td>

                            <td>
                                <span class="category">
                                    {{ $item['category'] }}
                                </span>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="3">
                                <div class="empty-state">
                                    <h3>Belum Ada Aktivitas</h3>
                                    <p>Belum ada data aktivitas untuk ditampilkan.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

@endsection
