<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BLA-STORE | @yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

@yield('style-link')

</head>

<body">
    <div class="navbar nav">
        <div class="row">


            <div class="offset-1 col-sm-5 logo"><a href="/">BLADE STORE</a></div>

            <div class="col-md-4 col-sm-5 ml-auto icons">

                <a href="{{ route('home') }}"><i class="fas fa-user"></i></a>
                <a href="{{ route('cart.index') }}"><i class="fas fa-shopping-cart">
                    @if (Cart::instance('default')->count() > 0)
                    <h5 class="badge"> {{Cart::instance('default')->count()}}</h5>
                    @endif
                </i></a>

            </div>


        </div>
    </div>

<!-- CONTENT -->


@yield('content')


<!-- FOOTER -->
    <footer id="footer" class="footer">
        <section id="touch" class="touch">
        <div class="container2">
            <div class="row">
                <div class="col-12">
                    <div class="title">
                        <a href="/aboutus"><h2 class="title__main">
                            Keep in touch with us
                        </h2></a>
                        <p class="title__text">
                            While we are good smoke signals, there are simpler ways to get in touch and answer your questions.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
            <div class="row">
                <div class="col-md-12">
                    <div class="credits">
                        BLADE STORE, 2019
                    </div>
                </div>
            </div>
    </footer>




        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        @yield('scripts')

</body>
</html>
