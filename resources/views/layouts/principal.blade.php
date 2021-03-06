<!DOCTYPE html>
<html>
    <head>
        <title>InfoCine.com</title>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Custom Theme files -->
        <script src="js/jquery.min.js"></script>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--webfont-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">

    </head>
    <body>
        <!-- header-section-starts -->
        <div class="full">
            <div class="menu">
                <ul>
                    <li><a class="active" href="{!!URL::to('/')!!}"><i class="home"></i></a></li>
                    <li><a href="{!!URL::to('/reviews')!!}"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
                    @if (Auth::check())
                    <li><a href="{!!URL::to('/admin')!!}"><div class="adm"><i  style='font-size:36px; color:white' class="fas fa-cogs"></i></div></a></li>
                    @endif

                </ul>
            </div>
            <div class="main">

                @yield('content')

                <div class="footer">
                    <div class="copyright">
                        <p> Proyect by  <b>Antonio Cabello Velasco</b></p>
                        <p> Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(window).load(function () {

                $("#flexiselDemo1").flexisel({
                    visibleItems: 6,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: false,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 2
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 3
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 4
                        }
                    }
                });
            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        <script>
$("#input-id").rating();
</script>
        <div class="clearfix"></div>
    </body>
</html>
