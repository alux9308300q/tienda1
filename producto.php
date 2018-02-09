<?php
include "header.php";
?>
<?php
$connect = new PDO('mysql:host=localhost;dbname=mi_primera_web', 'root', 'sa');
$query = "SET NAMES 'utf8'";

$query = " SELECT * FROM productos ORDER BY fecha DESC  LIMIT 1";

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
          <div class="col-sm-20 col-lg-20 col-md-20">
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
      </div>
      <?php
    }
  }
}
?>
<?php
include "footer.php";
?>
