@extends('front-end.layouts')
  <!-- Home button -->
  <div class="text-right mt-3">
    <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
</div>
{{-- code by Nowshin Jerin Eza --}}
@section('content')
  <!-- about section -->
  <section class="about_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <br>
                Our <br>
                Food
              </h2>
              <hr>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in
              some form, by injected humour, or randomised words
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="assets/images/about-img.jpg" alt="">
            {{-- code by Nowshin Jerin Eza --}}
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection

  <!-- end about section -->
  {{-- code by Nowshin Jerin Eza --}}