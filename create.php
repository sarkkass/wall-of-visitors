<?php
  $xml = simplexml_load_file('data/data.xml');
  $nimi = $xml->nimi;
  $tekijä = $xml->tekijä;
  $pvm = $xml->pvm;
  $viestit = $xml->viesti;
?>

<!DOCTYPE html>
<html lang="fi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Tallenna viesti - <?php echo $nimi;?></title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <h3 class="text-muted"> <?php echo $nimi;?> </h3>
        <nav>
          <ul class="nav nav-pills pull-left">
            <li role="presentation"><a href="index.php">Etusivu</a></li>
            <li role="presentation" class="active"><a href="#">Tallenna viesti</a></li>
            <li role="presentation"><a href="myOwn.php">Poista viestejä</a></li>
            <li role="presentation"><a href="about.html">Tietoja</a></li>
          </ul>
        </nav>

      </div>

      <div class="jumbotron">
        <h1>Tallenna viesti</h1>
        <form action="saveMsg.php" method="get">
          <ul class="list-unstyled">
            <li class="list-group-item">
              <label>Nimimerkki</label>
              <input type="text" name="nimimerkki" placeholder="Nimimerkki (pakollinen)" class="form-control">
            </li>

            <li class="list-group-item">
              <label>Viesti</label>
              <input type="text" name="msg" placeholder="Viesti (pakollinen)" class="form-control">
            </li>

            <li class="list-group-item">
              <button type="submit" class="btn btn-success">Tallenna</button>
            </li>
          </ul>

        </form>
      </div>



      <footer class="footer">
        <div align="center">
          <p>&copy; Jester </p>
        </div>
      </footer>

    </div> <!-- /container -->
  </body>

</html>
