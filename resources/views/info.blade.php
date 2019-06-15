@extends('layouts.admin')
@include('alerts.success')
@section('content')
<h1>INFORMACION</h1>
<div class="row">
    <div class="col-sm-4">
        <img src="../movies/{{$movie->path}}" style="height:400px; width: 300px"/>
    </div>
    <div class="col-sm-8">
        <h3>{{$movie->name}}</h3>
        <p><big><b>Direccion:</b></big> {{$movie->direction}}</p>
        <p><big><b>Genero:</b></big> {{$genres[$movie->genre_id]}}</p>
        <p><big><b>Duracion:</b></big> {{$movie->duration}}</p>
        <p><big><b>Elenco:</b></big> {{$movie->cast}}</p>
        <p><big><b>Me gusta:</b></big> {{$movie->likes}}:&nbsp;&nbsp;<big><b></i>No me gusta:</b></big> {{$movie->dislikes}}</p>
        @if (Auth::check())
        <div class="col-sm-2">
            {!!Form::open(['route'=>'pelicula.likes', 'method'=>'POST'])!!}
            {!!Form::hidden('likes',$movie->likes,['class'=>'form-control'])!!}
            {!!Form::hidden('id',$movie->id,['class'=>'form-control'])!!}
            {!!Form::submit('Me gusta &#128525;',['class'=>'btn btn-success'])!!}
            {!!Form::close()!!}
        </div>
        <div class="col-sm-2">
            {!!Form::open(['route'=>'pelicula.dislikes', 'method'=>'POST'])!!}
            {!!Form::hidden('dislikes',$movie->dislikes,['class'=>'form-control'])!!}
            {!!Form::hidden('id',$movie->id,['class'=>'form-control'])!!}
            {!!Form::submit('No me gusta &#128169;',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}
        </div>
        @else
        <a href="{!!URL::to('/')!!}"><p>Inicia sesion para dejar tu Me gusta</p></a>
        @endif
    </div>
    <div class="clearfix"></div>

</div>
<h1>Sinopsis</h1>
<p>{{$movie->synopsis}}</p>

<h1>TRAILER</h1>
<div>
    <iframe width="560" height="315" src="{{$movie->trailer}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<!-- Contenedor Principal -->
<h1>Comentarios</h1>

<div class="comments-container">
    <ul id="comments-list" class="comments-list">
        @foreach($comments as $comment)
        @if($comment->movie_id == $movie->id )
        <li>
            <div class="comment-main-level">
                <!-- Avatar -->
                <h3 class="comment-avatar">                
                    @foreach($users as $user)

                    @if($comment->user_id == $user->id )
                    {{$user->name}}
                    @endif

                    @endforeach</h3>
                <!-- Contenedor del Comentario -->
                <div class="comment-box">
                    <div class="comment-head">
                        <span>{{$comment->date}}</span>
                        <!--<i class="fa fa-reply"></i>
                        <i class="fa fa-heart"></i>-->
                    </div>
                    <div class="comment-content">
                        {{$comment->comment}}
                    </div>
                </div>
            </div>
        </li>
        @endif
        @endforeach
        @if (Auth::check())

        {!!Form::open(['route'=>'comentario.store', 'method'=>'POST'])!!}
        {!!Form::text('comment',null,['class'=>'form-control', 'placeholder'=>'Escribe tu comentario'])!!}
        {!!Form::hidden('movie_id',$movie->id,['class'=>'form-control'])!!}
        {!!Form::hidden('user_id',Auth::user()->id,['class'=>'form-control'])!!}
        {!!Form::submit('Enviar &#128221;',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}
        @else
        <a href="{!!URL::to('/')!!}"><p>Inicia sesion para dejar tu comentario</p></a>


        @endif
    </ul>
</div>


@endsection