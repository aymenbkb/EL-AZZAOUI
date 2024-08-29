@extends('header')

<link rel="stylesheet" href="{{ asset('assets/css/signin.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
@section('content')
<section>
  <div class="section events" id="events">
    <div class="main-banner-events" id="top">
        <img src="{{ asset('assets/images/events.webp') }}">
        <!-- Title and text content -->
        <div class="banner-content-events">
          <h1>Service</h1>
      <p>El AZZAOUI SCHOOL empowers students of all grades to excel academically and personally through dynamic teaching, a supportive community, and a commitment to fostering a lifelong passion for learning.</p>
        </div>
      </div>
    </div>
<div class="services section" id="services">
    <div class="container-services">
      <div class="service-item-services">
        <div class="image-container-services">
          <div class="rectangle-bg"></div>
          <img src="{{ asset('assets/images/service-01.jpeg') }}" alt="Online Degrees">
        </div>
        {{-- <div class="col-lg-12 text-center" style="MARGIN-TOP: 20PX;">
          <div class="section-heading">
            <h6>Schedule</h6>
            <h2>Upcoming Events</h2>
          </div>
        </div> --}}
        <div class="content">
          <h4>Online Degrees</h4>
          <p>Unlock your potential with our flexible online degree programs. Designed for busy professionals and students alike, our accredited degrees offer you the opportunity to advance your education without compromising your current responsibilities.</p>
          <ul>
            <li><span class="point-icon"></span> Fully accredited programs in various fields</li>
            <li><span class="point-icon"></span> Flexible schedules to accommodate work and life commitments</li>
            <li><span class="point-icon"></span> Interactive online classes with experienced instructors</li>
            <li><span class="point-icon"></span> Access to a global network of peers and industry professionals</li>
            <li><span class="point-icon"></span> Comprehensive support services, including career counseling and academic advising</li>
          </ul>
          <a href="#" class="main-button">Learn More</a>
        </div>
      </div>
  
      <!-- Add more service-items here if needed -->
  
    </div>
  
    <div class="container-services">
      <div class="service-item-services">
        <div class="image-container-services">
          <div class="rectangle-bg"></div>
          <img src="{{ asset('assets/images/service-02.jpeg') }}" alt="Online Degrees">
        </div>
        <div class="content">
          <h4>Online Degrees</h4>
          <p>Unlock your potential with our flexible online degree programs. Designed for busy professionals and students alike, our accredited degrees offer you the opportunity to advance your education without compromising your current responsibilities.</p>
          <ul>
            <li><span class="point-icon"></span> Fully accredited programs in various fields</li>
            <li><span class="point-icon"></span> Flexible schedules to accommodate work and life commitments</li>
            <li><span class="point-icon"></span> Interactive online classes with experienced instructors</li>
            <li><span class="point-icon"></span> Access to a global network of peers and industry professionals</li>
            <li><span class="point-icon"></span> Comprehensive support services, including career counseling and academic advising</li>
          </ul>
          <a href="#" class="main-button">Learn More</a>
        </div>
      </div>
  
      <!-- Add more service-items here if needed -->
  
    </div>
  
    <div class="container-services">
      <div class="service-item-services">
        <div class="image-container-services">
          <div class="rectangle-bg"></div>
          <img src="{{ asset('assets/images/service-03.jpeg') }}" alt="Online Degrees">
        </div>
        <div class="content">
          <h4>Online Degrees</h4>
          <p>Unlock your potential with our flexible online degree programs. Designed for busy professionals and students alike, our accredited degrees offer you the opportunity to advance your education without compromising your current responsibilities.</p>
          <ul>
            <li><span class="point-icon"></span> Fully accredited programs in various fields</li>
            <li><span class="point-icon"></span> Flexible schedules to accommodate work and life commitments</li>
            <li><span class="point-icon"></span> Interactive online classes with experienced instructors</li>
            <li><span class="point-icon"></span> Access to a global network of peers and industry professionals</li>
            <li><span class="point-icon"></span> Comprehensive support services, including career counseling and academic advising</li>
          </ul>
          <a href="#" class="main-button">Learn More</a>
        </div>
      </div>
  
      <!-- Add more service-items here if needed -->
  
    </div>
  
  </div>
</section>
@endsection