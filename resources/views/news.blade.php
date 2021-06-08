@extends('layouts.main')

@section('head-title', 'News | DC Comics')



@section('content')
<section class="container news-back">
    <div class="box-news">
        @foreach ($cards as $card )
            <div class="card">

                <div class="box-img">

                    <img src="{{$card['image-cover']}}" alt="comics">

                </div>

                <div class="box-text">

                    <h2 class="title-news">{{$card['title']}}</h2>
                    <h3 class="body-comics">{{$card['body']}}</h3>

                </div>
                
                
            </div>
        @endforeach

    </div>
</section>
@endsection