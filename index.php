<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  .carousel-inner img {
      width: 100%;
      max-height: 460px;
  }

  .carousel-inner{
   height: 400px;
  }

    h3 {
    font-family: 'Palanquin Dark', sans-serif;
    font-size: 300%;
    color: #ffe6f9;
    }
    p {
    font-family: 'Palanquin Dark', sans-serif;
    font-size: 200%;
    color: #ffffff;
    }
    .full {  
             display: block;
             border-collapse:collapse;  
             margin: 20px;
          }
    img.alineadoTextoImagenArriba
    {
          vertical-align: text-top;  
    }
img.alineadoTextoImagenCentro{
  vertical-align: middle;
  /* Ojo vertical-align: text-middle no existe*/
}
img.alineadoTextoImagenAbajo{
  vertical-align: text-bottom;  
}
body {
    background: url(imagenes/background.png);
    background-size: 80px 60px;
    background-repeat: repeat;
}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="border-radius: 60px;">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">South Wind Technology</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" style='width:20%'>Home</a></li>
        <li><a href="#" style='width:20%'>About</a></li>
        <li><a href="#" style='width:20%'>Projects</a></li>
        <li><a href="#" style='width:20%'>Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<br>
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="border-radius: 60px;">
<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="border-radius: 60px;">

      <div class="item active">
          <img src="Imagenes/sobresalir.jpg" class="alineadoTextoImagenArriba">prueba
          <div class="w3-display-topmiddle w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white">
            <h3>Muestrate</h3>
            <p>Haz que tu negocio sobresalga</p>
            </h1>
          </div>
      </div>

      <div class="item">
        <img src="Imagenes/codigo.jpg"/>
        <div class="w3-display-topright w3-margin-top w3-margin-right w3-center">
          <h1 class="w3-xxlarge w3-text-white">
          <h3 align="right">Imnovar</h3>
          <p align="right">Todos los producto se<br>desarrollan con las últimas tecnologías  </p>          
          </h1>
        </div>
      </div>

      <div class="item">
        <img src="Imagenes/ann.jpg">
          <div class="w3-display-topleft w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white">
            <h3 align="left">Confianza</h3>
            <p>La robustes de tu sistema <br>       representa quien sos</p>
            </h1>
          </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="border-radius: 60px 20px 20px 60px;">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only"> </span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="border-radius: 20px 60px 60px 20px;">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only"> </span>
    </a>
    <!-- Indicators -->
</div>
  
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-4"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
