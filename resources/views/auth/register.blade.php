<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registrate en nuestra plataforma</title>
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

<center>
    <!-- Formulario de registro de usuario -->
    <form action="{{route('validar-registro')}}" method="POST">
    @csrf
        <section class="form-register">
            <h2>Registrate en nuestra plataforma</h2>

        <input name="name" class="inputs" type="text" placeholder="Ingrese su nombre completo." pattern="[a-z-A-Z- ]{8,30}" title="Ingrese solo letras, minimo 8 y maximo 30 caracteres." required>
        <input name="email" class="inputs" type="email" placeholder="Ingrese su correo electronico." title="Ingrese un correo electronico valido" required>

        <input name="fecha_nac" class="inputs" type="date" placeholder="Ingrese su fecha de nacimiento (dia/mes/año)." title="Ingrese su fecha de nacimiento." required max="2008-01-01">
        
        <select name="tipo_doc" class="inputs" type="text" placeholder="Ingrese su tipo de documento" title="Ingrese un tipo de documento valido." required>
          <option value="0">Selecciona tu tipo de documento</option>
          <option value="1">Cedula de Ciudadania</option>
          <option value="2">Tarjeta de Identidad</option>
          <option value="3">Cedula de extranjeria</option>
        </select>

        <input name="num_doc" class="inputs" type="num" placeholder="Ingrese su numero de documento." pattern="[1-9]{10}" title="Ingrese un numero de documento valido." required>
  
        <input name="telefono" class="inputs" type="num" placeholder="Ingrese su numero telefonico." pattern="[0-9]{10}" title="Ingrese un numero de telefono valido" required>
        <input id="password" name="password" class="inputs" type="password" placeholder="Ingrese su contraseña." pattern="[a-z-A-Z-1-9]{8,300}" title="Ingrese minimo 8 caracteres."required>
        <input id="password2" name="password2" class="inputs" type="password" placeholder="Repita su contraseña" pattern="[a-z-A-Z-1-9]{8,300}" title="Ingrese minimo 8 caracteres."required>
        <div id="password-message" class="alert alert-danger" style="display: none;">
          Las contraseñas no coinciden, intentelo de nuevo.
        </div>
        <input id="submit" class="boton3" type="submit" value="Registrarse" name="register">
        <span>¿Ya tienes una cuenta? Ingresa <a href="{{ route('login') }}" class="boton2">aquí.</a></span>
        </div>
    </section>
</form>

</center>

    

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<script>
  const passwordInput = document.getElementById("password");
  const passwordConfirmInput = document.getElementById("password2");
  const submitButton = document.getElementById("submit");
  const message = document.getElementById("password-message");

  passwordInput.addEventListener("change", validatePasswords);
  passwordConfirmInput.addEventListener("change", validatePasswords);

  function validatePasswords(){
    if(passwordInput.value !== passwordConfirmInput.value){
      message.style.display = "block";
      submitButton.disabled = true;
    }else{
      message.style.display = "none";
      submitButton.disabled = false;
    }
  }
</script>

<!-- Fin del codigo pagina web de tienda de ropa GAES 3 -->