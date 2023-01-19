@extends('layout.main')
@section('content')
    <section class="hero">
        <div class="container__slider">
            <div class="hero__slider owl-carousel">
                @foreach ($random_movies as $random_movie)
                    @if (file_exists(public_path("storage/$random_movie->image_url")))
                        <div class="hero__items set-bg" data-setbg="{{ asset('storage/' . $random_movie->background) }}">
                        @else
                            <div class="hero__items set-bg" data-setbg="{{ $random_movie->background }}">
                    @endif;
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                @if (count($random_movie->genre))
                                    <div class="label">
                                        @foreach ($random_movie->genre as $genre)
                                            {{ $genre->name }}
                                            @if (!$loop->last)
                                            @endif
                                        @endforeach
                                        | {{ $random_movie->release_date->format('Y') }}
                                    </div>
                                @endif
                                <h1 class="movie__title">{{ $random_movie->title }}</h1>
                                <p>{{ $random_movie->description }}</p>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
        </div>
    </section>



    <section class="product spad">
        <div class="row">
            <div class="col-lg">
                <div class="popular__product">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="section-title">
                            <h4>Popular Shows</h4>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="owl-carousel owl-theme">
                        @foreach ($popular_movies as $popular_movie)
                            <div class="item">
                                @if (file_exists(public_path('storage/' . $popular_movie->movie->image_url)))
                                    <div class="product__item__pic set-bg"
                                        data-setbg="{{ asset('storage/' . $popular_movie->movie->image_url) }}">
                                    @else
                                        <div class="product__item__pic set-bg"
                                            data-setbg="{{ $popular_movie->movie->image_url }}">
                                @endif
                            </div>
                            <div class="product__item__text">
                                <h5><a
                                        href="{{ route('movie_detail', ['movie_id' => $popular_movie->movie->movie_id]) }}">{{ $popular_movie->movie->title }}</a>
                                </h5>
                                <h5 class="text-light">{{ $popular_movie->movie->release_date->format('Y') }}</h5>
                            </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="show" id="show">
                <div class="row mb-3">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="section-title">
                            <h4>Show</h4>
                        </div>
                    </div>
                </div>
                <div class="text-center my-3">
                    <div class="row mx-auto my-auto">
                        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                                @foreach ($genres as $genre)
                                    @if ($loop->first)
                                        <div class="carousel-item active">
                                        @else
                                            <div class="carousel-item">
                                    @endif
                                    <div class="col-sm-2">
                                        <a href="{{ route('home', ['category' => $genre]) }}"
                                            class="btn btn-secondary btn-rounded btn-xs btn-block bg-dark border-0 rounded-pill">{{ $genre }}</a>
                                    </div>
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="owl-carousel owl-theme">
                @foreach ($movies as $movie)
                    <div class="item">
                        @if (file_exists(public_path('storage/' . $movie->image_url)))
                            <div class="product__item__pic set-bg"
                                data-setbg="{{ asset('storage/' . $movie->image_url) }}">
                            @else
                                <div class="product__item__pic set-bg" data-setbg="{{ $movie->image_url }}">
                        @endif
                    </div>
                    <div class="product__item__text">
                        <h5><a
                                href="{{ route('movie_detail', ['movie_id' => $popular_movie->movie->movie_id]) }}">{{ $popular_movie->movie->title }}</a>
                        </h5>
                        <h5 class="text-light">{{ $popular_movie->movie->release_date->format('Y') }}</h5>
                    </div>
            </div>
            @endforeach
        </div>
        </div>
    </section>
@endsection
