<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Styles -->
    {{--<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> --}}
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('/images/logo.jpeg')}}" alt="best-tech" width="80">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('welcome') }}"><i class="fa fa-home"></i> {{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('policies')}}">How it works</a>
                        </li>
                        @guest
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Create Account') }}</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>

                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row" id="landing">
            <div class="col-md-6">
                <div class="text-white landing-texts ">
                    <h1>Buy any phone and gadgets!</h1>
                    <h4>Easy Payment</h4>
                    <h4>Pay in installment</h4>
                    <a href="{{route('register')}}" class="btn btn-primary-s">Create an Account now <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-4 offset-md-1">
                <div class="landing-form">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label for="username">Username</label>
                                <input type="text" class="form-control input-block" name="username" placeholder="Username">
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="username">Password</label>
                                <input type="password" name="password" class="form-control input-block" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <button class="btn btn-primary-s btn-block">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center ">
                    <br><br>
                    <h2 class="text-primary-s">Home of Phones and Gadgets</h2>
                    <br>
                    <img src="{{asset('/images/phones.png')}}" alt="phones" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center bg-primary-s">
        <div class="container">
            <div class="row hp-1">

                <div class="col-md-6 ">
                    <img src="{{asset('images/pay.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="pay-mt text-white">
                        <h2>Yes! We accept all forms of payment. Be it cash payment, bank transfer
                            or online payment. And definitely, you can pay in INSTALLMENT</h2>
                        <h2>You are never limited</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row hp-r1">

            <div class="col-md-6">
                <div class="pay-mt ">
                    <h2 class="text-primary-s">Accessibility & Reliability </h2>
                    <h4>Bestech Kolo is an initiative of Bestech Int'l and we have been around for
                        a long while. We have office location in Lagos and Abeokuta. </h4><br>

                    <h4> Our products are reliable and offcourse original. Knidly feel safe and
                        relax buying from us </h4>
                </div>
            </div>
            <div class="col-md-6 order-sm-1">
                <img src="{{asset('images/Payment--Photo.png')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="contact">

                    <h2 class="text-primary-s">Contact Us</h2>
                    <h4><strong>Head Office:</strong> No 2, Baruwa street, off Ijesha road, Surulere.</h4>
                    <h4>Lagos.</h4>
                    <h4><strong>Branch Office:</strong> No 35,Ola street off Ijesha road, Itire, Surulere</h4>
                    <h4>Lagos.</h4>
                    <h4><strong>Phone Number:</strong> 08067523967, 09073744475, 08117342063</h4>
                </div>
            </div>
        </div>
    </div>
    <footer id="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">&copy;2019,<br> Bestech International. <br> All Rights Reserved | Design by <a class="text-warning" href="https://billztechnologies.com/" target="_blank">Billz Technologies</a> </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>

</html>