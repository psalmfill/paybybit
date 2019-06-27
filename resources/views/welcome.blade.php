<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
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
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <a class="navbar-brand" href="#">PaybyBit</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
                    <h1>Home of smooth purchases</h1>
                    <h3>Easy Payment</h3>
                    <h3>Pay by installment</h3>
                    <a href="{{route('register')}}" class="btn btn-success">Create an Account now</a>
                </div>
            </div>
            <div class="col-md-4 offset-md-1">
                <div class="landing-form">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label for="username">Username</label>
                                <input type="text" class="form-control input-block" name="username">
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
                                <input type="password" name="password" class="form-control input-block">
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
                                <button class="btn btn-success btn-block">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row hp-r1">
            <div class="col-md-6">
                <img src="{{asset('images/payment.jpg')}}" alt="" width="500">
            </div>
            <div class="col-md-6 ">
                <div class="pay-mt ">
                    <h2 class="text-success">We accept all forms of payment</h2>
                    <h2>You are never limited</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row hp-r1">

            <div class="col-md-6 ">
                <div class="pay-mt ">
                    <h2 class="text-success">Accessibility and reliability</h2>
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
                    <h6 class="text-center">2019&copy;</h6>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>