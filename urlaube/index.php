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

    <!-- CSSMap STYLESHEET - CONTINENTS -->
    <link rel="stylesheet" type="text/css" href="cssmap/cssmap-continents/cssmap-continents.css" media="screen" />

    <link rel="stylesheet" href="custom.css">

    <title>Urlaube</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Urlaube</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="europa.php">Europa</a>
        </li>
      </ul>
    </div>
  </nav>

    <div class="container p-3">
      <!-- CSSMap - Continents -->
      <div id="map-continents">
        <ul class="continents">
          <li class="c1"><a href="#">Afrika</a></li>
          <li class="c2"><a href="#">Asien</a></li>
          <li class="c3"><a href="#">Australien</a></li>
          <li class="c4"><a href="europa.php">Europa</a></li>
          <li class="c5"><a href="#">Nordamerika</a></li>
          <li class="c6"><a href="#">Südamerika</a></li>
        </ul>
      </div>
      <!-- END OF THE CSSMap - Continents -->
    </div>
    <!-- CSSMap SCRIPT -->
    <script type="text/javascript" src="https://cssmapsplugin.com/5/jquery.cssmap.min.js"></script>

    <script type="text/javascript">
$(document).ready(function(){

// CSSMap;
$("#map-continents").CSSMap({
  "size": 1280,
  "tooltips": false,
  "responsive": "auto",
  "tapOnce": true,
  "mobileSupport": true,
  "loadingText": ""
});
// END OF THE CSSMap;

});
</script>
  </body>
</html>
