<!doctype html>
<html lang="de">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="custom.css">

  </head>
  <body>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php
        $handle = opendir(dirname(realpath(__FILE__)).'/img/');
        $currentdir = dirname(realpath(__FILE__));
        $count = 0;
        $captions_lines = file("captions.txt");
        echo "<script type='text/javascript'>alert('$currentdir');</script>";
        while($file = readdir($handle)){
          if($file !== '.' && $file !== '..'){
            if($count == 0){
              echo '
              <div class="carousel-item slideimg active">
                <img class="d-block oversize" src="'.$currentdir.'/img/'.$file.'" alt="First slide">
                <div class="carousel-caption w-100 px-5 d-none d-md-block">
                  <h5>'.$captions_lines[$count++].'</h5>
                  <p>'.$captions_lines[$count++].'</p>
                </div>
              </div>
            ';
            }
            else{
              echo '
              <div class="carousel-item slideimg">
                <img class="d-block oversize" src="'.$currentdir.'/img/'.$file.'" alt="First slide">
                <div class="carousel-caption w-100 px-5 d-none d-md-block">
                  <h5>'.$captions_lines[$count++].'</h5>
                  <p>'.$captions_lines[$count++].'</p>
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

    <script>
    $(document).ready(function() {
      $(".slideimg").click(function() {
        $(".carousel-caption").toggleClass('d-md-block');
      });
    });
    </script>
  </body>
</html>
