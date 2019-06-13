@extends('layouts.principal')
@section('content')
@include('alerts.request')
@include('alerts.errors')

<div class="header">
    <div class="top-header">
        <div class="logo">
            <a href="{!!URL::to('/')!!}"><img src="images/logo.png" alt="" /></a>
            <p>Movie Theater</p>
        </div>

        @if (Auth::check())

        <div class="" style="float: right;"><a href="{!!URL::to('/logout')!!}"><button class="btn btn-danger">Desconectar</button></a></div>
        @else
        <div class="" style="float: right;"><a href="{!!URL::to('/usuario/create')!!}"><button class="btn btn-info">Registrarse</button></a></div>

        @endif
        
        <div class="clearfix"></div>
    </div>
    <div class="header-info">

        @if (Auth::check())

        <div>
            <h1>BIENVENIDO</h1> <h2 style='color:white'>{!!Auth::user()->name!!}</h2>
            @if (Auth::user()->rol == 'admin')
            <h3>Has iniciado sesion como usuario ADMINISTRADOR</h3>
            @else
            <h3>Has iniciado sesion como usuario COMUN</h3>
            @endif

        </div>

        @else

        <h1>Login</h1>
        {!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
        <div class="form-group">
            {!!Form::label('correo','Correo:')!!}	
            {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('contrasena','Contraseña:')!!}	
            {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
        </div>
        {!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}
        @endif
    </div>

</div>
<div class="review-slider">
    <ul id="flexiselDemo1">
        <li><img src="images/r1.jpg" alt=""/></li>
        <li><img src="images/r2.jpg" alt=""/></li>
        <li><img src="images/r3.jpg" alt=""/></li>
        <li><img src="images/r4.jpg" alt=""/></li>
        <li><img src="images/r5.jpg" alt=""/></li>
        <li><img src="images/r6.jpg" alt=""/></li>
    </ul>

</div>
@endsection	