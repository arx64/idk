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
        <li class="active"><a href="#home">Home</a></li>
        <li><a href="#berita">Berita</a></li>
        <li><a href="#contact-us">Contact</a></li>
        <li><a href="#tentang">Tentang</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://covid19.go.id/storage/app/media//slider/faskesvaksin.jpeg" width="300px" height="250px" alt="">
        <div class="carousel-caption">
          <h3 style="background-color:black;">Faskes Vaksin</h3>
          <p style="background-color:black;">Temukan Lokasi Vaksinasi Covid-19 di Fasilitas Terdekat dari Tempat Kamu</p>
        </div>      
      </div>

      <div class="item">
        <img src="https://covid19.go.id/storage/app/media//slider/cropped-images/slider-oct-0-0-0-0-1628845497.webp" alt="Image">
        <div class="carousel-caption">
          <h3 style="background-color:black;">#PakaiMaskermu</h3>
          <p style="background-color:black;">#PakaiMaskermu Agar Melindungi Kita Semua</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3 id="berita">Berita</h3><br>
  <div class="row">
    <?php
include "./admin/koneksi.php";
$sql = "SELECT url, head, parag FROM db_index LIMIT 5";
//$sql = "SELECT * FROM `db_index` LIMIT 3";
$q = mysqli_query($dbc, $sql);
//print_r($row)[0];
//print_r($row = mysqli_fetch_row($q));
while ($row = mysqli_fetch_row($q)) 
{
	echo '<div class="col-sm-4">
      <img src="'.$row[0].'" class="img-responsive" style="width:100%" alt="'.$row[1].'">
      <h3>'.$row[1].'</h3>
      <p>'.$row[2].'</p>
    </div>';
}
?>
    </div>
  </div>
</div>
</div>
</div>
<div class="container text-center">
  <h3 id="tentang">Tentang Kami</h3><br>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
  <br>
  <br>
  <br>
  <br>
  <center>
  <h3 id="contact-us">Contact Us</h3>
  <a href="https://facebook.com/Arifin.ilham1231" target="_blank"><img src="https://cdn3.iconfinder.com/data/icons/capsocial-round/500/facebook-512.png" heigth="30px" width="30px" alt="FB"></a>
    <a href="https://wa.me/6285265681313" target="_blank"><img src="https://image.flaticon.com/icons/png/512/124/124034.png" heigth="30px" width="30px" alt="WA"></a>
        <a href="https://instagram.com/Arifin.ilham1231" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/1024px-Instagram_icon.png" heigth="30px" width="30px" alt="IG"></a>
            <a href="https://twitter.com/Muhamma76603632" target="_blank"><img src="https://image.flaticon.com/icons/png/512/124/124021.png" heigth="30px" width="30px" alt="Twitter"></a>
            <a href="mailto:ilham12nokia@gmail.com" target="_blank"><img src="https://www.pngfind.com/pngs/m/157-1571692_black-email-icon-png-mail-icon-png-black.png" heigth="30px" width="30px" alt="E-mail"></a>
</div></center><br>

<footer class="container-fluid text-center">
  <p>Copyright &copy; <?= date("Y"); ?> - All Right Reserved.</p>
</footer>

</body>
</html>