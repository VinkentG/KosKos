<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - Kost</title>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/app.js') }}"></script>


    {{-- <script src="{{ asset('js/jquery-3.2.0.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script> --}}

    {{-- <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css"> --}}
    {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> --}}


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" /> --}}

    {{-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="chartjs/Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <style>
        .navbar {
            background-color: #D3DEDC;
        }

        .navbar-brand {
            font-family: Viga;
            font-size: 32px;
        }

        .nav-link {
            text-transform: uppercase;
            margin-right: 30px;
            font-weight: 100px;
            color: black;
        }

        .navbar-brand,
        .nav-link {
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0, 7);
        }

        footer {
            position: absolute;
            margin-top: -60px;
            /* bottom: 0;
    left: 0;
    right: 0; */
            background: #111;
            height: auto;
            width: 100vw;

            padding-top: 40px;
            color: #fff;
        }

        .footer-content {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .footer-content h3 {
            font-size: 2.1rem;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 3rem;
        }

        .footer-content p {
            max-width: 500px;
            margin: 10px auto;
            line-height: 28px;
            font-size: 14px;
            color: #cacdd2;
        }

        .socials {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem 0 3rem 0;
        }

        .socials li {
            margin: 0 10px;
        }

        .socials a {
            text-decoration: none;
            color: #fff;
            border: 1.1px solid white;
            padding: 5px;

            border-radius: 50%;

        }

        .socials a i {
            font-size: 1.1rem;
            width: 20px;


            transition: color .4s ease;

        }

        .socials a:hover i {
            color: aqua;
        }

        .footer-bottom {
            background: #000;
            width: 100vw;
            padding: 20px;
            padding-bottom: 40px;
            text-align: center;
        }

        .footer-bottom p {
            float: left;
            font-size: 14px;
            word-spacing: 2px;
            text-transform: capitalize;
        }

        .footer-bottom p a {
            color: #44bae8;
            font-size: 16px;
            text-decoration: none;
        }

        .footer-bottom span {
            text-transform: uppercase;
            opacity: .4;
            font-weight: 200;
        }

        .footer-menu {
            float: right;

        }

        .footer-menu ul {
            display: flex;
        }

        .footer-menu ul li {
            padding-right: 10px;
            display: block;
        }

        .footer-menu ul li a {
            color: #cfd2d6;
            text-decoration: none;
        }

        .footer-menu ul li a:hover {
            color: #27bcda;
        }
        }

    </style>

</head>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light shadow-m">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <h1>VizKost</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        {{-- <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Dropdown button
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </div> --}}
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        @yield('Nav1')
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @yield('Nav')
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="d-inline-block nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/editprofile/{{ Auth::user()->ID_Pemilik }}">
                                        {{ __('Profile') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                                                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('foot')

</body>

<script>
    // Jquery Dependency
$("input[data-type='currency']").on({
keyup: function() {
formatCurrency($(this));
},
blur: function() {
formatCurrency($(this), "blur");
}
});

function formatNumber(n) {
// format number 1000000 to 1,234,567
return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
// appends $ to value, validates decimal side
// and puts cursor back in right position.

// get input value
var input_val = input.val();

// don't validate empty input
if (input_val === "") { return; }

// original length
var original_len = input_val.length;

// initial caret position
var caret_pos = input.prop("selectionStart");

// check for decimal
if (input_val.indexOf(".") >= 0) {

// get position of first decimal
// this prevents multiple decimals from
// being entered
var decimal_pos = input_val.indexOf(".");

// split number by decimal point
var left_side = input_val.substring(0, decimal_pos);
var right_side = input_val.substring(decimal_pos);

// add commas to left side of number
left_side = formatNumber(left_side);

// validate right side
right_side = formatNumber(right_side);

// On blur make sure 2 numbers after decimal
if (blur === "blur") {
right_side += "00";
}

// Limit decimal to only 2 digits
right_side = right_side.substring(0, 2);

// join number by .
input_val = left_side;//"$" + left_side + "." + right_side;

} else {
// no decimal entered
// add commas to number
// remove all non-digits
input_val = formatNumber(input_val);
input_val = input_val;//"$" + input_val;

// final formatting
// if (blur === "blur") {
//   input_val += ".00";
// }
}

// send updated string to input
input.val(input_val);

// put caret back in the right position
var updated_len = input_val.length;
caret_pos = updated_len - original_len + caret_pos;
input[0].setSelectionRange(caret_pos, caret_pos);
}
</script>

</html>
