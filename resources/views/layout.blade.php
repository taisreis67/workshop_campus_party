<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>Workshop PHPWomenBR - @yield('title')</title>
    </head>

    <body>
        <header>
            <div class="container">
                <div class="row  justify-content-md-center">
                    <div class="col-md-6">

                        <div id="outer">
                            <div id="middle">
                                <div id="inner">

                                    <a href="/" class="d-block" title="home"><h1 class="d-block text-white">Workshop PHPWomenBR</h1></a>

                                </div><!-- .inner -->
                            </div><!-- .middle -->
                        </div><!-- .outer -->

                    </div><!-- .col -->

                    <div class="col-md-2">
                        <img class="text-light d-block" src="{{ asset('img/logo-phpwomen.png') }}" title="Logo PHPWomen" alt="Logo PHPWomen">
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </header>

        @yield('content')

        <footer class="bg-light">
            <div class="container">
                <p class="text-center"><strong>PHPWomenBR</strong> - Nos sigam nas redes socias 
                    <a href="" title="Página do Facebook">Facebook Página</a>, 
                    <a href="" title="Grupo do Facebook">Facebook Grupo</a> e 
                    <a href="" title="Twitter">Twitter</a>
                </p>
            </div><!-- .container -->
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="application/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>