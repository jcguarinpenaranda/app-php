<?php require 'globals.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>

  <div class="container">
    <h1>Amigos</h1>

    <?php
      $amigos = $bd->query('select * from amigos');

      for($i=0; $i<count($amigos); $i++){
        //nombre, direccion, email, telefono
        ?>

        <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="https://avatars.githubusercontent.com/u/7200821?v=3" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
                <h3><?php echo $amigos[$i]['nombre'];?></h3>
                <p>
                  <?php echo $amigos[$i]['email'];?>
                  <br> <?php echo $amigos[$i]['direccion'];?>
                  <br><?php echo $amigos[$i]['telefono'];?>
                </p>
              </span>
            </div>
          </div>
        </div>
      </div>

        <?php
      }
    ?>

  </div>

  <?php require 'final.php'; ?>
