@extends('layouts.main')

@section('content')
  <section style="padding: 9rem 2rem;" class="bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1>CV Scoring</h1>
          <h3 class="lead fs-4">Optimize Your CV To Increase Your Job Opportunities!</h3>
          <p>Use our CV Scoring service With advanced algorithms and in-depth analysis, we provide objective assessments, helping you improve your format, content, and keywords to suit the current job market needs.</p>
          <a class="btn btn-dark" href="/upload-cv">Start a CV Scoring</a>
        </div>
        <div class="col-lg-6 text-center">
          <img style="border-radius: 1rem;" src="https://picsum.photos/400/300" alt="Illustration" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <section style="background-color: #999999; border-top-right-radius: 200px; border-bottom-left-radius: 200px;" class="py-5">
    <div class="container">
      <div class="px-5 d-flex justify-content-between align-items-center gap-4">
        <h6 class="fs-6">Our customers have been hired at:</h6>
        <img src="{{ asset('images/logo1.png') }}" alt="Logo" class="img-fluid">
        <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="img-fluid">
        <img src="{{ asset('images/logo3.png') }}" alt="Logo" class="img-fluid">
        <img src="{{ asset('images/logo4.png') }}" alt="Logo" class="img-fluid">
      </div>
    </div>
  </section>

  <section class="py-5 mt-5">
    <div class="container">
      <h2 class="text-center">Why Choose CV Scoring??</h2>
      <p class="text-center mb-5">Karna kami hadir dengan berbagai fitur untuk membantu anda cepat mendapatkan pekerjaan.</p>
      <div class="row justify-content-center g-4">
        <div class="col-md-4">
          <div class="card">
            <img src="https://picsum.photos/seed/picsum/400/300" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Build ATS friendly resumes</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://picsum.photos/seed/night/400/300" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Build ATS friendly resumes</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://picsum.photos/seed/cv/400/300" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Build ATS friendly resumes</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="padding: 9rem 2rem;" class="bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 text-center">
          <img style="border-radius: 1rem;" src="https://picsum.photos/400/300" alt="Illustration" class="img-fluid">
        </div>
        <div class="col-lg-6">
          <h1>Improve your resume's score</h1>
          <h3 class="lead fs-5 mb-4">Lorem ipsum dolor sit amet consectetur. Sed potenti purus nunc est tellus sed nulla. Elit magna ornare dictum ultrices sagittis a. Erat porta odio tortor quam pulvinar lobortis sollicitudin mauris turpis. Nunc suspendisse amet gravida gravida sed erat. Tellus sed elit tellus quis. Id consectetur eget odio sagittis laoreet condimentum nulla. Sit vitae convallis nunc ut aliquam.</h3>
          <a class="btn btn-dark" href="/upload-cv">Get Your score <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section style="background-image: url('{{ asset('images/bg-bottom.png') }}'); background-size: cover; background-position: bottom;" class="d-flex flex-column justify-content-center align-items-center text-center py-5" >
    <h1 class="mb-4 text-light">Ready to advance your career?</h1>
    <a href="/upload-cv" style="background-color: white; color:black" class="btn">START NOW</a>
</section>

  
@endsection
