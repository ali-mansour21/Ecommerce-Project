<header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home
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
              <li class="nav-item active">
                <a class="nav-link" href="/allProducts">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
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
