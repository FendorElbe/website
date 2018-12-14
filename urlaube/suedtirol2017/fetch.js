$(document).ready(function() {
        $('a.btnDay').click(function() {
          var id = $(this).attr('id');
          $( "#default" ).addClass("d-none");
          $( "#slideshow" ).removeClass("d-none");
          $.ajax({
            url: id.'/index.php',
            success: function(data) {
              $('#slideshow').html(data);
              alert('Load was performed.');
            }
          });
        });
    });
