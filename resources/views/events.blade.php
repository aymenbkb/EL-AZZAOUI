@extends('header')

@section('content')
<div class="section events" id="events">
    <div class="main-banner-events" id="top">
        <img src="{{ asset('assets/images/events.webp') }}">
        <!-- Title and text content -->
        <div class="banner-content-events">
          <h1>Events</h1>
          <p>Ecole El AZZAOUI School offers a diverse range of events designed to enrich our students' academic journey. Through engaging workshops, interactive sessions, and collaborative projects, we empower students to explore their passions, develop new skills, and connect with a community dedicated to lifelong learning. Join us for our upcoming events and become a part of our vibrant learning environment.</p>
        </div>
      </div>
      <div class="section events" id="events">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <div class="section-heading">
                <h6>Schedule</h6>
                <h2>Upcoming Events</h2>
              </div>
            </div>
            <div class="col-lg-12 col-md-6">
              <div class="item">
                <div class="row">
                  <div class="col-lg-3">
                    <div class="image">
                      <img src="assets/images/event-01.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <ul>
                      <li>
                         <span class="category">English</span>
                        {{-- <h4>UI Best Practices</h4>  --}}
                      </li>
                      <li>
                        <span>Date:</span>
                        <h6>16 Feb 2036</h6>
                      </li>
                      <li>
                        <span>Duration:</span>
                        <h6>22 Hours</h6>
                      </li>
                      <li>
                        <span>Price:</span>
                        <h6>$120</h6>
                      </li>
                    </ul>
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-6">
              <div class="item">
                <div class="row">
                  <div class="col-lg-3">
                    <div class="image">
                      <img src="assets/images/event-02.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <ul>
                      <li>
                       <span class="category">French</span>
                        {{-- <h4>New Design Trend</h4>  --}}
                      </li>
                      <li>
                        <span>Date:</span>
                        <h6>24 Feb 2036</h6>
                      </li>
                      <li>
                        <span>Duration:</span>
                        <h6>30 Hours</h6>
                      </li>
                      <li>
                        <span>Price:</span>
                        <h6>$320</h6>
                      </li>
                    </ul>
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-6">
              <div class="item">
                <div class="row">
                  <div class="col-lg-3">
                    <div class="image">
                      <img src="assets/images/event-03.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <ul>
                      <li>
                        <span class="category">Spanish</span>
                        {{-- <h4>Web Programming</h4> --}}
                      </li>
                      <li>
                        <span>Date:</span>
                        <h6>12 Mar 2036</h6>
                      </li>
                      <li>
                        <span>Duration:</span>
                        <h6>48 Hours</h6>
                      </li>
                      <li>
                        <span>Price:</span>
                        <h6>$440</h6>
                      </li>
                    </ul>
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    
</div>
@endsection