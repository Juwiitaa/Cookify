@extends('master')

@section('title', 'Laporan User & Resep Disukai')

@section('page')
<div class="container my-4">
    <h2 class="mb-4 fw-bold">Laporan: User & Resep yang Disukai</h2>

    @foreach ($user as $user)
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title mb-2">
                    👤 {{ $user->name }} ({{ $user->email }})
                </h5>

                @if ($user->resepsDisukai->isEmpty())
                    <p class="text-muted">Belum menyukai resep apapun.</p>
                @else
                    <ul class="mb-0">
                        @foreach ($user->resepsDisukai as $resep)
                            <li>
                                🍲 <strong>{{ $resep->judul }}</strong>
                                <br>
                                <small class="text-muted">Kategori: {{ $resep->kategori->nama_kategori ?? '-' }} | oleh {{ $resep->user->name }}</small>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    @endforeach
</div>
@endsection
