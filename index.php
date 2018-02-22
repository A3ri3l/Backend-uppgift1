<!-- Lägger min array längt upp så jag hittar enkelt hittar den -->

<?php

//Sett massa tutorials som använder bilden i sin array... inte fattat om jag behöver det när 
//jag använder template från bootstrap.
    $skor = array (

        array("Vita skor", "skor1.jpg", "500 kr"),
        array("Snake", "skor2.jpg", "600 kr"),
        array("Rosa skor", "skor3.jpg", "700 kr"),
        array("Birds", "skor4.jpg", "800 kr"),

    );

?>

<!DOCTYPE html>
<html lang="sv">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Skor för Alla</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Skor för Alla</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">Välkommen till vår webshop!</h1>
        <p class="lead">Här hittar du det senaste inom regelrätta fotdon.</p>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="../bilder/skor1.jpg" alt="">
            <div class="card-body">
              <br><br>
              <h4 class="card-title">Vita skor</h4>
              <p class="card-text">Pris: 500</p>
            </div>
            <div class="card-footer">
            

     
                <?php foreach($kor as $sko) { ?>
            
                    <a href="formular.php?produkt=<?=$sko[0]?>&pris=<?=$sko[2]?>" class="btn btn-primary">Köp nu</a>
                     
                <?php } ?>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="../bilder/skor2.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Snake</h4>
              <p class="card-text">Pris: 600</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Köp nu</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="../bilder/skor3.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Rosa skor</h4>
              <p class="card-text">Pris: 700</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Köp nu</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="../bilder/skor4.jpg" alt="">
            <div class="card-body">
                <br><br><br><br>
              <h4 class="card-title">Birds</h4>
              <p class="card-text">Pris: 800</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Köp nu</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Skor för Alla 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
