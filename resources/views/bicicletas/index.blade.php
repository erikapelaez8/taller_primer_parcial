@extends('layouts.base')
@section('title', 'Bicicletas lista')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Bicicletas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @foreach($bicicletas as $bicicleta)
                    <div class="card">
                        <div class="card-header">
                            {{$bicicleta->marca}}
                        </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$bicicleta->modelo}}
                        </h5>
                        <p class="card-text">
                            {{$bicicleta->fecha_fabricacion}}
                        </p>
                        <p class="card-text">
                            {{$bicicleta->precio}}
                        </p>
                        <p class="card-text">
                            {{$bicicleta->descripcion}}
                        </p>
                        <p class="card-text">
                            {{$bicicleta->disponible ? 'Si' : 'No'}}
                        </p>
                        <p class="card-text">
                            {{$bicicleta->cantidad_disponible}}
                        </p>
                        <p class="card-text">
                            {{$bicicleta->estado}}
                        </p>
                        
                        <td>
                            <a
                              href="{{route('bicicletas.show', $bicicleta)}}"
                              class="btn btn-info"
                            >Ver</a>
                          </td>
      
                          <td>
                            <a
                              href="{{route('bicicletas.edit', $bicicleta)}}"
                              class="btn btn-success"
                            >Editar</a>
                          </td>

                          <td>
                            <form
                                method="post"
                                action="{{route('bicicletas.destroy', $bicicleta)}}"
                            >
                                @csrf
                                @method('DELETE')
                                <button
                                  type="submit"
                                  class="btn btn-danger"
                                  onclick="return confirm('Estas seguro de que deseas eliminar esta tarea?')"
                                >Eliminar</button>
                            </form>
                          </td>
                        </div>
                    </div>
                @endforeach 
            </div>
            <a 
              href="{{route('bicicletas.create')}}"
              class="btn btn-primary">
              Crear nueva bicicleta
            </a> 
        </div>
    </div>
  @endsection



 {{--  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            {{$bicicleta->marca}}
          </h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"> {{$bicicleta->modelo}}</li>
            <li class="list-group-item"> {{$bicicleta->fecha_fabricacion}}</li>
            <li class="list-group-item"> {{$bicicleta->precio}}</li>
            <li class="list-group-item"> {{$bicicleta->disponible ? 'Si' : 'No'}}</li>
            <li class="list-group-item"> {{$bicicleta->cantidad_disponible}}</li>
          </ul>
          <p class="card-text"> {{$bicicleta->descripcion}}</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            {{$bicicleta->estado}}
        </div>
      </div>
    </div>
  </div> --}}