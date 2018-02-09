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
