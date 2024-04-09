@extends('layouts.base')

@section('title', "Edit {$bicicleta->marca}")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Editar {{$bicicleta->marca}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-3">
                <a href="{{ route('bicicletas.index') }}" class="btn btn-danger">Anterior</a>
            </div>
        </div>
        <form class="row shadow m-3 p-3" method="post" action="{{route('bicicletas.update', $bicicleta)}}">
            @csrf
            @method('PUT')
            <div class="col-md-6 mt-2">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" value="{{$bicicleta->marca}}" required>
            </div>
            <div class="col-md-6 mt-2">
                <label for="modelo_moto" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="modelo" name="modelo" value="{{$bicicleta->modelo}}" required>
            </div>
            <div class="col-md-6 mt-2">
                <label for="fecha_fabricacion" class="form-label">Fecha de Fabricación</label>
                <input type="date" class="form-control" id="fecha_fabricacion" name="fecha_fabricacion" placeholder="Fecha de Fabricacion" value="{{$bicicleta->fecha_fabricacion}}" required>
            </div>
            <div class="col-md-6 mt-2">
                <label for="precio" class="form-label" >Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" value="{{$bicicleta->precio}}" required>
            </div>
            <div class="col-md-12 mt-2">
                <label for="descripcion" class="form-label">Descripcion</label>
                <textarea rows="4" class="form-control" id="descripcion" name="descripcion" required>{{$bicicleta->descripcion}}</textarea>
            </div>
            <div class="col-md-6 mt-2">
                <label for="color" class="form-label">Disponible</label>
                <select class="form-select" aria-label="Default select example" name="disponible" id="disponible">
                    <option selected>Seleccionar</option>
                    <option value="1" {{old('disponible', $bicicleta->disponibe) == '1' ? 'selected' : ''}}>Si</option>
                    <option value="0" {{old('disponible', $bicicleta->disponibe) == '0' ? 'selected' : ''}}>No</option>
                </select>
            </div>
            <div class="col-md-6 mt-2">
                <label for="cantidad_disponible" class="form-label" >Cantidad disponibe</label>
                <input type="number" class="form-control" id="cantidad_disponible" name="cantidad_disponible" value="{{$bicicleta->cantidad_disponible}}" required>
            </div>
            <div class="col-md-6 mt-2">
                <label for="estado" class="form-label">Estado</label>
                <select class="form-select" aria-label="Default select example" name="estado" id="estado">
                    <option selected>Seleccionar</option>
                    <option value="Nueva" {{old('estado', $bicicleta->estado) === 'Nueva' ? 'selected' : '' }}>Nueva</option>
                    <option value="Usada" {{old('estado', $bicicleta->estado) === 'Usada' ? 'selected' : '' }}>Usada</option>
                </select>
            </div>

            @if($errors->any())
                <div class="col-12 mt-2">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
                                
            <div class="col-12 mt-2">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>

        </form>
    </div>
@endsection