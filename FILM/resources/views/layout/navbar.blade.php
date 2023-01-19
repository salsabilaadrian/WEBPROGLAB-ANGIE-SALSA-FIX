<body>
    <header class="header" style="background: #1a1a1a">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a class="h3 font-weight-bold" href="{{ route('home') }}">
                            <b class="text-danger">Movie</b><b class="text-light">List</b>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu text-right">
                            <ul class="nav justify-content-end">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('home') }}">Movies</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        @auth
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" style="text-decoration:none;color:white">
                                    <img id="img-logo-nav"
                                        src="{{ session('url') != null ? session('url') : asset('img/avatar-2.png') }}">

                                </button>

                                <div class="dropdown-menu dropdown-menu-lg-right"
                                    style="background-color: black
                                ;max-width: 10px;">
                                    <form action="{{ route('logout') }}" method="post" id="logout">
                                        @csrf
                                        <a class="dropdown-item" href="#"
                                            onclick="document.getElementById('logout').submit()">Logout</a>
                                    </form>
                                </div>
                            </div>
                        @endauth
                        @guest
                            <a class="rounded bg-primary p-2" href="{{ route('register_page') }}">Register</a>
                            <a class="text-primary rounded p-2 border border-primary"
                                href="{{ route('login_page') }}">Login</a>
                        @endguest
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
</body>
