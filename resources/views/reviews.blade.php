@extends('layouts.principal')
@section('content')
<div class="review-content">
    <div class="top-header span_top">
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt="" /></a>
            <p>Movie Theater</p>
        </div>
        <div class="search v-search">
            
             <form>
                 <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {
                                                             this.value = 'Search..';
                                                         }"/>
                 <input type="submit" value="">
             </form>
            
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="reviews-section">
        <h3 class="head">Movie Reviews</h3>
        <div class="col-md-9 reviews-grids">
            @foreach($movies as $movie)
            <div class="review">
                <div class="movie-pic">
                    <img src="movies/{{$movie->path}}" alt="" />
                </div>
                <div class="review-info">
                    <a href="{{ url('info/' . $movie->id ) }}">
                        <h1>{{$movie->name}}</h1>
                    </a>
                    <p class="info">CAST:&nbsp;&nbsp;{{$movie->cast}}</p>
                    <p class="info">DIRECTION:&nbsp;&nbsp;{{$movie->direction}}</p>
                    <p class="info">GENRE:&nbsp;&nbsp;{{$movie->genre}}</p>
                    <p class="info">DURATION:&nbsp;&nbsp;{{$movie->duration}}</p>
                    <p class="info">AGE:&nbsp;&nbsp;{{$movie->age}}</p>
                    <p class="info"><i style="color: green" class="far fa-thumbs-up"></i>:&nbsp;&nbsp;{{$movie->likes}}&nbsp;&nbsp;<i style="color: red" class="far fa-thumbs-down"></i>:&nbsp;&nbsp;{{$movie->dislikes}}</p>


                </div>
                <div class="clearfix"></div>
            </div>
            @endforeach




        </div>


        <div class="clearfix"></div>
    </div>
</div>
<div class="review-slider">
    <ul id="flexiselDemo1">
        @foreach($movies as $movie)

        <li><a href="{{ url('info/' . $movie->id ) }}"><img src="movies/{{$movie->path}}" alt="" style="width: 200px"/></a></li>

        </a>

        @endforeach
    </ul>	
</div>	
@endsection