@extends('layouts.main')

@section('content')

<section class="container">

    <div class="boxes">
        @foreach ($cards as $card )
            <div class="card">
                <img src="{{$card['image']}}" alt="">
                <h4 class="title-comics">{{$card['title']}}</h4>
            </div>
        @endforeach

    </div>

</section>
@endsection
    
        
                

                

                
