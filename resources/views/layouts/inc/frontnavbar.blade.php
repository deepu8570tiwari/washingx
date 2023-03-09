<nav class="navbar navbar-expand-lg custom-header">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('/assets/images/Logo.png')}}"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL('aboutus')}}">About Us
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL('services')}}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL('pricing')}}">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL('pickup')}}">Scehdule Pickup</a>
        </li>
        
        @guest
        
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-sign-in"></i> {{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <!--<li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>-->
                @endif


            @else
            <li class="nav-item">
                <a class="nav-link" href="{{URL('cart')}}"><i class="fa fa-shopping-cart"></i>
                  <span class="badge badge-pill bg-primary cart-count">0</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{URL('wishlist')}}"><i class="fa fa-heart-o"></i>
                <span class="badge badge-pill bg-success wishlist-count">0</span>
                </a>
              </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('my-order')}}">
                            My Orders
                        </a>
                        <a class="dropdown-item" href="{{url('my-profile/')}}/{{Auth::user()->id}}">
                            My Profile
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
      </ul>
    </div>
  </div>
</nav>