<?php require 'globals.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>

<div class="container">
  <h1>Registro de Amigos</h1>
  <?php
    if(isset($_GET['exito'])){
      ?>
      <p style="color:green">
        Amigo agregado correctamente :D
      </p>
      <?php
    }elseif (isset($_GET['error'])) {
      ?>
      <p style="color:red">
        Ha ocurrido un error al ingresar el amigo
      </p>
      <?php
    }
  ?>
  <div class="row">
    <form class="col s12" action="registrarAmigos.php" method="POST">

      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Placeholder" name="nombre" id="name" type="text" required>
          <label for="name">Nombre</label>
        </div>
        <div class="input-field col s12">
          <input placeholder="Placeholder" name="direccion" id="direccion" type="text"  required>
          <label for="direccion">Dirección</label>
        </div>
        <div class="input-field col s12">
          <input placeholder="Placeholder" name="telefono" id="telefono" type="tel" required>
          <label for="telefono">Teléfono</label>
        </div>
        <div class="input-field col s12">
          <input id="email" type="email" name="email" required>
          <label for="email">Email</label>
        </div>
      </div>
      <button type="submit" class="waves-effect waves-light btn">Agregar</button>

    </form>
  </div>

</div>


<?php require 'final.php'; ?>
