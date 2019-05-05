@extends('layouts.layout')

@section('title')
{{$product->name}}
@stop

@section('style-link')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">

@stop

@section('content')
<h2 class="navigation"><a href="/">Home </a>> <a href="/shop">Shop</a> > {{$product->name}}</h2>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <img class="card-img-top" src="{{ asset('../img/products/'.$product->slug.'.jpg') }}" alt="T-Shirt" style="width:100%">

              </div>
        </div>
        <div class="col-md-5 offset-2 product-info">
          <h1 class="title">{{$product->name}}</h1>
          <h5 class="details"> {{$product->details}}</h5>
          <h2 class="price">$ {{$product->price}}</h2>
          <p class="product_desc">
          {{$product->description}}
        </p>
        <a href="{{ route('shop.index', ['category' => request()->category]) }}" class="btn back"><- Go Back</a>
        <form action="{{ route('cart.store') }}" method="POST">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $product->id }}">
          <input type="hidden" name="name" value="{{ $product->name }}">
          <input type="hidden" name="price" value="{{ $product->price }}">
          <button type="submit" class="btn cart">Add to Card</button>

        </form>
        </div>
    </div>
</div>


@stop
