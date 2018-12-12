<!doctype html>
<html lang="de">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

    <script type="module" src="custom.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="custom.css">

    <title>Südtirol 2017</title>
  </head>
  <body>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php
        $handle = opendir(dirname(realpath(__FILE__)).'/img/');
        $count = 0;
        while($file = readdir($handle)){
          $count++;
          if($file !== '.' && $file !== '..'){
            if($count == 1){
              echo '
              <div class="carousel-item slideimg active">
                <img class="d-block oversize" src="img/'.$file.'" alt="First slide">
                <div class="carousel-caption w-100 px-5 d-none d-md-block">
                  <h5>Bild 1</h5>
                  <p>Dieses Bild ist entstanden, als ich mal langweilig war und deshla habe ich diesen dummen Text geschrieben um zu probiere was passsier twenn hier ein längere Text steht. Mal sehen. Ist adas scho nlang genug? ICh weiß es nicht.. Ich bin eine Maus.</p>
                </div>
              </div>
            ';
            }
            else{
              echo '
              <div class="carousel-item slideimg">
                <img class="d-block oversize" src="img/'.$file.'" alt="First slide">
                <div class="carousel-caption w-100 px-5 d-none d-md-block">
                  <h5>Bild 1</h5>
                  <p>Dieses Bild ist entstanden, als ich mal langweilig war und deshla habe ich diesen dummen Text geschrieben um zu probiere was passsier twenn hier ein längere Text steht. Mal sehen. Ist adas scho nlang genug? ICh weiß es nicht.. Ich bin eine Maus.</p>
                </div>
              </div>
            ';
            }
          }
        }
        ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </body>
</html>
