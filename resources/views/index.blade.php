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
            {{-- <h3>Prova</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ipsa debitis,
                impedit nemo reiciendis eaque dolorem hic modi.
                Natus possimus magni sunt nam omnis reprehenderit ad beatae odit doloribus! Quia! --}}
            @foreach ($comics as $comic)

            <div class="imaginiAlbum">
                <img class="album" src="{{$comic["thumb"]}}" alt="imagine album">
                <h3 class="titolo">{{$comic["series"]}}</h3>
            </div>
                
            @endforeach
            {{-- @add($comics) --}}
            {{-- </p> --}}
        </div>
     </div>
 </main>

@endsection

