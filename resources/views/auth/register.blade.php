@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@section('content')
    <!--se crearon estilos para el documento-->
    <style>
        .custom-card {
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            width: 300px;
            align-items: center;
            justify-content: center;
            background-color: rgba(255, 255, 255, 0.9); /* Fondo semi-transparente */
            backdrop-filter: blur(10px); /* Efecto de desenfoque */
            margin: 0 auto;
        }

        .custom-card:hover {
           background: linear-gradient(0deg,transparent,skyblue);
           animation: animate 6s linear infinite;
            animation-delay: -3s;
           margin-top: 60px;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-register {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-register:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        body {
            display-outside: ruby;
            background-image: url('https://img.freepik.com/foto-gratis/muchos-camiones-transporte-estacionados-estacion-servicio-al-atardecer-ai-generativo_123827-23416.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh; /* Para que el fondo ocupe toda la altura de la pantalla */
            align-items: center;
            justify-content: center;
            display: flow;
        }

    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card custom-card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3 row">
                                <label for="name" class="col-md-4 col-form-label form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="email" class="col-md-4 col-form-label form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password" class="col-md-4 col-form-label form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password-confirm" class="col-md-4 col-form-label form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="mb-0 row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary btn-register">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
