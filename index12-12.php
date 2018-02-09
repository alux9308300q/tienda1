<?php
include "header.php";
?>

<!-- Page Content -->
<div class="container">

  <div class="row">

    <div class="col-md-3">
      <p class="lead">Old Records</p>
      <div class="list-group">
        <a class="list-group-item text-center active" data-remote="true" href="#" id="categoria_0">
          Todas las Categorías
        </a>

        <?php

        $connect = new PDO('mysql:host=localhost;dbname=mi_primera_web', 'root', 'sa');
        $query = "SET NAMES 'utf8'";

        $query = " SELECT * FROM categorias WHERE id_padre IS NULL";

        $statement = $connect->prepare($query);

        $statement->execute();

        $count = $statement->rowCount();

        $token=0;

        if($count > 0){
          $result = $statement->fetchAll();
          foreach($result as $row){
            $showid = $row["id"];

            $connect2 = new PDO('mysql:host=localhost;dbname=mi_primera_web', 'root', 'sa');

            $query2 = "SET NAMES 'utf8'";

            $query2 = " SELECT * FROM categorias WHERE id_padre=$showid";

            $statement2 = $connect2->prepare($query2);

            $statement2->execute();

            $count2 = $statement2->rowCount();

            if($count2 > 0){
              $result2 = $statement2->fetchAll();
              $token=1;
            }
            if ($token==0){
              ?>
              <a class="list-group-item" data-remote="true" href="#" id="<?php echo $row["id"];?>" style="padding-left: 25px;">
                <span class="<?php echo $row["icon"];?>"></span>
                <span style="margin-left: 25px;"><?php echo $row["nombre"];?></span>
              </a>
              <?php
            }
            else {
              ?>
              <a class="list-group-item" data-remote="true" href="#sub_<?php echo $row["id"];?>" id="<?php echo $row["id"];?>" data-toggle="collapse" data-parent="#" style="padding-left: 25px;">
                <span class="<?php echo $row["icon"];?>"></span>
                <span style="margin-left: 25px;"><?php echo $row["nombre"];?></span>
                <span class="menu-ico-collapse"><i class="fa fa-chevron-down"></i></span>
              </a>
              <div class="collapse list-group-submenu" id="sub_<?php echo $row["id"];?>">
                <?php
                foreach($result2 as $row2){
                  ?>
                  <a href="#" class="list-group-item sub-item" data-parent="<?php echo $row2["id_padre"];?>" style="padding-left: 78px;"><?php echo $row2["nombre"];?></a>
                  <?php
                }
                echo "</div>";
                $token=0;
              }
            }
          }
          ?>


        </div>
      </div>

      <div class="col-md-9">

        <div class="row carousel-holder">

          <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">

                <?php

                $connect = new PDO('mysql:host=localhost;dbname=mi_primera_web', 'root', 'sa');
                $query = "SET NAMES 'utf8'";

                $query = " SELECT * FROM productos WHERE carrusel IS NOT NULL LIMIT 3";

                $statement = $connect->prepare($query);

                $statement->execute();

                $count = $statement->rowCount();

                $comprobacion = 1;

                if($count > 0){
                  $result = $statement->fetchAll();
                  foreach($result as $row){
                    if($comprobacion==1){
                      echo "<div class='item active'>";
                      echo "<a href='aaa'><img class='slide-image' src='./basededatos/img/" . $row["carrusel"] . "'></a>";
                      echo "</div>";
                      $comprobacion=0;
                    }
                    else {
                      echo "<div class='item'>";
                      echo "<a href='aaa'><img class='slide-image' src='./basededatos/img/" . $row["carrusel"] . "'></a>";
                      echo "</div>";
                    }
                  }
                }

                ?>
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
          </div>

        </div>

        <div class="row">
          <p class="list-group-item text-center active">
            DESTACADOS
          </p></br>
          <?php
          $query = " SELECT * FROM productos WHERE destacado=1 LIMIT 3";

          $statement = $connect->prepare($query);

          $statement->execute();

          $count = $statement->rowCount();

          $comprobacion = 1;

          if($count > 0){
            $result = $statement->fetchAll();
            foreach($result as $row){
              if($comprobacion==1){
                ?>
                <div class="col-sm-4 col-lg-4 col-md-4">
                  <div class="thumbnail">
                    <div>
                      <img src="./basededatos/img/256_<?php echo $row["foto"];?>" alt="">
                    </div>
                    <div class="caption">
                      <h4><a href="#"><?php echo $row["nombre"];?></a>
                      </h4>
                      <p><?php echo $row["descripcion"];?></p>
                    </div>
                    <div class="ratings">
                      <a class="pull-right" href="#">Comprar</a>
                      <p>
                        <span>
                          <?php
                          if(empty($row["descuento"])){
                            echo $row["precio"]."€";
                          }
                          else {
                            $preciodesc=$row["precio"]*$row["descuento"]/100;
                            $preciofinal=$row["precio"]-$preciodesc;
                            echo "<strike>".$row["precio"]."€</strike>-->".round($preciofinal, 2);
                          }
                          ?>
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
                <?php
              }
            }
          }
          ?>
        </div>

        <div class="row">
          <p class="list-group-item text-center active">
            NOVEDADES
          </p></br>
          <?php
          $query = " SELECT * FROM productos ORDER BY fecha DESC  LIMIT 3";

          $statement = $connect->prepare($query);

          $statement->execute();

          $count = $statement->rowCount();

          $comprobacion = 1;

          if($count > 0){
            $result = $statement->fetchAll();
            foreach($result as $row){
              if($comprobacion==1){
                ?>
                <div class="col-sm-4 col-lg-4 col-md-4">
                  <div class="thumbnail">
                    <div>
                      <img src="./basededatos/img/256_<?php echo $row["foto"];?>" alt="">
                    </div>
                    <div class="caption">
                      <h4><a href="#"><?php echo $row["nombre"];?></a>
                      </h4>
                      <p><?php echo $row["descripcion"];?></p>
                    </div>
                    <div class="ratings">
                      <a class="pull-right" href="#">Comprar</a>
                      <p>
                        <span>
                          <?php
                          if(empty($row["descuento"])){
                            echo $row["precio"]."€";
                          }
                          else {
                            $preciodesc=$row["precio"]*$row["descuento"]/100;
                            $preciofinal=$row["precio"]-$preciodesc;
                            echo "<strike>".$row["precio"]."€</strike>-->".round($preciofinal, 2);
                          }
                          ?>
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
                <?php
              }
            }
          }
          ?>
        </div>

      </div>
    </div>
  </div>
  <?php
  include "footer.php";
  ?>
