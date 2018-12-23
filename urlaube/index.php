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
    <link rel="stylesheet" type="text/css" href="cssmap-continents/cssmap-continents.css" media="screen" />

    <link rel="stylesheet" href="custom.css">

    <title>Urlaube</title>
  </head>
  <body>
    <div class="container">
      <!-- CSSMap - Continents -->
      <div id="map-continents">
        <ul class="continents">
          <li class="c1"><a href="nothing.html">Afrika</a></li>
          <li class="c2"><a href="nothing.html">Asien</a></li>
          <li class="c3"><a href="nothing.html">Australien</a></li>
          <li class="c4"><a href="http://google.de">Europa</a></li>
          <li class="c5"><a href="nothing.html">Nordamerika</a></li>
          <li class="c6"><a href="nothing.html">Südamerika</a></li>
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
  "tooltips": "floating-top-center",
  "responsive": "auto",
  "tapOnce": true,
  "mobileSupport": true
});
// END OF THE CSSMap;

});
</script>
  </body>
</html>
