<?php
include "header.php";
?>
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

  <?php
  include "footer.php";
  ?>
