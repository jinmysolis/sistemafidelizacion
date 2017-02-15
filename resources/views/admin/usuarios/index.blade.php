@extends('layouts.admin')

@section('title')  Listar usuario  @endsection

@section('content')

  <a class="btn btn-info" href="{{route('admin.usuarios.create')}}" role="button">Crear Nuevo Usuario</a>

{!!Form::open(['route'=>'admin.usuarios.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right role="search" '])!!}

        <div class="form-group">
         {!!Form::text('name', null,['class'=>'form-control',' placeholder'=>'Introduzca su Busqueda'])!!}
                                            
                                  
         </div>
<button type="submit" class="btn btn-info">Buscar</button>
                                        
{!!Form::close()!!}



<div class="text-center table-condensed" >
<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Pais</th>
        <th>Ciudad</th>
        <th>Genero</th>
        <th>Email</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)     
      <tr >
        <td class="danger">{{ $user->id}}</td>
        <td>{{ $user->name}}</td>
        <td>{{ $user->apellido}}</td>
        <td>{{ $user->telefono}}</td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->ciudad}}</td>
        
        
         <td >
             @if ($user->sexo == "hombre")
              <span class="label label-danger ">{{$user->sexo}}</span>
             @else
              <span class="label label-primary">{{$user->sexo}}</span>
             @endif
         
         </td>
         <td>{{ $user->email}}</td>
     
         <td > <a href="{{route('admin.usuarios.edit',$user->id)}}" class="btn btn-warning ">E</a>
         <a href=""data-target="#modal-delete-{{$user->id}}" data-toggle="modal" class="btn btn-danger ">X</a>
         
         
         
         
         </td>
         
         
                        
         
         
      </tr>
      @include('admin.usuarios.modal')
       @endforeach
      
    </tbody>
    
  </table>
</div>
<div class="text-center">
{!! $users->setPath('')->render()!!}
</div>
@endsection