<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Validar en php</title>
    <!-- para bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <!-- para estilos -->
     <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <?php
  /* $administrador="editor"; */
  if ($_GET['usuario']=="editor"){
   
    ?>
 <!--abro html  --> 
 <div class="fondocard">

   <div class="card" style="width: 18rem;">
   <img src="./img/editor.jpeg" class="card-img-top" alt="editor">
    <div class="card-body">
    <p class="card-text text-center">Bienvenido Editor </p>
    </div>
   </div>
 </div>
<?php
  }
    else if($_GET['usuario']=='administrador'){
  ?>
   <!-- abro html -->
<div class="fondocard">
 <div class="card" style="width: 18rem;">
  <img src="./img/administrador.png" class="card-img-top" alt="administrador">
  <div class="card-body">
    <p class="card-text text-center">Bienvenido Administrador </p>
  </div>
 </div>
</div>
<?php
  }
  else if ($_GET['usuario']=='usuario'){
    ?>
    <!-- abro html -->
<div class="fondocard">
 <div class="card" style="width: 18rem;">
  <img src="./img/usuario.png" class="card-img-top" alt="usuario">
  <div class="card-body">
    <p class="card-text text-center" bold>Bienvenido Usuario</p>
  </div>
 </div>
</div>
<?php
  }else{
  ?>
  <!-- abro html -->
<div class="fondocard">
<div class="card" style="width: 18rem;">
<img src="./img/error.png" class="card-img-top" alt="usuario">
<div class="card-body">
  <p class="card-text text-center">Usuario Incorrecto </p>
</div>
</div>
</div>
<?php
  }
  ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>