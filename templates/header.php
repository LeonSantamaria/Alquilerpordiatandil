<!DOCTYPE html>
    <html lang="en">
    <head>
        <base href="<?php echo BASE_URL?>"/>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alquiler Por Dia Tanidl</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
      
    </head>
    <body>
     
      <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
          <div class="container-fluid">
            <img src="images/iconoF.png" style="height: 80px; margin: 0;">
            <a class="navbar-brand" href="pagina">Alquiler por dia Tandil</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse" >
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="pagina">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pagina#LI-servicios">Servicios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contacto</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
    
      <main>
      
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/1.jpg" alt="" style="height: 70vh;  width: 100%;">
              <div class="container">
                <div class="carousel-caption text-start">
                  <h1>Example headline.</h1>
                  <p>Some representative placeholder content for the first slide of the carousel.</p>
                  <!--<p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>-->
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/2.jpg" alt="" style="height: 70vh; width: 100%;">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Another example headline.</h1>
                  <p>Some representative placeholder content for the second slide of the carousel.</p>
                  <!--<p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>-->
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/3.jpg" alt="" style="height: 70vh; width: 100%;">
              <div class="container">
                <div class="carousel-caption text-end">
                  <h1>One more for good measure.</h1>
                  <p>Some representative placeholder content for the third slide of this carousel.</p>
                  <!--<p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>-->
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      
      
      
        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
      
        <div class="container marketing" >
          <div>
            <h2>Numeros Importantes</h2>
            <div class="desplegar-info">
              <div class="cont-invisible">
                <ul class="ul-info">
                  <li>Ambulancia:123123</li>
                  <li>Policia:123</li>
                  <li>Oficina de turismo:123132</li>
                  <li>Bomberos:921</li>
                  <li>leon:249412412</li>
                  <li>kevsho:92381239</li>
                </ul>
              </div>
            </div>
            <span class="vm-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
</svg></span>
          </div>
          <div class="img-center"> 
            <img src="images/logo.jpg" class="img-thumbnail" id="LI-servicios">
          </div>
          
      
      
          <!-- START THE FEATURETTES -->
      
          <nav aria-label="Page navigation example">
              
              <ul class="categorias" >
                <li><button type="button" id="btn-alquiler" class="btn btn-outline-dark">Alquileres</button></li>
                <li><button type="button" id="btn-remis" class="btn btn-outline-dark">Remiseria</button></li>
                <li><button type="button" id="btn-24" class="btn btn-outline-dark">24/7</button></li>
                <li><button type="button" id="btn-mandados" class="btn btn-outline-dark">Mandados/Cadetes</button></li>
              </ul>
          </nav>
          <hr class="featurette-divider" >
          <div id="info">
            
           <!--CARD BOOSTRAP 
              <div class="card bg-dark text-light" style="width: 18rem;">
              <img src="images/2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
              </div>
            </div> -->
            
          </div>
          
          <hr class="featurette-divider">
      
          <!-- /END THE FEATURETTES -->
      
        </div><!-- /.container -->
        </main>
      
      
        