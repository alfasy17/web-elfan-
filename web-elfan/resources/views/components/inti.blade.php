@extends('layouts.app')

@section('content')
<section class="py-5 bg-teal text-white">
    <div class="container text-center">
        <h1 class="fw-bold display-4">Pusat Informasi</h1>
        <p class="lead">Dapatkan berita terbaru, pengumuman, dan prestasi dari Yayasan kami.</p>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        
        <div class="d-flex justify-content-center gap-2 mb-5">
            <a href="/informasi" class="btn btn-teal rounded-pill px-4">Semua</a>
            <a href="?kategori=berita" class="btn btn-outline-teal rounded-pill px-4">Berita</a>
            <a href="?kategori=pengumuman" class="btn btn-outline-teal rounded-pill px-4">Pengumuman</a>
            <a href="?kategori=prestasi" class="btn btn-outline-teal rounded-pill px-4">Prestasi</a>
        </div>

        <div class="row g-4">
            @forelse($beritas as $item)
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden card-informasi">
                    <div class="position-relative">
                        @if($item->gambar)
                            <img src="{{ asset('img/berita/' . $item->gambar) }}" class="card-img-top" style="height: 220px; object-fit: cover;" alt="{{ $item->judul }}">
                        @else
                            <div class="bg-secondary d-flex align-items-center justify-content-center text-white" style="height: 220px;">
                                <i class="fas fa-image fa-3x opacity-25"></i>
                            </div>
                        @endif
                        
                        <span class="badge position-absolute top-0 start-0 m-3 {{ $item->kategori == 'pengumuman' ? 'bg-danger' : ($item->kategori == 'prestasi' ? 'bg-warning text-dark' : 'bg-teal') }}">
                            {{ ucfirst($item->kategori) }}
                        </span>
                    </div>

                    <div class="card-body p-4">
                        <small class="text-muted d-block mb-2">
                            <i class="far fa-calendar-alt me-1"></i> {{ $item->created_at->format('d M Y') }}
                        </small>
                        <h5 class="fw-bold mb-3">{{ $item->judul }}</h5>
                        <p class="text-muted small">
                            {{ Str::limit($item->isi, 100) }}
                        </p>
                    </div>
                    <div class="card-footer bg-white border-0 p-4 pt-0">
                        <a href="/berita/{{ $item->slug }}" class="text-teal fw-bold text-decoration-none">
                            Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <img src="{{ asset('img/empty.svg') }}" style="width: 200px;" class="mb-3 opacity-50">
                <p class="text-muted">Belum ada informasi yang diterbitkan.</p>
            </div>
            @endforelse
        </div>

        <div class="d-flex justify-content-center mt-5">
            {{-- $beritas->links() --}}
        </div>
    </div>
</section>

<style>
    .bg-teal { background-color: #007c92; }
    .text-teal { color: #007c92; }
    .btn-teal { background-color: #007c92; color: white; border: none; }
    .btn-teal:hover { background-color: #005a6b; color: white; }
    .btn-outline-teal { border: 2px solid #007c92; color: #007c92; }
    .btn-outline-teal:hover { background-color: #007c92; color: white; }
    
    .card-informasi { transition: transform 0.3s ease; }
    .card-informasi:hover { transform: translateY(-10px); }
</style>
@endsection