<!-- hot section -->
<section class="hot_section layout_padding">
  <div class="container">
      <div class="heading_container">
          <h2>
              What's Hot
          </h2>
          <hr>
      </div>
      <p>
          There are many variations of passages of Lorem Ipsum available, but the majority
      </p>
  </div>
  <div class="carousel_container">
      <div class="container">
          <div class="carousel-wrap">
              <div class="owl-carousel">
                  @foreach($foods as $food)
                      <div class="item">
                          <div class="box">
                              <div class="img-box">
                                  <!-- If image exists, display it; otherwise, show a placeholder -->
                                  <img src="{{ asset('storage/' . $food->image) }}" alt="{{ $food->name }}" />
                              </div>
                              <div class="detail-box">
                                  <h4>
                                      ${{ number_format($food->price, 2) }}
                                  </h4>
                                  <p>
                                      {{ Str::limit($food->description, 100) }}  <!-- Show a short description -->
                                  </p>
                                  <a href="{{ route('reservation') }}">
                                    Order Now
                                </a>
                                
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
      </div>
  </div>
</section>
<!-- end hot section -->
