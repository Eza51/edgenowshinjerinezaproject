<!-- resources/views/front-end/reservation.blade.php -->
@extends('front-end.layouts')
<div class="container">
    <!-- Home button -->
    <div class="text-right mt-3">
        <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
    </div>

@section('content')
  <!-- Success Message -->
  @if(session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
@endif

{{-- code by Nowshin Jerin Eza{{-- code by Nowshin Jerin Eza --}} --}}
<!-- Reservation Section -->
<section class="reservation_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>Make a Reservation</h2>
            <hr>
        </div>
        <p>Book your table now and enjoy a delightful dining experience.</p>
        <form action="{{ route('reservation.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="reservation_date">Reservation Date</label>
                    <input type="datetime-local" id="reservation_date" name="reservation_date" class="form-control" required>
                </div>
                <div class="col-md-12">
                    <label for="message">Special Requests</label>
                    <textarea id="message" name="message" class="form-control" rows="4"></textarea>
                </div>
            </div>

            <!--{{-- code by Nowshin Jerin Eza --}} Add a margin-top to the submit button -->
            <div class="btn-box text-center mt-4">
                <button type="submit" class="btn btn-primary">Submit Reservation</button>
            </div>
        </form>
    </div>
</section>
<!-- End Reservation Section{{-- code by Nowshin Jerin Eza --}} -->

@endsection
