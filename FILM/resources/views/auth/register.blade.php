@extends('layout.main')
@section('content')
    <section class="signup spad" style="background: black">
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
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input__item">
                        <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
                    </div>
                    <div class="input__item">
                        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                    </div>
                    <div class="input__item">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="input__item">
                        <input type="password" name="confirm_password" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="site-btn btn btn-danger">
                        <a href="{{ route('login_page') }}" class="text-danger"></a>Register</button>
                </form>

                <h5 class="text-light text-center">Already Have An Account? <a href="{{ route('login_page') }}"
                        class="text-danger">Login Now</a>
                </h5>

            </div>
        </div>
    </section>
@endsection
