@extends('layouts.main')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-center">
                <p class="lead">Setelah kami proses, CV Anda mendapat nilai:</p>
                <h1 class="display-1 fw-bold">{{ $nilai->nilai }}</h1>
                <h5>POIN</h5>
                <p>Penilaian ini menggunakan algoritma canggih untuk menganalisis struktur, konten, dan relevansi CV Anda.</p>
                <a class="btn btn-dark" href="/upload-cv">Coba Lagi</a>

                <div class="container mt-5">
                    <!-- Catatan -->
                    <div class="note-card">
                        <div class="note-title mb-3">📌 Catatan / Notes</div>
                        <div>
                            <!-- Daftar Notes dalam Table -->
                            <table class="table table-borderless table-sm mb-0">
                                <tbody>
                                    <tr>
                                        <td style="width: 5%;"><strong>1.</strong></td>
                                        <td>Anda bisa menambah <strong>value</strong> seperti <em>pengalaman</em> atau <em>sertifikat</em> pada CV Anda agar poin makin banyak yang diperoleh.</td>
                                    </tr>
                                    @if ($nilai->jumlah_halaman > 2)
                                        <tr>
                                            <td><strong>2.</strong></td>
                                            <td>Jumlah halaman cv anda adalah <strong>{{ $nilai->jumlah_halaman }}</strong> halaman, alangkah baiknya jika dapat diringkas menjadi kurang dari <strong>2 halaman</strong>.</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
            </div>
            <div class="col-lg-8">
                <iframe src="{{ asset('storage/' . $nilai->cv) }}" width="100%" height="800px"></iframe>
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

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center mt-4">
            {{ $rekomendasi->links() }}
        </div>
    </div>
</section>
@endsection