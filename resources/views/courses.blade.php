@extends('header')

<link rel="stylesheet" href="{{ asset('assets/css/signin.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/courses.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

@section('content')
<div class="section events" id="events">
<div class="main-banner-events" id="top">
    <img src="{{ asset('assets/images/coures.webp') }}">
    <!-- Title and text content -->
    <div class="banner-content-events">
      <h1>courses</h1>
  <p>El AZZAOUI SCHOOL offers a diverse range of courses designed to empower students at every level. Whether you're looking to excel academically, develop personal skills, or pursue a passion, our curriculum is crafted to meet your needs. Each course is taught by experienced educators who are committed to delivering dynamic instruction in a supportive environment. From foundational subjects to advanced topics, our courses are structured to inspire a lifelong love of learning, equipping students with the knowledge and skills they need to succeed.</p>
    </div>
  </div>
</div>
<section class="section courses" id="courses">
    <div class="container">
        <div class="col-lg-12 text-center" style="    margin-top: -193px;">
            <div class="section-heading">
              <h6>Schedule</h6>
              <h2>Courses</h2>
            </div>
          </div>
        {{-- <ul class="event_filter">
            <li>
                <a class="is_active" href="#!" data-filter="*">Show All</a>
            </li>
            <li>
                <a href="#!" data-filter=".design">English</a>
            </li>
            <li>
                <a href="#!" data-filter=".development">French</a>
            </li>
            <li>
                <a href="#!" data-filter=".wordpress">Spanish</a>
            </li>
        </ul> --}}
        <div class="category-grid">
            <div class="category-item ">
                <img src="{{ asset('assets/images/arbic.png') }}" alt="Spanish">
                <h4>Arabic</h4>
            </div>

            <div class="category-item ">
                <img  src="{{ asset('assets/images/uk.jpg') }}" alt="English">
                <h4>English</h4>
            </div>
            <div class="category-item ">
                <img src="{{ asset('assets/images/France.jpg') }}" alt="French">
                <h4>French</h4>
            </div>
            <div class="category-item ">
                <img src="{{ asset('assets/images/Spanish.png') }}" alt="Spanish">
                <h4>Spanish</h4>
            </div>
         
           
        </div>
    </div>
</section>
    
@endsection
