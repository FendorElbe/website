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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Urlaube</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="europa.php">Europa</a>
        </li>
      </ul>
    </div>
  </nav>

    <div class="container p-3">
      <div id="map-europe">
 <ul class="europe">
  <li class="eu1"><a href="#">Albania</a></li>
  <li class="eu2"><a href="#">Andorra</a></li>
  <li class="eu3"><a href="#">Austria</a></li>
  <li class="eu4"><a href="#">Belarus</a></li>
  <li class="eu5"><a href="#">Belgium</a></li>
  <li class="eu6"><a href="#">Bosnia and Herzegovina</a></li>
  <li class="eu7"><a href="#">Bulgaria</a></li>
  <li class="eu8"><a href="#">Croatia</a></li>
  <li class="eu9"><a href="#">Cyprus</a></li>
  <li class="eu10"><a href="#">Czech Republic</a></li>
  <li class="eu11"><a href="#">Denmark</a></li>
  <li class="eu12"><a href="#">Estonia</a></li>
  <li class="eu13"><a href="#">France</a></li>
  <li class="eu14"><a href="#">Finland</a></li>
  <li class="eu15"><a href="#">Georgia</a></li>
  <li class="eu16"><a href="#">Germany</a></li>
  <li class="eu17"><a href="#">Greece</a></li>
  <li class="eu18"><a href="#">Hungary</a></li>
  <li class="eu19"><a href="#">Iceland</a></li>
  <li class="eu20"><a href="#">Ireland</a></li>
  <li class="eu21"><a href="#">San Marino</a></li>
  <li class="eu22"><a href="#">Italy</a></li>
  <li class="eu23"><a href="#">Kosovo</a></li>
  <li class="eu24"><a href="#">Latvia</a></li>
  <li class="eu25"><a href="#">Liechtenstein</a></li>
  <li class="eu26"><a href="#">Lithuania</a></li>
  <li class="eu27"><a href="#">Luxembourg</a></li>
  <li class="eu28"><a href="#">Macedonia <abbr title="The Former Yugoslav Republic of Macedonia">(F.Y.R.O.M.)</abbr></a></li>
  <li class="eu29"><a href="#">Malta</a></li>
  <li class="eu30"><a href="#">Moldova</a></li>
  <li class="eu31"><a href="#">Monaco</a></li>
  <li class="eu32"><a href="#">Montenegro</a></li>
  <li class="eu33"><a href="#">Netherlands</a></li>
  <li class="eu34"><a href="#">Norway</a></li>
  <li class="eu35"><a href="#">Poland</a></li>
  <li class="eu36"><a href="#">Portugal</a></li>
  <li class="eu37"><a href="#">Romania</a></li>
  <li class="eu38"><a href="#">Russian Federation</a></li>
  <li class="eu39"><a href="#">Serbia</a></li>
  <li class="eu40"><a href="#">Slovakia</a></li>
  <li class="eu41"><a href="#">Slovenia</a></li>
  <li class="eu42"><a href="#">Spain</a></li>
  <li class="eu43"><a href="#">Sweden</a></li>
  <li class="eu44"><a href="#">Switzerland</a></li>
  <li class="eu45"><a href="#">Turkey</a></li>
  <li class="eu46"><a href="#">Ukraine</a></li>
  <li class="eu47"><a href="#">United Kingdom</a></li>
<!--
  <li class="eu48"><a href="#">England</a></li>
  <li class="eu49"><a href="#">Isle of Man</a></li>
  <li class="eu50"><a href="#">Northern Ireland</a></li>
  <li class="eu51"><a href="#">Scotland</a></li>
  <li class="eu52"><a href="#">Wales</a></li>
-->
 </ul>
</div>
    </div>
    <!-- CSSMap SCRIPT -->
    <script type="text/javascript" src="https://cssmapsplugin.com/5/jquery.cssmap.min.js"></script>

    <script type="text/javascript">
$(document).ready(function(){

// CSSMap;
$("#map-europe").CSSMap({
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
