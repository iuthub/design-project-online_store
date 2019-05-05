<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>BLA-STORE</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<link rel="stylesheet" href="{{URL::asset('css/landing_page.css')}}">
</head>

<body onresize="changewidth()">
<div class="navbar nav">
<div class="row">
<div class="col-md-1 col-sm-2 toggle-button">
<h4><i class="fas fa-bars"></i></h4>
</div>

<div class="col-md-5 col-sm-5 ml-auto logo">BLA-STORE</div>

<div class="col-md-4 col-sm-5 ml-auto icons">
<i class="fas fa-user"></i>
<i class="fas fa-heart"></i>
<i class="fas fa-shopping-cart"></i>

</div>


</div>
</div>

<!-- CONTENT -->


<div class="container content">
<div class="row">
<div class="col-md-5 offer">
<h4>Lorem ipsum dolor sit!</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed hic dolor, veritatis quasi, ut maiores sit! Eaque reprehenderit, labore perspiciatis ab dolores eius, incidunt non quos id nobis rerum, molestiae.</p>
</div>
<div class="poster-image ml-auto col-md-6">
<img src="img/sneakers.png">
</div>
</div>


<div class="features">
<div class="row">
@foreach ($products as $product)
    <div class="col-md-3">
        <div class="card text-white">
            <img src="img/kids.jpg" alt="Kids" class="card-img">
            <div class="card-img-overlay"><h4 class="card-title">{{ $product->name }}</h4></div>
        </div>
    </div>


@endforeach
<div class="col-md-3">
<div class="card text-white">
<img src="img/men.jpg" alt="Men" class="card-img">
<div class="card-img-overlay"><h4 class="card-title">Men</h4></div>
</div>
</div>
<div class="col-md-3">
<div class="card text-white">
<img src="img/women.jpg" alt="Women" class="card-img">
<div class="card-img-overlay"><h4 class="card-title">Women</h4></div>
</div>
</div>
<div class="col-md-3">
<div class="card text-white">
<img src="img/accessories.jpg" alt="Accessories" class="card-img">
<div class="card-img-overlay"><h4 class="card-title">Accessories</h4></div>
</div>
</div>
</div>
</div>
</div>

<!-- FOOTER -->
<footer id="footer" class="footer">
<section id="touch" class="touch">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="title">
<h2 class="title__main yellow">
Keep in touch with us
</h2>
<p class="title__text">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.
</p>
</div>
</div>
</div>

<div class="row">
<div class="col-md-10 m-auto">
<form action="#" class="form">
<input type="email" placeholder="Enter your email to update" class="form__input" required>
<button type="submit" class="form__btn">SUBMIT</button>
</form>
</div>
</div>
</div>
</section>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="credits">
HALOVIETNAM LTD
66, Dang Van ngu, Dong Da
Hanoi, Vietnam
</div>
</div>
</div>
</div>
</footer>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function(){
                  $('.toggle-button').click(function(){
                                            $('nav').toggleClass('active')
                                            })
                  })
function changewidth(){
    var windowsize = $(window).width();
    if (windowsize < 768) {
        var element = document.getElementById("sidebar");
        element.classList.remove("active");
    }
    else if (windowsize > 768) {
        var element = document.getElementById("sidebar");
        element.classList.add("active");
    }
}
</script>

</body>
</html>
