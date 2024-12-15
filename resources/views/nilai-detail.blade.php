@extends('layouts.main')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-center">
                <p class="lead">Setelah kami tinjau berdasarkan standar internasional, CV Anda mendapat nilai:</p>
                <h1 class="display-1 fw-bold">{{ $nilai->nilai }}%</h1>
                <p>Penilaian ini menggunakan algoritma canggih untuk menganalisis struktur, konten, dan relevansi CV Anda.</p>
                <a class="btn btn-dark" href="/upload-cv">Coba Lagi</a>
            </div>
            <div class="col-lg-8">
                <iframe src="{{ asset('storage/' . $nilai->cv) }}" width="100%" height="600px"></iframe>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
<div class="container">
    <h4 class="text-center mb-3">Kamu kemungkinan besar akan diterima di:</h4>
    <div class="row justify-content-center g-4">
        @foreach ($rekomendasi as $rekom)
        <div class="col-md-4">
            <div class="card">
            <img src="{{ asset('images/' . $rekom->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $rekom->nama }}</h5>
                <p class="card-text">{{ $rekom->deskripsi }}</p>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</section>
@endsection