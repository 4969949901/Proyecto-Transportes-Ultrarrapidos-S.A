@extends('layouts.app')

@section('content')

<<<<<<< HEAD:resources/views/home.blade.php
    <style>
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


    <body>
=======
>>>>>>> 3ca147cae3161a8c8d8d0248f36bea43f2781824:resources/views/layouts/home.blade.php
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Iniciado') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Inicio de Sesion Exitoso') }}
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
@endsection
