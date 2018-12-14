$(document).ready(function() {
        $('a.btnDay').click(function() {
          var id = $(this).attr('id');
          $(".sidebarli").removeClass("active")
          $(this).parent().addClass("active");
          $("#default").addClass("d-none");
          $("#slideshow").removeClass("d-none");
          $("#slideshow").load("./"+ id +"/index.php");
        });
        $('a.btnHome').click(function() {
          $(".sidebarli").removeClass("active")
          $(this).parent().addClass("active");
          $("#slideshow").addClass("d-none");
          $("#default").removeClass("d-none");
        });
    });
