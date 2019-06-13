@extends('layouts.admin')
@section('content')
@include('alerts.request')

{!!Form::model($movie,['route'=> ['pelicula.update',$movie->id],'method'=>'PUT','files' => true])!!}
{!!Form::hidden('id',$movie->id,['class'=>'form-control'])!!}
@include('pelicula.forms.pelicula')
{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
{!!Form::open(['route'=> ['pelicula.destroy',$movie->id],'method'=>'POST'])!!}
{!!Form::hidden('id',$movie->id,['class'=>'form-control'])!!}
{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
{!!Form::close()!!}
@endsection