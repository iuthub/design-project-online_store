@extends('layouts.layout')

@section('title')
Home
@stop

@section('style-link')
<link rel="stylesheet" href="{{ asset('css/landing-page.css') }}">

@stop

<!-- CONTENT -->

@section('content')
<div class="container content">
    <div class="row">
        <div class="col-md-5 offer">
            <h4>WELCOME!</h4>
        <p>Here you can find all sports items which you might need. Here are  all brands , all sports equipments for training and  accessories for fun who like appurtenance. First sign up to the site then choose necessary the category and do your shopping or add all products to the basket to buy later.</p>
        </div>
        <div class="poster-image ml-auto col-md-6">
        <img src="img/sneakers.png">
        </div>
    </div>


    <div class="features">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-3">
                <div class="card text-white">
                    <a href="{{ route('shop.index', ['category' => $category->slug]) }}"><img src="{{ asset('img/'.$category->slug.'.jpg') }}" alt="Men" class="card-img">
                    <div class="card-img-overlay"><h4 class="card-title">{{$category->name}}</h4></div></a>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>

@stop
