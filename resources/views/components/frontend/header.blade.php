<header>

    <div class="container position-relative">

        <nav class="navbar">

        

            <!-- Logo -->

            <div class="logo">

                <a href="{{ env('APP_URL') }}">

                    <img src="{{ asset('frontend') }}/assets/images/logo-light.png" class="logo-light" alt="Image">

                    <img src="{{ asset('frontend') }}/assets/images/logo-dark.png" class="logo-dark" alt="Image">

                </a>

            </div>

            

            <!-- Site Menu -->

            <div class="site-menu">

                <ul>

                <li><a class="{{ Route::is('viewIndex') ? 'active' : '' }}" href="{{ route('viewIndex') }}">Home</a></li>
                <li><a class="{{ Route::is('aboutUs') ? 'active' : '' }}" href="{{ route('aboutUs') }}">About Us</a></li>


                    <li class="site-dropdown">

                        <a href="javascript:void(0)">Products <span class="bx bx-chevron-down"></span></a>

                        <ul class="site-submenu">

                            <li><a class="{{ Route::is('brushes') ? 'active' : '' }}" href="{{ route('brushes') }}">Brushes</a></li>

                            <li><a class="{{ Route::is('components') ? 'active' : '' }}" href="{{ route('components') }}">Components</a></li>
                            
                            <li><a class="#">Canvas</a></li>
<!-- 
                            <li><a class="{{ Route::is('canvas') ? 'active' : '' }}" href="{{ route('canvas') }}">Canvas</a></li> -->

                            <li><a class="{{ Route::is('artAccessories') ? 'active' : '' }}" href="{{ route('artAccessories') }}">Art Accessories</a></li>

                        </ul>

                    </li>

                <li><a class="{{ Route::is('initiatives') ? 'active' : '' }}" href="{{ route('initiatives') }}">Initiatives</a></li>
                <li><a class="{{ Route::is('contactUs') ? 'active' : '' }}" href="{{ route('contactUs') }}">Contact Us</a></li>


                </ul>

            </div>



            <!-- Hamburger Menu -->

            <div class="hamburger-menu">

                <svg class="hamburger" width="30" height="30" viewBox="0 0 30 30">

                    <path class="line line-top" d="M0,9h30" />

                    <path class="line line-center" d="M0,15h30" />

                    <path class="line line-bottom" d="M0,21h30" />

                </svg>

            </div>

        </nav>  

    </div>  

</header>