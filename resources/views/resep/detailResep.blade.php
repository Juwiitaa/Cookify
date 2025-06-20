@extends('master')

@section('title', 'Detail Resep')

@section('page')
<div class="container-fluid">
    <div class="container my-4">
        <h4 class="fw-bold mb-4">Detail Resep</h4>

        <!-- Gambar Full Width -->
        <div class="card shadow-sm mb-4">
            <img src="{{ asset('storage/'.$resep->photo) }}" alt="Foto Resep" 
                class="card-img-top img-fluid rounded-top" 
                style="object-fit: cover; height: 400px; width: 100%;">
        </div>

        <!-- Konten Resep -->
        <div class="card shadow-sm p-4">
            <h3 class="fw-bold mb-2">{{ $resep->judul }}</h3>

            <span class="badge mb-3" style="background-color: #bc3333; color: white;">
                {{ $resep->kategori->nama_kategori }}
            </span>

            <p><strong>Deskripsi:</strong><br>{{ $resep->description }}</p>

            <p><strong>Bahan-bahan:</strong><br>{{ $resep->bahan }}</p>

            <p><strong>Langkah-langkah:</strong><br>{{ $resep->langkah }}</p>

            <small class="text-muted d-block mb-3">Dibuat oleh: {{ $resep->user->name }}</small>

            <!-- Favorit dan Aksi -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div>
                    @auth
                        @if (auth()->user()->resepFavorits->contains($resep->id))
                            <form action="{{ route('favorit.hapus', $resep->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm">❤️ Unfavorit</button>
                            </form>
                        @else
                            <form action="{{ route('favorit.tambah', $resep->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-outline-secondary btn-sm">🤍 Favorit</button>
                            </form>
                        @endif
                    @endauth
                </div>

                <div>
                    <a href="{{ route('home', $resep->id) }}" class="btn btn-success btn-sm me-2">
                        <i class="typcn typcn-edit"></i> Kembali
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
