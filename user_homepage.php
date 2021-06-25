<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-------------------------------------------Bootstrap link----------------------------------------------------------------------------------->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!------------------------------------------Bootstrap scripts-------------------------------------------------------------------------------->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"></script>

  <!------------------------------------------External Stylesheet-------------------------------------------------------------------------------->
  <link rel="stylesheet" href="public/css/style.css">
  <!------------------------------------------Font-awsome link for icons--------------------------------------------------------------------------->
  <script src="https://kit.fontawesome.com/60f0166554.js" crossorigin="anonymous"></script>
  <title>E-Library</title>
</head>

<body>

<!---------------------------------Navbar---------------------------->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <h1 class="logo">E-Library</h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ms-auto">
          <li class="nav-item">
              <h5>
                <a class="nav-link" href="about.html">Profile</a>
                <a href="">View Profile</a>
                <a href="">Edit Profile</a>
                <a href="">Change Password</a>
              </h5>
          </li>
          <li class="nav-item">
              <h5>
                <a class="nav-link" href="contact.html">Logout</a>
              </h5>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-------------------------------------------------Student Homepage Front carousel---------------------------------------------------------------------->
  <!-- <div id="home-carousel" class="carousel slide" data-ride="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Images/user-homepage-image1.jpg" class="d-block w-100" height="600" alt="image">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="home-carousel-heading"><em>There is no friend as loyal as Books.</em></h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Images/starting-page-image.webp" class="d-block w-100" height="600" alt="image">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="home-carousel-heading"><em>A room without boooks is like a body without a soul.</em></h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Images/starting-page-image.webp" class="d-block w-100" height="600" alt="image">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="home-carousel-heading"><em>A book is a gift you can open again ad again.</em></h5>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div> -->



<h1>Welcome <?php echo $_SESSION['username']; ?></h1>
  <!----------------------------------Footer------------------->
  <footer class="footer">
    <span>Copyrights @Team</span>
  </footer>


</body>

</html>