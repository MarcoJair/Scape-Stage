<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">    
 <title>Scape Stage</title>
</head>
<body>
    <DIV>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            
          <a class="navbar-brand" href="#LOGIN">SCAPE STAGE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                  
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  JUEGOS
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="">CODIGO FISICO</a></li>
                  <li><a class="dropdown-item" href="">CODIGO DIGITAL</a></li>
                  
                
                </ul>
                   <!--PRIMERA-->
                <li class="nav-item">
                    <a class="nav-link" href="#">NOVEDADES</a>
                  </li>
                    <!--SEGUNDA-->
              </li>
                     <!--TERCERA-->
              <li class="nav-item">
                <a class="nav-link" href="#">MAS POPULAR</a>
              </li>
                    <!--CUARTA-->
                    <li class="nav-item">
                        <a class="nav-link" href="#">OFERTAS</a>
                      </li>
              </button></ul>
</body>
</div>

<a class="navbar-brand" href="LOGIN"></a>
<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#MyModal">INICIAR SESION</button>
        </nav>

        <div class="modal fade" id="MyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Iniciar sesion</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>
                    <label for="Username">User Name</label>
                    <input type="text" name="user" placeholder="Username" size="30" required>
                    </p>
                    <p>
                <label for="pass">Contrase??a</label>
                <input type="password" name="pass" placeholder="Password" size="30" required>
                </p>
                </fieldset>
                <p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="button" class="btn btn-primary">Registrarse</button>
                </div>
              </div>
            </div>
          </div>

        
<!--VISTA DE CARRUSEL-->

<DIV>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/CROOSFIRE.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/PS.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/xboxone-x-enhanced-gemes.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</DIV>

<DIV class="CONTAINER">

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/ps-store-rebajas-enero-2175199.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>

</DIV>

            
<script src="js/bootstrap.min.js"></script> 
</html>
