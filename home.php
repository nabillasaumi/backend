<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sumatera Barat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav ml-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.html">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="profil.html">Profil</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/gambar2.jpg" alt="RG" width="1280" height="500">
      <div class="carousel-caption">
        <h3>Rumah Gadang</h3>
        <p>Rumah Tradisional Sumatera Barat</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/gambar3.jpg" alt="JG" width="1280" height="500">
      <div class="carousel-caption">
        <h3>Jam Gadang</h3>
        <p>Tempat Hiburan</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/gambar4.jpg" alt="island" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Masjid</h3>
        <p>Tempat Ibadah</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-4">
  <div class="py-3">
    <h2 class="text-center">Tarian Sumatera Barat</h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="image/gambar5.jpg" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-3 col-md-3 col-10">
      <h2 class="display-4">Tari Piring</h2>
      <p class="py-3">Tarian Tradisional Sumatera Barat</p>
      <a href="about.php" class="btn btn-success">baca selengkapnya</a>
    </div>
  </div>
</section>

<section class="my-4">
<div class="py-3">
  <h2 class="text-center">Masakan Sumatera Barat</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
            <img class="card-img-top" src="image/gambar1.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Rendang</h4>
              <p class="card-text">Masakan</p>
               <a href="#" class="btn btn-primary">See Profile</a>
              </div>
          </div>
        </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
            <img class="card-img-top" src="image/gambar6.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Dendeng</h4>
              <p class="card-text">Masakan</p>
               <a href="#" class="btn btn-primary">See Profile</a>
              </div>
          </div>
        </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
            <img class="card-img-top" src="image/gambar7.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Kalio</h4>
              <p class="card-text">Masakan</p>
               <a href="#" class="btn btn-primary">See Profile</a>
              </div>
          </div>
        </div>


      </div>
    </div>
</section>

<section class="my-4">
  <div class="py-3">
    <h2 class="text-center">Galeri</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="image/gambar8.jpg" class="img-fluid pb-5">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="image/gambar9.jpg" class="img-fluid pb-5">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="image/gambar11.jpg" class="img-fluid pb-5">
      </div>
      
      </div>

      </div>
    </div>
    
  </div>
</section>


<footer>
  <p class="p-2 bg-success text-white text-center">@copyright2021NabillaSaumiPutri</p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>s