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
        <h1 class="display-3">Fyll i dina uppgifter och bekräfta din beställning!</h1>
        <p class="card-text">Du håller på att köpa: 
           <!-- Hämta data via URLen med GET. -->
           <?php
                        $_GET['produkt'];
                        $_GET['pris'];
                        echo "<pre>";
                        print_r($_GET);
                        echo "</pre>";
            ?>


        </p>
      </header>

      <!-- Page Features -->
      <div class="row text-left">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            
            <div class="card-body">
              <br><br>
              <h4 class="card-title">xxx</h4>
              <p class="card-text">xxx</p>

                
                <!-- skapa formulär. -->
                
                    <form action="mail.php?namn?=<?=$sko[0]?>&mail=<?=$sko[2]?>" method="post">

                        Fullständingt namn<br>
                        <input name="namn" type "text" required>
                        <br>
                        Adress<br>
                        <input type="text" required>
                        <br>
                        Epost<br>
                        <input namn="epost" type="email">
                        Meddelande<br>
                        <input namn="meddelande" type="text">



                


              </p>
            </div>
            <div class="card-footer">
              <a href="mail.php?produkt?=<?=$sko[0]?>&mail=<?=$sko[2]?>" class="btn btn-primary">Bekräfta köp!</a>
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

