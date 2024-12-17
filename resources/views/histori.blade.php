@extends('layouts.main')

@section('content')
    <!-- hero -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-4" style="background-color: lightgrey;">
                    <div class="card-body">
                        <h1 class="text-center text-dark"><b>Histori Penilaian</b></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="lightgrey"
          fill-opacity="1"
          d="M0,256L40,245.3C80,235,160,213,240,213.3C320,213,400,235,480,240C560,245,640,235,720,202.7C800,171,880,117,960,112C1040,107,1120,149,1200,181.3C1280,213,1360,235,1400,245.3L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>

    <!-- detail berita -->
    <section class="pb-5" style="background-color: lightgrey; margin-top: 0;">
        <div class="container">
          <div class="row d-flex flex-column align-items-center">
            <div class="container-table">

              <ul class="responsive-table">
                  <!-- success Message -->
                  @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Error Message -->
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <li class="table-header li-table">
                    <div class="col-table col-table-1">No</div>
                    <div class="col-table col-table-2">Skor</div>
                    <div class="col-table col-table-3">Tanggal</div>
                    <div class="col-table col-table-4">Action</div>
                </li>

                @if ($penilaian->isEmpty())
                    <!-- Jika tidak ada data -->
                    <div class="table-row p-3">
                      <p class="text-center mt-4">Belum ada histori penilaian.</p>
                      <div class="text-center">
                          <a href="/upload-cv" class="btn btn-primary mt-3">Upload CV</a>
                      </div>
                    </div>
                @else
                    <!-- Jika ada data -->

                        @foreach ($penilaian as $nilai)
                            <li class="table-row li-table">
                                <div class="col-table col-table-1" data-label="No">{{ $loop->iteration }}</div>
                                <div class="col-table col-table-2" data-label="Skor">{{ $nilai->nilai }} poin</div>
                                <div class="col-table col-table-3" data-label="Tanggal">{{ $nilai->created_at->format('d-m-Y H:i') }}</div>
                                <div class="col-table col-table-4" data-label="Action">
                                  <a class="badge bg-info" href="/nilai/{{ $nilai->id }}}"><i class="bi bi-eye-fill"></i></a>
                                  <form action="/nilai/{{ $nilai->id }}}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i></button>
                                  </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
          
              </div>
          </div>
        </div>
    </section>

    <footer>
  <img class="w-100" src="{{ asset('images/style-image/Footer.svg') }}" alt="">
</footer>
@endsection