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

    <link rel="stylesheet" href="custom.css">

    <title>Urlaube</title>
  </head>
  <body>
    <div class="container p-5">

      <?php
      $directories = glob("." . '/*', GLOB_ONLYDIR);
      foreach ($directories as $directory){
        $info_lines = file($directory."/info.txt");
        $first = true;
        $text = "";
        foreach ($info_lines as $line){
          if(!$first){
            $text .= "<p>".$line."</p>";
          }
          else {
            $first = false;
          }
        }
        echo '
          <div class="row clickable-row m-2" data-href="'.$directory.'/index.php" style="cursor: pointer">
            <div class="col-4">
              <img class="img-thumbnail" src="'.$directory.'/thumb.jpg" alt="Card image cap">
            </div>
            <div class="col-8 col-right">
              <h3>'.$info_lines[0].'</h3>
              '.$text.'
            </div>
          </div>
        ';
      }
      ?>

    </div>

    <script>
      $(".clickable-row").click(function() {
        window.location = $(this).data("href");
      });
    </script>
  </body>
</html>
