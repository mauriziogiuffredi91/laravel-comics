@extends('layouts.main')

@section('content')

<section class="container">

    <div class="boxes">
        @foreach ($cards as $card )
            <div class="card">

                <div class="box-img">

                    <img src="{{$card['image']}}" alt="comics">

                </div>
                <h5 class="title-comics">{{$card['title']}}</h5>
                <h4 class="price" >{{$card['price']}}€</h4>
            </div>
        @endforeach

    </div>

    <div class="bottom-section">

        <button class="load"> <a href="/">Load More</a> </button>

    </div>

       
   

</section>
@endsection
    
        
                

                

                
