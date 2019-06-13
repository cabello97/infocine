<div class="form-group">
	{!!Form::label('nombre','Nombre:')!!}
	{!!Form::text('name',$movie->name,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la pelicula'])!!}
</div>
<div class="form-group">
	{!!Form::label('Elenco','Elenco:')!!}
	{!!Form::text('cast',null,['class'=>'form-control', 'placeholder'=>'Ingresa el elenco'])!!}
</div>
<div class="form-group">
	{!!Form::label('Synopsis','Synopsis:')!!}
	{!!Form::text('synopsis',null,['class'=>'form-control', 'placeholder'=>'Ingresa la synopsis'])!!}
</div>
<div class="form-group">
	{!!Form::label('Direccion','Dirección:')!!}
	{!!Form::text('direction',null,['class'=>'form-control', 'placeholder'=>'Ingresa al director'])!!}
</div>
<div class="form-group">
	{!!Form::label('Duracion','Duración:')!!}
	{!!Form::text('duration',null,['class'=>'form-control', 'placeholder'=>'Ingresa la duración'])!!}
</div>
<div class="form-group">
	{!!Form::label('Año','Año:')!!}
	{!!Form::text('age',null,['class'=>'form-control', 'placeholder'=>'Ingresa el año de estreno'])!!}
</div>
<div class="form-group">
	{!!Form::label('Trailer','Trailer:')!!}
	{!!Form::text('trailer',null,['class'=>'form-control', 'placeholder'=>'Inserta trailer de Youtube'])!!}
</div>
<div class="form-group">
	{!!Form::label('Poster','Poster:')!!}
	{!!Form::file('path')!!}
</div>
<div class="form-group">
	{!!Form::label('Genero','Genero:')!!}
	{!!Form::select('genre_id',$genres)!!}
</div>