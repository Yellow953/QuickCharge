<!-- ======= Header ======= -->
<header id="header" class="header py-0">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center">
      <img src="{{asset('assets/images/logo.png')}}" alt="" class="logo-img">
      <span>QuickCharge</span>
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto" href="#hero">Home</a></li>
        <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            {{-- @foreach ($categories as $category)
            @if ($category->products)
            <li class="dropdown"><a href="#"><span>
                  {{ $category->name }}
                </span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                @foreach ($category->products as $product)
                <li><a href="/product/{{ $product->id }}">
                    {{$product->name }}
                  </a></li>
                @endforeach
              </ul>
            </li>
            @else
            <li><a href="/category/{{$category->id}}">
                {{ $category->name}}
              </a></li>
            @endif
            @endforeach --}}
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        @if (Auth()->user())
        <li>
          <a class="nav-link scrollto mx-4 color-1 font-1" href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();"> {{
            __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
        @else
        <li>
          <a href="/login" class="nav-link">Login</a>
        </li>
        <li>
          <a href="/register" class="nav-link">Register</a>
        </li>
        @endif
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->