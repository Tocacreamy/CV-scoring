@extends('layouts.main')

@section('content')
<section style="padding: 9rem 2rem; background-color:white;">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-6">
            <h1 style="font-size: 8rem; font-weight: bold; line-height: 1;">1.</h1>
            <h3 class="lead fs-3">Make Your Best CV</h3>
            <p>You can:
Choose from a variety of attractive CV templates that are compatible with the Applicant Tracking System (ATS).
Fill in your personal information, work experience, skills, and education in a structured manner.
Get recommendations to improve the relevance and quality of your CV.
Download your finished CV in PDF or Word format ready to use.
This feature is designed to help you maximize your potential and pave the way to your dream career!</p>
        </div>
        <div class="col-lg-6 text-center">
            <img style="border-radius: 1rem;" src="{{ asset('images/style-image/best-cv.png') }}" alt="Illustration" class="img-fluid">
        </div>
        </div>
    </div>
</section>

<section style="padding: 9rem 2rem;" class="bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center">
                <img style="border-radius: 1rem;" src="{{ asset('images/style-image/upload-cv.png') }}" alt="Illustration" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h1 style="font-size: 8rem; font-weight: bold; line-height: 1;">2.</h1>
                <h3 class="lead fs-3">Upload your CV</h3>
                <p>The “Upload Your CV” feature allows you to upload your CV for analysis and evaluation.
                Once uploaded, you will receive an instant CV assessment report and can immediately improve your CV for better job opportunities. This feature helps you ensure that your CV is ready to attract recruiters!</p>
            </div>
        </div>
    </div>
</section>

<section style="padding: 9rem 2rem; background-color:white;">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-6">
            <h1 style="font-size: 8rem; font-weight: bold; line-height: 1;">3.</h1>
            <h3 class="lead fs-3">See Your CV Value</h3>
            <p>The “See Your CV Score” feature provides a comprehensive assessment of your CV based on various aspects that are important to attract recruiters. After you upload your CV, the system will analyze and display your CV score in the form of numbers or easy-to-understand graphs.</p>
        </div>
        <div class="col-lg-6 text-center">
            <img style="border-radius: 1rem;" src="{{ asset('images/style-image/score-cv.png') }}" alt="Illustration" class="img-fluid">
        </div>
        </div>
    </div>
</section>

<section style="padding: 9rem 2rem;" class="bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center">
                <img style="border-radius: 1rem;" src="{{ asset('images/style-image/job-recommendation.png') }}" alt="Illustration" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h1 style="font-size: 8rem; font-weight: bold; line-height: 1;">4.</h1>
                <h3 class="lead fs-3">Get Job recommendations</h3>
                <p>The “Get Job Recommendations” feature is designed to help you find job opportunities that best match your profile and experience. By analyzing the CV you have uploaded, this feature matches your skills, work experience, and interests with thousands of current job openings.</p>
            </div>
        </div>
    </div>
</section>
<footer>
  <img class="w-100" src="{{ asset('images/style-image/Footer.svg') }}" alt="">
</footer>
@endsection