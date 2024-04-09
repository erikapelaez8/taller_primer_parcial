@extends('layouts.base')
@section('title', 'Ver Bicicleta')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-info">Ver detalles de la bicicleta</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class=" table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Fecha de Fabricación</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Disponible</th>
                        <th scope="col">Cantidad Disponible</th>
                        <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$bicicleta->marca}}</td>
                            <td>{{$bicicleta->modelo}}</td>
                            <td>{{$bicicleta->fecha_fabricacion}}</td>
                            <td>{{$bicicleta->precio}}</td>
                            <td>{{$bicicleta->descripcion}}</td>
                            <td>{{$bicicleta->disponible ? 'Si' : 'No'}}</td>
                            <td>{{$bicicleta->cantidad_disponible}}</td>
                            <td>{{$bicicleta->estado}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-3">
                <a href="{{ route('bicicletas.index') }}" class="btn btn-danger">Anterior</a>
            </div>
        </div>
    </div>
@endsection
