$(document).ready(function() {
        $('a.btnDay').click(function() {
          //Get id of Button that is pressed
          var id = $(this).attr('id');
          //Set pressed Button active and deacticate all others
          $(".sidebarli").removeClass("active")
          $(this).parent().addClass("active");
          //Hide default, show slideshow
          $("#default").addClass("d-none");
          $("#slideshow").removeClass("d-none");
          //Load Day into slideshow div
          $("#slideshow").load("./"+ id +"/index.php");
        });
        $('a.btnHome').click(function() {
          //Same as above for button home
          $(".sidebarli").removeClass("active")
          $(this).parent().addClass("active");
          $("#slideshow").addClass("d-none");
          $("#default").removeClass("d-none");
        });
    });
