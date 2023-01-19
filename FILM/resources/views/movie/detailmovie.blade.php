@extends('layout.main')

@section('content')
    <section class="anime-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @if (file_exists(public_path("storage/$movie->image_url")))
                        <div class="anime__details__pic set-bg" data-setbg="{{ asset("storage/$movie->image_url") }}">
                        </div>
                    @else
                        <div class="anime__details__pic set-bg" data-setbg="{{ $movie->image_url }}">
                        </div>
                    @endif;
                </div>
                <div class="col-lg-9">
                    <div class="anime__details__text">
                        <div class="anime__details__title">
                            <h3>{{ $movie->title }}</h3>
                            <span>
                                @foreach ($movie->genre as $genre)
                                    {{ $genre->name }}@if (!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </span>
                        </div>
                        <p>
                            {{ $movie->description }}
                        </p>
                        <div class="anime__details__widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Release Date:</span> {{ $movie->release_date->format('Y') }}</li>
                                        <li><span>Director:</span> {{ $movie->director }}</li>
                                        <li><span>Genre:</span>
                                            @foreach ($movie->genre as $genre)
                                                {{ $genre->name }}@if (!$loop->last)
                                                    ,
                                                @endif
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
