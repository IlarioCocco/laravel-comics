@extends('layout.base')


{{-- section del --}}

{{-- @section('title')
  Home Page laravel Comics
@endsection --}}

{{-- shortcut idem view up --}}
@section('title', 'Home Page laravel Comics')


{{-- section del main --}}
@section('pageContent')

 <main>
     <div class="containerMain">
        <div class="boxDue">
            @foreach ($comics as $comic)
            <div class="imaginiAlbum">
                <img class="album" src="{{$comic["thumb"]}}" alt="imagine album">
                <h3 class="titolo">{{$comic["series"]}}</h3>
            </div>
            @endforeach
            {{-- @dd($comics) --}}
             
        </div>
        <div >
            <button class="current load">load more</button>
        </div>
     </div>

     {{-- importato dal footer --}}
     <div class="container">
        <div class="box">
            <div class="footerBlu">
            <div class="loghiSmart">
                <img class="loghiSmart smartSmall" src="{{asset("images/buy-comics-digital-comics.png")}}" alt="">
            </div>
                <p class="textSmart">digital comics</p>

            <div class="loghiSmart">
                <img class="loghiSmart" src="{{asset("images/buy-comics-merchandise.png")}}" alt="">
            </div>
                <p class="textSmart">prova footer</p>

            <div class="loghiSmart">
                <img class="loghiSmart" src="{{asset("images/buy-comics-subscriptions.png")}}" alt="">
            </div>
                <p class="textSmart">prova footer</p>

            <div class="loghiSmart">
                <img class="loghiSmart smartSmall" src="{{asset("images/buy-comics-shop-locator.png")}}" alt="">
            </div>
                <p class="textSmart">prova footer</p>

            <div class="loghiSmart">
                <img class="loghiSmart" src="{{asset("images/buy-dc-power-visa.svg")}}" alt="">
            </div>
                <p class="textSmart">prova footer</p>
        </div>
    </div>


 </main>
@endsection

