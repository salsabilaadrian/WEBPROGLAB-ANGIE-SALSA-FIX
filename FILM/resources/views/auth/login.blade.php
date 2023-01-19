@extends('layout.main')
@section('content')
    <section class="login spad" style="background: black">
        <h3 class="text-light text-center">Hello, Welcome to <b class="text-danger">Movie</b><b class="text-light">List</b>
        </h3>
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger text-center" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif;
            <div class="login__form">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input__item">
                        <input type="text" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                    </div>
                    <div class="input__item">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-check forget_pass">
                        <input type="checkbox" name="remember" value="true" class="form-check-input">
                        <label class="form-check-label text-light">Remember me</label>
                    </div>
                    <button type="submit" class="site-btn">Login</button>
                </form>
            </div>
            <h6 class="text-light text-center pt-3">Don’t Have An Account? <a href="{{ route('register_page') }}"
                    class="text-danger">Register Now</a></h6>
        </div>
    </section>
@endsection
