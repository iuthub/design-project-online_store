@extends('layouts.layout')

@section('title')
Shopping Cart
@stop

@section('style-link')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">

@stop

@section('content')


<h2 class="navigation"><a href="/">Home </a>> Shopping Cart</h2>
<div class="container">
    <div class="row">

        @if(session()->has('success_message'))
          <div class="alert alert-success">
            {{ session()->get('success_message') }}
          </div>
          <br>
        @endif

        @if(count($errors)>0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li> {{ $error }} </li>
              @endforeach
            </ul>
          </div>
          <br>
        @endif

        @if(Cart::count()>0)
        <div class="col-md-10">
          <div class="row">
            <h4 class="items col-md-6 col-sm-7"> {{Cart::count()}} item(s) in the Cart.</h4>
            <a href="{{ route('cart.collapse') }}" class="button col-sm-3 ml-auto">Clear the Cart</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10">


            <ul class="list-group list-group-flush">

              @foreach(Cart::content() as $item)

              <li class="list-group-item">
                <div class="row">
                  <div class="col-md-2">
                    <a href="{{ route('shop.show', $item->model->slug) }}"><img class="product-img" src="{{ asset('img/products/'.$item->model->slug.'.jpg') }}"></a>
                  </div>
                  <div class="col-md-5 col-8">
                    <h3><a href="{{ route('shop.show', $item->model->slug) }}">{{$item->name}}</a></h3>
                    <h6>{{$item->model->details}}</h6>
                  </div>

                  <div class="col-sm-2 col-3 ml-auto padding price">
                    ${{$item->price}}
                  </div>

                  <div class="col-md-1 col-sm-4 col-3 padding">
                    <select class="quantity">
                      <option selected="">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </div>

                  <div class="col-sm-2 col-12 ml-auto padding">
                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                      {{@csrf_field()}}
                      {{ method_field('DELETE') }}

                      <button type="submit" class="btn button">Remove</button>


                    </form>
                  </div>
                </div>
              </li>



              @endforeach

            </ul>
          </div>

              @else
                <h5 class=""> There are no items in the Cart yet!</h5>
              @endif
          <div class="col-md-10">
            <div class="row pricing">
              <div class="restInfo col-md-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ipsam quae quisquam provident hic optio molestiae nostrum placeat eum velit alias cum possimus temporibus magni iure ab, magnam eaque architecto.
                <br>
              </div>
              <div class="totalPrice col-md-4 ml-auto">
                <h6 class="subtotal">Subtotal: ${{ Cart::subtotal() }}</h6>
                <h6 class="tax">Tax: ${{ Cart::tax() }}</h6>
                <h6 class="total font-weight-bold">Total: ${{ Cart::total() }}</h6>
              </div>
            </div>
        </div>

    </div>
        <div class="row">
          <div class="col-md-10">
            <a href="{{ route('shop.index') }}" class="btn button">Continue Shopping</a>
            <a href="/thankyou" class="btn btn-success float-right">Proceed to Checkout</a>
          </div>
        </div>
</div>


@stop


@section('scripts')


@stop
