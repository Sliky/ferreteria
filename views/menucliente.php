<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Theme Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">

    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>
	
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></span> Ferreteria Flores</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

          <ul class="nav navbar-nav">
			
            <li> <a href="#"><span class="icon-home"></span>   Inicio</a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <span class="icon-feather"></span>  Nuestros Productos <span class="caret"></span></a>
            	<ul class="dropdown-menu" role="menu">
            		<li><a href="#">Abracivos </a></li>
            		<li><a href="#">Cables y Cadenas</a></li>
            		<li><a href="#">Candados y Cerraduras</a></li>
            		<li><a href="#">Cintas</a></li>
            		<li><a href="#">Ferreteria General</a></li>
            		<li><a href="#">Herramientas</a></li>
            		<li><a href="#">Mangueras</a></li>
            		<li><a href="#">Pintura y Accesorios</a></li>
            		<li><a href="#">Tuberias</a></li>
            	</ul>
            </li>
            <li id="loguin" class="loge"><a href="#"><span class="icon-key"></span> Acceder</a></li>

          </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<section>
    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img 
        {
        width: 60%;
        margin: auto;
        }
    </style>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/imagen1.jpg" alt="1" width="920" height="340">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="img/imagen2.jpg" alt="2" width="920" height="340">
      <div class="carousel-caption">
        ...
      </div>
    </div>    
    <div class="item">
      <img src="img/imagen3.jpg" alt="3" width="920" height="340">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
    $("#loguin").click(function()
    {
      $("#contenedor").load("views/loguin.php")
    });
    </script>    

</body>
</html>
