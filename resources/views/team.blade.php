@extends('header')

<link rel="stylesheet" href="{{ asset('assets/css/signin.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

@section('content')
<div class="section events" id="events">
  <div class="main-banner-events" id="top">
    <img src="{{ asset('assets/images/coures.webp') }}">
    <!-- Title and text content -->
    <div class="banner-content-events">
      <h1>Team</h1>
  <p>At El AZZAOUI SCHOOL, our team is composed of dedicated professionals who are passionate about education and student success. Each member of our faculty brings a wealth of experience, expertise, and a commitment to fostering an inclusive and dynamic learning environment. Our educators are not only skilled in their respective fields but also deeply invested in the personal growth and development of every student. From teachers to administrative staff, the entire team works collaboratively to ensure that each student receives the support and encouragement they need to achieve their full potential. Together, we strive to create a community where learning thrives and every individual is empowered to succeed.</p>
    </div>
  </div>
</div>
<div class="team section" id="team">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="assets/images/member-01.jpg" alt="">
              <span class="category">UX Teacher</span>
              <h4>Sophia Rose</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="assets/images/member-02.jpg" alt="">
              <span class="category">Graphic Teacher</span>
              <h4>Cindy Walker</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="assets/images/member-03.jpg" alt="">
              <span class="category">Full Stack Master</span>
              <h4>David Hutson</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="assets/images/member-04.jpg" alt="">
              <span class="category">Digital Animator</span>
              <h4>Stella Blair</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 


@endsection