<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php
    $currentdir = basename(__DIR__);
    echo '<title>'.$currentdir.'</title>';
    ?>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
  <div class="wrapper">
      <!-- Sidebar -->
      <nav id="sidebar">
          <div class="sidebar-header">
            <?php
            $info = file("info.txt");
            echo '<h3>'.$info[0].'</h3>';
            ?>
          </div>

          <ul class="list-unstyled components">
            <li class="active sidebarli">
                <a href="#" class="btnHome">Übersicht</a>
            </li>
            <hr />
            <?php
            $directories = glob("." . '/*', GLOB_ONLYDIR);
            foreach ($directories as $directory){
              $info_lines = file($directory."/info.txt");
              echo '
                <li class="sidebarli">
                  <a href="#" class="btnDay" id="'.$directory.'">'.$info_lines[0].'</a>
                </li>
              ';
            }
            ?>
          </ul>
      </nav>

      <div id="content" class="container-fluid container-custom">

          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><button type="button" id="sidebarCollapse" class="btn btn-dark">
              <i class="fas fa-bars"></i>
            </button></a>
            <ul class="navbar-nav mr-auto">
              <div id="nav_item_1">
              </div>
            </ul>
          </nav>

          <div id="default" class="container-fluid container-custom">
            <div class="container-fluid p-3">
              Bitte wähle einen Tag auf der linken Seite aus!
            </div>
          </div>
          <div id="slideshow" class="container-fluid container-custom d-none">
          </div>
      </div>
  </div>


    <!-- jQuery CDN-->
    <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- custom JS -->
    <script>
    $(document).ready(function () {

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

    });
  </script>
   <script src="fetch.js"></script>

</body>

</html>
