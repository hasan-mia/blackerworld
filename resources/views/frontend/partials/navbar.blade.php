<div class="navbar-area navbar-area-four">
    <div class="mobile-nav">
        <div class="container">
            <a href="{{ route('index') }}" class="logo">
                <img src="{{asset('frontend/assets/img/'. 'logo.png')}}" alt="Logo">
            </a>
        </div>
    </div>
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{asset('frontend/assets/img/'. 'logo.png')}}" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{ route('index') }}" class="nav-link active">
                                <i class="bx bx-home"></i>
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('product')}}" class="nav-link">
                                Shop
                                <i class="bx bx-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('show.product')}}" class="nav-link">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('cart.product')}}" class="nav-link">Shopping Cart</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('checkout.product')}}" class="nav-link">Checkout</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('wishlist.product')}}" class="nav-link">Wishlist</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('show.product')}}" class="nav-link">Single Product</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('blog')}}" class="nav-link">Blog</a>

                        </li>

                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link">About</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('privacy-policy')}}" class="nav-link">DMCA</a>
                        </li>
                    </ul>

                    {{--Start Right Navbar for pc --}}
                    <div class="others-option">
                        @guest
                        @if (Route::has('login'))
                        <div class="get-quote">
                            <a href="{{ route('login') }}" class="default-btn">
                                <span>Login</span>
                            </a>
                        </div>
                        <div class="cart-icon">
                            <a href="#">
                                <i class="bx bx-cart"></i>
                                <span>0</span>
                            </a>
                        </div>
                        @endif
                        {{-- @if (Route::has('register'))
                        <div class="get-quote">
                            <a href="{{ route('register') }}" class="default-btn">
                                <span>Register</span>
                            </a>
                        </div>
                        @endif --}}
                        @else
                        <div class="get-quote">
                            <a href="#" class="default-btn">
                                <span> {{ Auth::user()->name }}</span>
                            </a>
                        </div>
                        <div class="get-quote">
                            <a class="default-btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <span>Logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        <div class="cart-icon">
                            <a href="#">
                                <i class="bx bx-cart"></i>
                                <span>0</span>
                            </a>
                        </div>
                        @endguest
                    </div>

                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-option justify-content-center d-flex align-items-center">
                        @guest
                        @if (Route::has('login'))
                        <div class="get-quote">
                            <a href="{{ route('login') }}" class="default-btn">
                                <span>Login</span>
                            </a>
                        </div>
                        <div class="cart-icon">
                            <a href="#">
                                <i class="bx bx-cart"></i>
                                <span>0</span>
                            </a>
                        </div>
                        @endif
                        {{-- @if (Route::has('register'))
                        <div class="get-quote">
                            <a href="{{ route('register') }}" class="default-btn">
                                <span>Register</span>
                            </a>
                        </div>
                        @endif --}}
                        @else
                        <div class="get-quote">
                            <a href="#" class="default-btn">
                                <span> {{ Auth::user()->name }}</span>
                            </a>
                        </div>
                        <div class="get-quote">
                            <a class="default-btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                <span>Logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        <div class="cart-icon">
                            <a href="#">
                                <i class="bx bx-cart"></i>
                                <span>0</span>
                            </a>
                        </div>
                        @endguest


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
