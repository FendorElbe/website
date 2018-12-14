$(document).ready(function() {
        $('a.btnDay').click(function() {
          var id = $(this).attr('id');
          $("#default").addClass("d-none");
          $("#slideshow").removeClass("d-none");
          $("#slideshow").load("xx_xx_xx/index.php");
        });
    });
