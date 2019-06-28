<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'PayByBit') }}
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

        <main id="dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2" id="side-nav">
                        <nav class="navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbaraside" aria-controls="navbaraside" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbaraside">
                                <ul cass="navbar-nav">
                                    @if(auth()->user()->isAdmin())

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.users') }}">{{ __('Users') }}</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.products') }}">{{ __('Purchases') }}</a>
                                    </li>
                                    @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('home') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('products.index') }}"><i class="fa fa-shopping-cart"></i> {{ __('My Purchases') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('user.transactions') }}"><i class="fa fa-credit-card"></i> {{ __('My Transaction') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }} " onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> {{ __('Logout') }}</a>
                                    </li>
                                    @endif
                                </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-10 offset-md-2">
                    <br>
                    @if(!auth()->user()->isAdmin())
                    <div class="row">
                        <div class="col-md-2 offset-md-10">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#purchaseModal">
                                New Purchase
                            </button>
                        </div>
                    </div>
                    @endif
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{session()->get('error')}}
                            </div>
                            @endif
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
    </div>

    </main>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="purchaseModal" tabindex="-1" role="dialog" aria-labelledby="purchaseModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="purchaseModalLabel">New Purchase</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('products.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label for="name">Product Name</label>
                                <input type="text" name="name" class="form-control input-block @error('name') is-invalid @enderror">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="price">Price</label>
                                <input type="number" name="price" class="form-control input-block @error('price') is-invalid @enderror">
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <br>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>