<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Logoipsum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Log in</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-secondary" href="#">Sign up</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <h1>CV Scoring</h1>
        <p class="lead">Optimize Your CV To Increase Your Job Opportunities!</p>
        <p>Use our CV Scoring service with advanced algorithms and in-depth analysis.</p>
        <a class="btn btn-dark" href="{{ route('upload.cv.form') }}">Start a CV Scoring</a>
      </div>
      <div class="col-lg-6 text-center">
        <img src="https://via.placeholder.com/400x300" alt="Illustration" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<section class="py-4 bg-white">
  <div class="container text-center">
    <h6>Our customers have been hired at:</h6>
    <div class="d-flex justify-content-center align-items-center gap-4">
      <img src="https://via.placeholder.com/80x40" alt="Logo" class="img-fluid">
      <img src="https://via.placeholder.com/80x40" alt="Logo" class="img-fluid">
      <img src="https://via.placeholder.com/80x40" alt="Logo" class="img-fluid">
      <img src="https://via.placeholder.com/80x40" alt="Logo" class="img-fluid">
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <h2 class="text-center">Why Choose (nama brand)</h2>
    <p class="text-center">Lorem ipsum dolor sit amet consectetur.</p>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Build ATS friendly resumes</h5>
            <p class="card-text">Everything you need to make you stand out.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Build ATS friendly resumes</h5>
            <p class="card-text">Everything you need to make you stand out.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Build ATS friendly resumes</h5>
            <p class="card-text">Everything you need to make you stand out.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-primary text-white text-center">
  <div class="container">
    <h2>Ready to advance your career?</h2>
    <a class="btn btn-light" href="{{ route('upload.cv.form') }}">Start Now</a>
  </div>
</section>

    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
