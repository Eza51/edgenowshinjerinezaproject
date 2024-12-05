<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Restaurent management</title>
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap"
    rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="assets/css/responsive.css" rel="stylesheet" />
</head>

<body>



    @yield('content')

 

  <!-- app section -->

  <section class="app_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="img-box">
            <img src="assets/images/man-with-phone.png" alt="">
          </div>
        </div>
        <div class="col-md-6 offset-md-2">
          <div class="detail-box">
            <h2>
              <span> 50% </span> off On every food
              download now our app
            </h2>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in
              some form, by
            </p>
            <div class="btn-box">
              <a href="">
                <img src="assets/images/app-store.png" alt="">
              </a>
              <a href="">
                <img src="assets/images/play-store.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end app section -->


  <!-- contact section -->




  <!-- footer section -->
  <section class="container-fluid footer_section">
    <div class="social_container">
      <h4>
        Follow on
      </h4>
      <div class="social-box">
       
        <a href="https://www.linkedin.com/in/nowshinjerineza" target="_blank">
          <img src="assets/images/linkedin.png" alt="">
        </a>
        {{-- code by Nowshin Jerin Eza --}}
        <a href="">
          <img src="assets/images/youtube.png" alt="">
        </a>
      </div>
    </div>
  <p>
  &copy; 2024 All Rights Reserved. Developed by Nowshin Jerin Eza for KU Edge Program
</p>

  </section>
  <!-- footer section -->

  <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>

  <!-- owl carousel script -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 35,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <!-- end owl carousel script -->

</body>

</html>