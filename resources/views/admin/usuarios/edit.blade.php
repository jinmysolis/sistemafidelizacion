@extends('layouts.admin')


@section('content')
<div class="row">
    <div   class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Crear Nuevo Ingreso</h3>
        @if(count($errors) >0 )
        <div class="alert alert-danger">
            
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
      </div> 
 </div>

{!!Form::model($users,['route'=>['admin.usuarios.update',$users->id],'method'=>'PUT'])!!}

 <div class="col-md-6">
<div class="form-group">
  {!!Form::label('name', 'Nombre')!!}
  {!!Form::text('name', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su nombre'])!!}

</div>
<div class="form-group">
  {!!Form::label('apellido', 'Apellido')!!}
  {!!Form::text('apellido', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su Apellido'])!!}
</div>
</div>


<div class="col-md-6">
<div class="form-group">
  {!!Form::label('telefono', 'Telefono')!!}
  {!!Form::text('telefono', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su Telefono'])!!}

</div>
<div class="form-group">
  {!!Form::label('pais', 'Pais')!!}
  {!!Form::text('pais', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su Pais'])!!}
</div>
</div>


<div class="col-md-6">
<div class="form-group">
  {!!Form::label('ciudad', 'Ciudad')!!}
  {!!Form::text('ciudad', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su Ciudad'])!!}
</div>

<div class="form-group">
  {!!Form::label('sexo', 'Genero')!!}
  {!!Form::select('sexo',[''=>'Selecione Genero','hombre'=>'hombre','mujer'=>'mujer'],null,['class'=>'form-control'])!!}
</div>
</div>
 
<div class="col-md-6">

<div class="form-group">
  {!!Form::label('email', 'Correo Electronico')!!}
  {!!Form::email('email', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su Email'])!!}
</div>
    
<div class="form-group">
  {!!Form::label('password', 'Contraseña')!!}
  {!!Form::password('password',['class'=>'form-control'])!!}
</div>

</div>
 
  <p>
 <center><button type="submit" class="btn btn-info btn-lg">Editar Usuario</button></center>
 </p>

{!!Form::close()!!}
@endsection