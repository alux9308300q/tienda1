<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/shop-homepage.css" rel="stylesheet">

  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type='text/css'>
  /* CSS used here will be applied after bootstrap.css */
  .menu-ico-collapse {
    margin-left: 4px;
  }

  .list-group-submenu .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }

  .list-group-submenu .list-group-item:last-child {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Start Bootstrap</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a href="#">About</a>
          </li>
          <li>
            <a href="#">Services</a>
          </li>
          <li>
            <a href="#">Contact</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-md-3">
        <p class="lead">Shop Name</p>
        <div class="list-group">
          <a class="list-group-item text-center active" data-remote="true" href="#" id="categoria_0">
            Todas las Categorías
          </a>
          <a class="list-group-item" data-remote="true" href="#" id="categoria_14" style="padding-left: 25px;">
            <span class="fa fa-bomb fa-lg fa-fw"></span>
            <span style="margin-left: 25px;">Adulto</span>
          </a>
          <a class="list-group-item" data-remote="true" href="#" id="categoria_1" style="padding-left: 25px;">
            <span class="fa fa-cutlery fa-lg fa-fw"></span>
            <span style="margin-left: 25px;">Alimentação</span>
          </a>
          <a class="list-group-item" data-remote="true" href="#" id="categoria_2" style="padding-left: 25px;">
            <span class="fa fa-automobile fa-lg fa-fw"></span>
            <span style="margin-left: 25px;">Automotivo</span>
          </a>
          <a class="list-group-item" data-remote="true" href="#" id="categoria_3" style="padding-left: 25px;">
            <span class="fa fa-female fa-lg fa-fw"></span>
            <span style="margin-left: 25px;">Beleza</span>
          </a>

          <a class="list-group-item" data-remote="true" href="#sub_categoria_4" id="categoria_4" data-toggle="collapse" data-parent="#sub_categoria_4" style="padding-left: 25px;">
            <span class="fa fa-shopping-cart fa-lg fa-fw"></span>
            <span style="margin-left: 25px;">Compras</span>
            <span class="menu-ico-collapse"><i class="fa fa-chevron-down"></i></span>
          </a>

          <div class="collapse list-group-submenu" id="sub_categoria_4">
            <a href="#" class="list-group-item sub-item" data-parent="#sub_categoria_4" style="padding-left: 78px;">SubSubPos1</a>
            <a href="#" class="list-group-item sub-item" data-parent="#sub_categoria_4" style="padding-left: 78px;">SubSubPos2</a>
            <a href="#" class="list-group-item sub-item" data-parent="#sub_categoria_4" style="padding-left: 78px;">SubSubPos3</a>
            <a href="#" class="list-group-item sub-item" data-parent="#sub_categoria_4" style="padding-left: 78px;">SubSubPos4</a>
          </div>

          <a class="list-group-item" data-remote="true" href="#" id="categoria_6" style="padding-left: 25px;">
            <span class="fa fa-graduation-cap fa-lg fa-fw"></span>
            <span style="margin-left: 25px;">Educação</span>
          </a>
          <a class="list-group-item" data-remote="true" href="#" id="categoria_7" style="padding-left: 25px;">
            <span class="fa fa-gamepad fa-lg  fa-fw"></span>
            <span style="margin-left: 25px;">Entretenimeto</span>
          </a>
          <a class="list-group-item" data-remote="true" href="#" id="categoria_8" style="padding-left: 25px;">
            <span class="fa fa-futbol-o fa-lg fa-fw"></span>
            <span style="margin-left: 25px;">Lazer</span>
          </a>
          <a class="list-group-item" data-remote="true" href="#" id="categoria_13" style="padding-left: 25px;">
            <span class="fa fa-beer fa-lg fa-fw"></span>
            <span style="margin-left: 25px;">Night</span>
          </a>
          <a class="list-group-item" data-remote="true" href="#" id="categoria_9" style="padding-left: 25px;">
            <span class="fa fa-heart fa-lg fa-fw"></span>
            <span style="margin-left: 25px;">Saúde</span>
          </a>
          <a class="list-group-item" data-remote="true" href="#" id="categoria_10" style="padding-left: 25px;">
            <span class="fa fa-lock fa-lg fa-fw"></span>
            <span style="margin-left: 25px;">Seguros</span>
          </a>
          <a class="list-group-item" data-remote="true" href="#" id="categoria_11" style="padding-left: 25px;">
            <span class="fa fa-wrench fa-lg fa-fw"></span>
            <span style="margin-left: 25px;">Serviços</span>
          </a>
          <a class="list-group-item" data-remote="true" href="#" id="categoria_12" style="padding-left: 25px;">
            <span class="fa fa-suitcase fa-lg fa-fw"></span>
            <span style="margin-left: 25px;">Viagem e Turismo</span>
          </a>
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

                $statement = $connect->prepare($query);

                $statement->execute();

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
          <h2>DESTACADO</h2>
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
                      <h4 class="pull-right"><?php echo $row["precio"];?></h4>
                      <h4><a href="#"><?php echo $row["nombre"];?></a>
                      </h4>
                      <p><?php echo $row["descripcion"];?></p>
                    </div>
                  </div>
                </div>
                <?php
                }
              }
            }
        ?>
      </body>
      </html>
