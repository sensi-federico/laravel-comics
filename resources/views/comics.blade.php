@extends('layouts.app')

@section('content')

<section class="jumbotron">
    <div class="banner">
        <h3>current series</h3>
    </div>
</section>

<section class="comics bg-dark">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            @foreach($thumbs as $thumb)
            <div class="col">
                <div class="my-card text-center text-white text-uppercase border-0">
                    <img class="card-img-top" src="{{$thumb['thumb']}}" alt="">
                    <p class="m-0 pt-4">{{$thumb['title']}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection