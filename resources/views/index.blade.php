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
                <h3 class="titolo titoloDue">{{$comic["series"]}}</h3>
            </div>
            @endforeach
            {{-- @dd($comics) --}}
        </div>
     </div>
 </main>

@endsection

