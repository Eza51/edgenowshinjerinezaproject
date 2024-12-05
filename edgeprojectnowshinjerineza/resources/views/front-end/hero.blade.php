<div class="hero_area">
    <!-- header section strats -->
    {{-- code by Nowshin Jerin Eza --}}
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="assets/images//logo.png" alt="" />
            <span>
              Goid
            </span>
          </a>
          {{-- code by Nowshin Jerin Eza --}}

          <div class="navbar-collapse" id="">
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="{{ route ('home') }}">HOME</a>
                <a href="{{ route ('about') }}">ABOUT</a>
                <a href="{{ route ('reservation') }}">Reservation</a>
            
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    {{-- code by Nowshin Jerin Eza --}}
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="side_heading">
        <h5>
          G
          o
          o
          d
          F
          o
          o
          d
        </h5>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-4 offset-md-1">
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                  01
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1">
                  02
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2">
                  03
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3">
                  04
                </li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="img-box b-1">
                    <img src="assets/images//slider-img.png" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="img-box b-2">
                    <img src="assets/images//hot-1.png" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="img-box b-3">
                    <img src="assets/images//hot-2.png" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="img-box b-4">
                    <img src="assets/images//hot-3.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <div class=" col-md-5 offset-md-1">
            <div class="detail-box">
              <h1>
                Good <br>
                Food
              </h1>
              <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration in some form, by injected humour, or randomised words
              </p>

              <div class="btn-box">
                <a href="" class="btn-1">
                  Contact Us
                </a>
                <a href="{{ route('reservation') }}" class="btn-2">
                  Reserve Table Now
              </a>
              
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
    {{-- code by Nowshin Jerin Eza --}}
  </div>