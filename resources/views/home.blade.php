<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset ('assets/styles.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tienda de ropa</title>
  </head>
  <div>

    <header>
      <!-- Barra de navegacion -->  
    <div class="shadow p-2 mb-3 bg-body rounded">
    <nav class="nav nav-pills p-3 justify-content-center">

      <a href="{{ route('login') }}" class="nav-link" aria-current="page"><img class="logo-modaNova" src="{{ asset ('assets\imagenes\logo-ModaNova.png') }}"></a>

           <a href="{{ route('login') }}" class="nav-link p-3 text-black active" aria-current="page" style="color: black;">Inicio</a>
    
      <!-- Boton desplegable de productos para mujer -->
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle p-3" data-bs-toggle="dropdown" role="button" aria-expanded="false" style="color: black;">Mujer</a>
          <ul class="dropdown-menu">
              <li><a href="camisetas-mujer.html" class="dropdown-item">Camisetas / Blusas</a></li>
              <li><a href="pantalones-shorts.html" class="dropdown-item">Pantalones / Shorts</a></li>
              <li><a href="chaquetas-sueters.html" class="dropdown-item">Chaquetas / Sueters</a></li>
              <li><a href="ropa-interior.html" class="dropdown-item">Ropa interior</a></li>
              <li><a href="tenis-zapatos.html" class="dropdown-item">Tenis / Zapatos</a></li>
          </ul>
      </li>
    
          <!-- Boton desplegable de productos para hombre -->
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle p-3" data-bs-toggle="dropdown" role="button" aria-expanded="false" style="color: black;">Hombre</a>
          <ul class="dropdown-menu">
              <li><a href="camisetas-polo-m.html" class="dropdown-item">Camisetas / Polo</a></li>
              <li><a href="chaquetas-sueters-m.html" class="dropdown-item">Chaquetas / Sueters</a></li>
              <li><a href="pantalones-pantalonetas-m.html" class="dropdown-item">Pantalones / Pantalonetas</a></li>
              <li><a href="ropa-interior-m.html" class="dropdown-item">Ropa interior</a></li>
              <li><a href="tenis-zapatos-m.html" class="dropdown-item">Tenis / Zapatos</a></li> 
          </ul>
      </li>
    
          <!-- Boton desplegable de productos infantiles -->
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle p-3" data-bs-toggle="dropdown" role="button" aria-expanded="false" style="color: black;">Infantil</a>
          <ul class="dropdown-menu">
              <li><a href="camisetas-polo-i.html" class="dropdown-item">Camisetas / Polo</a></li>
              <li><a href="chaquetas-sueters-i.html" class="dropdown-item">Chaquetas / Sueters</a></li>
              <li><a href="pantalones-pantalonetas-i.html" class="dropdown-item">Pantalones</a></li>
              <li><a href="ropa-interior-i.html" class="dropdown-item">Ropa interior</a></li>
              <li><a href="tenis-zapatos-i.html" class="dropdown-item">Tenis / Zapatos</a></li> 
          </ul>
      </li>
    
      <!-- Boton desplegable de accesorios -->
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle p-3" data-bs-toggle="dropdown" role="button" aria-expanded="false" style="color: black;">Accesorios</a>
          <ul class="dropdown-menu">
              <li><a href="aretes.html" class="dropdown-item">Aretes</a></li>
              <li><a href="sombreros.html" class="dropdown-item">Sombreros</a></li>
              <li><a href="manillas.html" class="dropdown-item">Manillas</a></li>
              <li><a href="collares.html" class="dropdown-item">Collares</a></li>
          </ul>
      </li>
    
      
      <!-- Input search para buscar productos -->
      <form class="d-flex justify-content-end">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-dark" type="submit">Buscar</button>
        </form>
    
      <!-- Icono de Usuario para entrar a formulario de inicio de sesion-->
        <a href="{{ route('login') }}" class="nav-link" aria-current="page"><img style="width: 30px; height:30px;" src="{{('assets\imagenes\icono-user.png')}}"></a>
      <!-- Icono de carrito para entrar a formulario de compras -->
        <a href="error-404.html" class="nav-link" aria-current="page"><img style="width: 30px; height:30px;" src="{{('assets\imagenes\icono-carrito.png')}}"></a>
    
        @if(auth()->check())
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button cla type="submit" class="nav-link" aria-current="page">Cerrar sesión</button>
    </form>
@endif
      </nav>
    </div>
    <!-- Fin de barra de navegacion -->
    </header>
  
  
  <body>

  <!-- Inicio de carrusel de imagenes -->
  <div class="shadow p-2 mb-3 bg-body rounded">

      <!-- Botones inferiores del carrusel de imagenes -->
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

  <!-- Todo de la imagen / slider #1 del carrusel -->
    <div class="carousel-inner">
      <div class="carousel-item active d-item" data-bs-interval="10000">
        <img class="d-block w-100 d-img" src="{{ asset ('assets\imagenes\imagen-carrusel1.jpg') }}" alt="imagen-carrusel1">
        <div class="carousel-caption top-0 mt-4">
          <p class="mt-3 fs-3 text-uppercase textos-color"> Prendas Vintage </p>
          <h3 class="display-3 fw-bolder textos-color"> Si buscas prendas clasicas, en nuestra tienda las encontraras </h3>
        </div>
      </div>

  <!-- Todo de la imagen / slider #2 del carrusel -->
      <div class="carousel-item d-item" data-bs-interval="2000">
        <img src="{{ asset ('assets\imagenes\imagen-carrusel2.jpg') }}" class="d-block w-100 d-img" alt="imagen-carrusel2">
        <div class="carousel-caption top-0 mt-4">
          <p class="mt-3 fs-3 text-uppercase textos-color"> Productos infantiles </p>
          <h3 class="display-3 fw-bolder textos-color"> Para que los niños tengan las mejores prendas al mejor estilo </h3>
          <a href="camisetas-polo-i.html" class="btn btn-primary px-4 fs-5 mt-5">Ver más</a>
        </div>
      </div>

  <!-- Todo de la imagen / slider #3 del carrusel -->
      <div class="carousel-item d-item">
        <img src="{{ asset ('assets\imagenes\imagen-carrusel3.png') }}" class="d-block w-100 d-img" alt="imagen-carrusel3">
        <div class="carousel-caption top-0 mt-4">
          <p class="mt-3 fs-3 text-uppercase textos-color"> Camisetas y Polos</p>
          <h3 class="display-4 fw-bolder textos-color"> Si buscas calidad, comodidad y buenos precios en camisetas, entra a mirar nuestros productos</h3>
          <a href="camisetas-polo-m.html" class="btn btn-primary px-4 fs-5 mt-5">Ver más</a>
        </div>
      </div>
    </div>

 <!-- Botones laterales de carrusel de imagenes -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- Fin del carrusel de imagenes-->

  <br>

  <!-- Inicio de menu de tarjetas -->
  <div class="shadow p-2 mb-3 bg-body rounded">
  <div class="row row-cols-1 row-cols-md-3 g-4 p-5">

    <!-- Tarjeta #1 -->
    <div class="col">
      <div class="card h-100">
        <img src="{{('assets/imagenes/img-card1.jpg')}}" class="card-img-top" alt="img-card1">
        <div class="card-body">
          <h5 class="card-title">Descuentos 20%</h5>
          <p class="card-text">Actualmente tenemos 20% de descuento en prendas para niños, que esperas para <a href="#" style="text-decoration: none;">comprar.</a></p>
        </div>
        <div class="card-footer">
        </div>
      </div>
    </div>

        <!-- Tarjeta #2 -->
    <div class="col">
      <div class="card h-100">
        <img src="{{('assets/imagenes/img-card2.jpg')}}" class="card-img-top" alt="img-card2">
        <div class="card-body">
          <h5 class="card-title">Descuentos 10%</h5>
          <p class="card-text">10% de descuento en calzado femenino, valido hasta el 31 de diciembre del 2023.</p>
        </div>
        <div class="card-footer">
        </div>
      </div>
    </div>

        <!-- Tarjeta #3 -->
    <div class="col">
      <div class="card h-100">
        <img src="{{('assets/imagenes/img-card3.jpg')}}" class="card-img-top" alt="img-card3">
        <div class="card-body">
          <h5 class="card-title">Descuentos 50%</h5>
          <p class="card-text">Por el mes de la mujer, tenemos 50% de descuento en accesorios como collares y aretes, valido hasta el fin del mes de Marzo.</p>
        </div>
        <div class="card-footer">
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Fin de menu de tarjetas -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>

  <!-- Inicio del footer (Pie de pagina) -->
  <footer>

    <!-- Contenedores de estilo del footer -->
    <div class="container-fluid">
    <div class="row p-5 pb-2 bg-dark text-white">

      <!-- Menu #1 del footer -->
      <div class="col-xs-12 col-md-6 col-lg-3">
        <p class="h3">Tienda de Ropa ModaNova</p>
        <p class="text-seconday">Bogóta, Colombia</p>
      </div>

      <!-- Menu #2 del footer -->
      <div class="col-xs-12 col-md-6 col-lg-3">
      </div>

      <!-- Menu #3 del footer -->
      <div class="col-xs-12 col-md-6 col-lg-3">
        <p class="h5 mb3">Links</p>
        <div class="mb-2"><a href="#" class="text-secondary text-decoration-none">Terminos y Condiciones</a></div>
        <div class="mb-2"><a href="#" class="text-secondary text-decoration-none">Politica de Privacidad</a></div>
      </div>

      <!-- Menu #4 del footer -->
      <div class="col-xs-12 col-md-6 col-lg-3">
        <p class="h5 mb3">Redes Sociales</p>
        <div class="mb-2"><a href="#" class="text-secondary text-decoration-none">Instagram</a></div>
        <div class="mb-2"><a href="#" class="text-secondary text-decoration-none">Facebook</a></div>
        <div class="mb-2"><a href="#" class="text-secondary text-decoration-none">WhatsApp</a></div>
      </div>

      <div class="col-xs-12 pt-4">
        <p class="text-white text-center">Copyright - All rights reserved © 2023</p>
      </div>

    </div>
  </div>
  </footer>
  <!-- Fin del footer -->
</html>

<!-- Fin del codigo pagina web de tienda de ropa GAES 3 -->