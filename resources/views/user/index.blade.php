<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              @if (Route::has('login'))
                    @auth
                    @if(auth()->user()->can('admin'))
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                    </li>
                    <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                    @endauth
            @endif
              <li class="nav-item">
                <a class="nav-link" href="/allProducts">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>
              </li>
              @auth
              <li class="nav-item log-item">
              <form method="post" action="/logout">
                @csrf
                    <button class="logout" type="submit">Log out</button>
            </form>
              </li>
              @endauth
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="/allProducts">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="grid-container">
        @foreach($products as $product)
          <div>
            <div class="product-item max-height">
              <img class="img-height" src="{{ asset('storage/'. $product->productImage) }}" alt="">
              <div class="down-content">
                <h4>{{$product->title}}</h4>
                <h6>${{$product->price}}</h6>
                <p>{{$product->description}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="best-features" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Sixteen Clothing</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p>If you're looking for the best products, our ecommerce website is the perfect place to start. We offer a wide range of high-quality products that have been carefully selected to meet our customers' needs and exceed their expectations</p>
              <ul style="list-style-type: disc !important;">
                <li>Customer reviews</li>
                <li>High-quality product</a></li>
                <li>Enjoy a seamless shopping experience</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Discover a collection of creative and unique sixteen products that are sure to impress and stand out from the crowd.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.

            - Design: TemplateMo</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
