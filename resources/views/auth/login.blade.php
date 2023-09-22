<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ingrese en el sistema</title>
    <link rel="stylesheet" href="{{ asset ('assets/styles.css')}}">
</head>

<header>
  <!-- Barra de navegacion -->  
<div class="shadow p-2 mb-3 bg-body rounded">
<nav class="nav nav-pills p-3 justify-content-center">

  <a href="{{ route('inicio') }}" class="nav-link" aria-current="page"><img class="logo-modaNova" src="{{ asset ('assets\imagenes\logo-ModaNova.png') }}"></a>
       <a href="{{ route('inicio') }}" class="nav-link p-3 text-black" aria-current="page" style="color: black;">Inicio</a>

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
    <a href="#" class="nav-link" aria-current="page"><img style="width: 30px; height:30px;" src="{{('assets\imagenes\icono-carrito.png')}}"></a>

  </nav>
</div>
<!-- Fin de barra de navegacion -->
</header>

<body>
<center>

    <!-- Formulario de inicio de sesion de usuario-->
        <form method="POST" action="{{ route('validar-login') }}">
          @csrf
            <section class="form-register">
                <h2>Ingresa en la plataforma</h2>
    
            <input name="email" class="inputs" type="email" placeholder="Ingrese su correo electronico." title="Ingrese un correo electronico valido" required>
            <input name="password" class="inputs" type="password" placeholder="Ingrese su contraseña." pattern="[a-z-A-Z-1-9]{6,100}" title="Ingrese minimo 8 caracteres." required>
            <input class="boton3" type="submit" value="Ingresar" name="iniciarsesion">
            <br>
            <br>
            <span>¿Aun no tienes una cuenta? Registrate <a href="{{ route('register') }}" class="boton2">aquí.</a></span>
            <br>
            <br>
            <span>Si olvidaste tu contraseña, recuperala <a href="recuperar-contraseña.html" class="boton2">aquí.</a></span>
            <br>
        </section>
      </form>
    </form>
</center>
    
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
        <p class="h3">Tienda de Ropa GAES3</p>
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
