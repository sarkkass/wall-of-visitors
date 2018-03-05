<?php
  $xml = simplexml_load_file('data/data.xml');
  $nimi = $xml->nimi;
  $tekijä = $xml->tekijä;
  $pvm = $xml->pvm;
  $viesti = $xml->viesti;
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

    <title>Viestiseinä</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <h3 class="text-muted"> <?php echo $nimi;?> </h3>
        <nav>
          <ul class="nav nav-pills pull-left">
            <li role="presentation" class="active"><a href="#">Etusivu</a></li>
            <li role="presentation"><a href="create.php">Tallenna viesti</a></li>
            <li role="presentation"><a href="myOwn.php">Poista viestejä</a></li>
            <li role="presentation"><a href="about.html">Tietoja</a></li>
          </ul>
        </nav>

      </div>

      <div class="jumbotron">
        <h1>Viestiseinä</h1>
          <div class="panel-group">
            <div class="panel panel-default">

                <?php $viestinumero = 0; ?>
                <?php foreach ($xml->viesti as $tehtävä): ?>
                  <div class="row">
                    <div class="panel-heading">
                      <div class="col-md-12">
                        <h4 class="panel-title">
                          <?php echo '<a data-toggle="collapse" href="#'.$viestinumero.'"><b>' .$tehtävä->nimimerkki.'</b></a>'; ?>
                          <br>
                        </h4>
                      </div>
                    </div>
                    <?php
                      echo  '<div id="'.$viestinumero.'" class="panel-collapse collapse">';

                      $msg_id = 0;
                      foreach ($tehtävä->msg as $msg) {
                        echo '<div class="col-md-12">';
                        echo '<div class="panel-body">'.$msg.'</a></div>';
                        echo '</div>';

                      }
                      $viestinumero++;


                      echo '</div>';
                     ?>
                  </div>
                <?php endforeach; ?>


            </div>
          </div>
        </div> <!--PANEL GROUP -->
      </div> <!-- JUMBOTRON -->



      <footer class="footer">
        <div align="center">
          <p>&copy; Jester </p>
        </div>
      </footer>

    </div> <!-- /container -->
  </body>

</html>
