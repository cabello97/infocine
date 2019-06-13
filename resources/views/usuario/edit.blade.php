@extends('layouts.admin')
@section('content')
@include('alerts.request')

{!!Form::model($user,['route'=>['usuario.update',$user],'method'=>'PUT'])!!}
@if(Auth::user()->id== $user->id)
@include('usuario.forms.usr')
@else
<div class="form-group">
    {!!Form::label('nombre','Nombre:')!!}
    {!!Form::text('name',$user->name,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('email','Correo:')!!}
    {!!Form::text('email',$user->email,['class'=>'form-control'])!!}
</div>
@endif
{!!Form::hidden('auth_id',Auth::user()->id,['class'=>'form-control'])!!}

{!!Form::label('admin','Derechos de administrador:')!!}
<input type="checkbox" name="admin" value='admin' <?php
if (Auth::user()->rol == 'comun') {
    echo 'disabled="disabled"';
} if ($user->rol == 'admin') {
    echo 'checked';
}
?>/><br>
{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
{!!Form::open(['route'=>['usuario.destroy', $user], 'method' => 'DELETE'])!!}
{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
{!!Form::close()!!}
@endsection