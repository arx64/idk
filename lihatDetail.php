<?php
include "./admin/koneksi.php";
$id = number_format($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Covid Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <!-- img src="http://asx.great-site.net/Files/c0a55_08082021001319-pw.jpg" alt="Logo" -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/#home">Home</a></li>
        <li><a href="/#berita">Berita</a></li>
        <li><a href="/#contact-us">Contact</a></li>
        <li><a href="/#tentang">Tentang</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container text-center">    
  <h3 id="berita">Berita</h3><br>
  <div class="row">
    <?php
    if (empty($id)) {
        $sql = "SELECT id, url, judul, kategori, user, konten, tanggal FROM db_index LIMIT 5";
    } else {
$sql = "SELECT * FROM `db_index` WHERE `id` = $id";
    }
$q = mysqli_query($dbc, $sql);
//print_r($row)[0];
//print_r($row = mysqli_fetch_row($q));
while ($row = mysqli_fetch_row($q)) 
{
  /*
  judul
  kategori
  user
  konten
  tanggal
  */
  // <img src="'.$row[0].'" class="img-responsive" style="width:100%" alt="'.$row[1].'">
  //print_r($row[1]);
	echo '<div class="col-sm-4">
      <a href="lihatDetail.php?id='.$row[0].'" target="_blank">
      <img src="'.$row[1].'" class="img-responsive" width="1280" heigth="719" alt="'.$row[1].'">
      </a>
      <small>'.$row[6].'</small>
      <br>
      <small>'.$row[3].'</small>
      <p>upload by '.$row[4].'</p>
      <a href="lihatDetail.php?id='.$row[0].'" target="_blank">
      <h3>'.$row[2].'</h3>
      </a>
      <p>'.$row[5].'</p>
      </a>
      </div>';
}
?>
    </div>