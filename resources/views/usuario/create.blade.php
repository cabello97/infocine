@extends('layouts.admin')
@section('content')
@include('alerts.request')
{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
@include('usuario.forms.usr')
{!!Form::hidden('rol',Auth::user()->rol,['class'=>'form-control'])!!}
{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
@endsection