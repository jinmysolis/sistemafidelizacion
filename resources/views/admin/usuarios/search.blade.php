{!!Form::open(['url'=>'admin/usuarios','method'=>'GET','class'=>'navbar-form navbar-left pull-right role="search" '])!!}

        <div class="form-group">
         {!!Form::text('searchText', null,['class'=>'form-control',' placeholder'=>'Introduzca su Busqueda'])!!}
                                            
                                  
         </div>
<button type="submit" class="btn btn-info">Buscar</button>
                                        
{!!Form::close()!!}