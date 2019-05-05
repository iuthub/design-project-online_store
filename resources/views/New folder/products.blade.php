
<div class="container">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-2">
            <div class="card">
                <img class="card-img-top" src="img/tshirt.jpg" alt="T-Shirt" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">{{$product->name}}</h4>
                  <p class="card-text"></p>
                  <a href="#" class="btn btn-primary">Details..</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

