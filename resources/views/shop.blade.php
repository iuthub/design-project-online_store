@extends('layouts.layout')

@section('title')
Shop
@stop

@section('style-link')
<link rel="stylesheet" href="{{ asset('css/shop.css') }}">

@stop

@section('content')

<div class="navbar navbar-expand-sm navigation">{{-- <a href="/">Home </a>> Shop --}}
  <ul class="navbar-nav">

    @foreach ($categories as $category)

      <div class="dropdown">
      <a class="dropbtn">{{$category->name}}</a>
      <div class="dropdown-content">
        @foreach ($sports as $sport)
        <a href="{{ route('shop.index', ['category' => $category->slug, 'sports' => $sport->slug]) }}">{{ $sport->name }}</a>
         @endforeach
      </div>
    </div>




      </ul>

    </li>

    @endforeach

  </ul>
</div>

<div class="container">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <a href="{{ route('shop.show', [$product->slug, 'category' => request()->category]) }}"><img class="card-img-top" src="{{ asset('img/products/'.$product->slug.'.jpg') }}" alt="T-Shirt" style="width:100%"></a>
                <div class="card-body">
                  <h4 class="card-title">{{$product->name}}</h4>
                  <p class="card-text">$ {{$product->price}}</p>
                  <a href="{{ route('shop.show', [$product->slug, 'category' => request()->category]) }}" class="btn">Details</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

@stop
