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
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('/images/logo.jpeg')}}" alt="best-tech" width="80"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('policies')}}">Policies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Create Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
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
            <div class="row hp-r1">
                <div class="col-md-6">
                    <img src="{{asset('images/pay.png')}}" alt="" width="500">
                </div>
                <div class="col-md-6 ">
                    <div class="pay-mt text-white">
                        <h2>We accept all forms of payment</h2>
                        <h2>You are never limited</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row hp-r1">

            <div class="col-md-6 ">
                <div class="pay-mt ">
                    <h2 class="text-primary-s">Accessibility and reliability</h2>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('images/Payment--Photo.png')}}" alt="" width="500">
            </div>
        </div>
    </div>
    <footer id="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">2019&copy;</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>