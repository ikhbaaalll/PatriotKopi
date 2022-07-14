<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/image/pkopi.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Patriot Kopi</title>
    <style>
        html {
            box-sizing: border-box;
            overflow-x: hidden;
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        body {
            overflow-x: hidden;
        }
    </style>
    @yield('css')
</head>

<body style="background-color: #4F391C;">
    <nav class="navbar navbar-light justify-content-between p-1 bg-white">
        <a class="navbar-brand text-dark ml-3"><img src="{{ asset('assets/image/pkopi.png') }}" height="40"
                width="60" alt="">
            <span class="d-block">Patriot Kopi</span>
        </a>
        <div class="list-inline">
            <a href="/#home" class="list-inline-item text-dark">Home</a>
            <a href="/#coffeeshop" class="list-inline-item mx-3 text-dark">Coffeshop</a>
            <a href="/#aboutus" class="list-inline-item mx-3 text-dark">About</a>
            <a href="/#contact" class="list-inline-item mr-3 text-dark">Contact</a>
        </div>
    </nav>
    <div class="col">
        @yield('content')
    </div>
    <div class="row my-2">
        <h6 class="text-light mt-2 ml-4 position-absolute bottom-0">{{ now()->year }}@ Patriotkopi.</h6>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    @yield('js')
</body>

</html>
