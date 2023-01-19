@include('layout.header')

<footer class="footer" style="background: #1a1a1a">
    <div class="container">
        <div class="">
            <div class="">
                <div class="footer__logo text-center">
                    <a class="h1 font-weight-bold" href="{{ route('home') }}">
                        <b class="text-danger">Movie</b><b class="text-light">List</b>
                    </a>
                    <p class="text-light">
                        <b class="h6 text-danger">Movie</b><b class="text-light">List</b> is a Website that
                        containts list of movie
                    </p>
                </div>
            </div>
            <div class="text-center">
                <div class="footer__nav">
                    <ul>
                        <li>
                            <a href="https://twitter.com"> <i class="uil uil-twitter footer__logo-social"></i></a>
                        </li>
                        <li>
                            <a href="https://instagram.com">
                                <i class="uil uil-instagram footer__logo-social"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://facebook.com">
                                <i class="uil uil-facebook-f footer__logo-social"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://reddit.com">
                                <i class="uil uil-reddit-alien-alt footer__logo-social"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://youtube.com">
                                <i class="uil uil-youtube footer__logo-social"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="text-center">
                    <div class="footer__nav">
                        <ul>
                            <li>
                                <a href="">Privacy Police |</a>
                            </li>
                            <li>
                                <a href="">Terms of Service |</a>
                            </li>
                            <li>
                                <a href="">Contact Us |</a>
                            </li>
                            <li>
                                <a href="">About Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <p class="text-light" style="font-size: 0.8rem">
                            Copyright © 2021
                            <b class="text-danger">Movie</b><b class="text-light">List</b>
                            All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
</footer>
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
</script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/player.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/mixitup.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/my.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@yield('js')
</body>
</html>
