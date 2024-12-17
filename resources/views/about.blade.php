@extends('layouts.main')

@section('content')
<section class="p-3" style="background-color:#f8f9fa; margin-top: 0;">
    <div class="container">
      </div>
      <div class="row justify-content-center">
          <div class="col-md-8 mb-3">
            <div class="card">
              <div class="card-body p-4 fs-4 text-center">
                <h1 class="mb-4"><b>CV Scoring</b></h1>
                <img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="">
              </div>
              <div class="card-body p-4 fs-4">
                  <h1>About US</h2>
                  <p>CV scoring is an analysis process carried out to assess the quality of a Curriculum Vitae (CV) based on various aspects such as structure, content, relevance to the position being applied for, and readability by an Applicant Tracking System (ATS). This process can be done manually by recruiters or automatically using technology-based tools, such as online CV scoring platforms.</p>
                  <br>
                  <h1>Our Mission</h2>
                  <p>Our mission is to help job seekers create and present a superior and professional CV so they can achieve the best career opportunities. We are committed to providing objective analysis, accurate improvement suggestions, and tools that make it easier for applicants to prepare a quality CV according to industry standards.</p>
                  <br>
                  <h2>Our Commitment</h2>
                  <p>Our commitment is to provide the best user experience with accurate, transparent and easy-to-use CV assessment services. We are dedicated to helping every individual improve their chances in the job market through relevant and quality advice.</p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>

  <footer>
  <img class="w-100" src="{{ asset('images/style-image/Footer.svg') }}" alt="">
</footer>

@endsection