<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="bootstrap.min.css" >
  <link rel="stylesheet" href="font-awesome.min.css">
  <link rel="stylesheet" href="./dist/admin4b.min.css">
  <link rel="stylesheet" href="./dist/admin4b-highlight.min.css">
  <title>Grupo 7 - Crawling</title>
</head>
<body>

<div class="app">
  <div class="app-body">
    <div class="app-sidebar sidebar-dark sidebar-slide-left">
  <div class="text-right">
    <button type="button" class="btn btn-sidebar" data-dismiss="sidebar">
      <span class="x"></span>
    </button>
  </div>
  <div class="sidebar-header">
    <img src="img/logo.png" class="user-photo">
    <p class="username">Diego Herrera <br> Jairo Solarte <br> Jorge Gonzales</p>
  </div>
  <div id="sidebar-nav" class="sidebar-nav" data-children=".sidebar-nav-group">
    <a href="./index.php" class="sidebar-nav-link">
      <i class="fa fa-play"></i> Inicio
    </a>
    <a href="./programas.php" class="sidebar-nav-link">
      <i class="fa fa-building-o"></i> Programas
    </a>
    <a href="./departamentos.php" class="sidebar-nav-link">
      <i class="fa fa-university"></i> Departamentos
    </a>
    <a href="./profesores.php" class="sidebar-nav-link">
      <i class="fa fa-users"></i> Profesores
    </a>
    <a href="./noticias.php" class="sidebar-nav-link">
      <i class="fa fa-newspaper-o"></i> Noticias
    </a>
    <a href="./noticias_rss.php" class="sidebar-nav-link">
      <i class="fa fa-rss"></i> Noticias RSS
    </a>
    
  </div>
  <div class="sidebar-footer">
    <a href="https://github.com/jairosolarte/scrapy" data-toggle="tooltip" title="GitHub">
      <i class="fa fa-github"></i>
    </a>
    <!--a href="./pages/sample-pages/settings.html" data-toggle="tooltip" title="Settings">
      <i class="fa fa-cog"></i>
    </a>
    <a href="./pages/sample-pages/signin.html" data-toggle="tooltip" title="Logout">
      <i class="fa fa-power-off"></i>
    </a-->
  </div>
</div>

    <div class="app-content">
      <nav class="navbar navbar-expand navbar-light bg-white">
  <button type="button" class="btn btn-sidebar" data-toggle="sidebar">
    <i class="fa fa-bars"></i>
  </button>
  <div class="navbar-brand">
    Uniandes - Análisis de Información sobre Big Data - Grupo 7 - Crawling - Scrapy Python 
  </div>
  
  <!--<ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="badge badge-pill badge-primary">3</span>
        <i class="fa fa-bell-o"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <small class="text-secondary">Lorem ipsum (today)</small><br>
          <div>Lorem ipsum dolor sit amet...</div>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <small class="text-secondary">Lorem ipsum (yesterday)</small><br>
          <div>Lorem ipsum dolor sit amet...</div>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <small class="text-secondary">Lorem ipsum (12/25/2017)</small><br>
          <div>Lorem ipsum dolor sit amet...</div>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item text-primary">
          See all notifications
        </a>
      </div>
    </li>
  </ul>-->

</nav>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Descubrimiento de información y manejo básico de fuentes semiestructuradas y no estructuradas</li>
  </ol>
</nav>
<div class="container-fluid">
<h2>Programas</h2>
<div class="table-responsive">
<table class="table">
<thead>
    <tr>
      <th style="width:10%">Nombre</th>
      <th>Contenido</th>
      <th>Fecha</th>
      <th>Tipo</th>
    </tr>
  </thead>
<?php


    $líneas = file('json/noticias.json');
    $array = []; 
    
    foreach ($líneas as $num_línea => $línea) {
        $array[] = json_decode( $línea,true);
    }
    $texto = '';
    foreach($array as $ker => $item){
      $img  = null; 
      if(strlen($item['image'])> 0 ){
        $img = $item['image']; 
        if(strrpos($item['image'], $item['base'])<0){
          $img = $item['base'].$item['image']; 
        }
      }

      if(!is_null($img)){
        $img = '<img src="'.$img.'" alt="Smiley face" height="250" width="250">';
      }
      echo "<tr>".
      "<td>".$item['title']."<br>".$img."</td>".
      "<td>".$item['description']."</td>".
      "<td>".$item['fecha']."<br>".$item['url']."</td>".
      "<td>".$item['tipo']."</td>".
      "</tr>";
    }
    echo $texto; 
    //var_dump($array); 
    /*$json = file_get_contents('json/noticias.json');
    //echo($json); 
    $json_data = json_decode($json, true);
    var_dump($json_data);*/
?>
</table>
</div>
</div>

    </div>
  </div>
</div>

  <script src="jquery-3.2.1.slim.min.js"></script>
  <script src="popper.min.js" ></script>
  <script src="bootstrap.min.js" ></script>
  <script src="highlight.min.js"></script>
  <script src="./dist/admin4b.min.js"></script>
  <script src="./assets/js/admin4b.docs.js"></script>
</body>
</html>
