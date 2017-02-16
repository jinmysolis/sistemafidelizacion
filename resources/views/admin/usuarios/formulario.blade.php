
<div class="col-md-6">
<div class="form-group">
  {!!Form::label('name', 'Nombre')!!}
  {!!Form::text('name', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su nombre'])!!}

</div>
<div class="form-group">
  {!!Form::label('email', 'Correo Electronico')!!}
  {!!Form::email('email', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su Email'])!!}
</div>
</div>


<div class="col-md-6">
<div class="form-group">
  {!!Form::label('password', 'Contraseña')!!}
  {!!Form::password('password',['class'=>'form-control'])!!}
</div>

<!--<div class="form-group">
  {!!Form::label('type', 'Rol')!!}
  {!!Form::select('type',[''=>'Selecione un nivel','member'=>'Miembro','admin'=>'Admin'],null,['class'=>'form-control'])!!}
</div>-->
</div>