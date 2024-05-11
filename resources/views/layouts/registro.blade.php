@extends('layout/plantilla')

@section('contenido')
    <div class="card">
        <br><br>
        <h5 class="card-header">Transportes Ultrarrapidos,S.A</h5>
        <div class="card-body">
            <h5 class="card-title">Registro de camiones de Transporte Ultrarrapidos,S.A</h5>
            <p>
                <a href="{{route('transportista.create')}}" class="btn btn-primary">Agregar nuevo Registro de Camion</a>
            </p>
            <p class="card-text"></p>
            <br>

            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                    <td>id</td>
                    <td>Nombre</td>
                    <td>Dirección</td>
                    <td>Telefono</td>
                    <td>Correo Electronico</td>

                    </thead>
                    <tbody>
                    @foreach($datos as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->direccion}}</td>
                            <td>{{$item->telefono}}</td>
                            <td>{{$item->correo_electronico}}</td>

                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
