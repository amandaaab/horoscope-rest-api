$(document).ready(function(){
    function viewHoroscope() {
        $.ajax({
          url: "inc/viewHoroscope.php",
          method: "GET",
          data : {
            personNummer: $("#personNummer").val()
          },
          success: function(msg) {
              $("#showHoroscope").html(msg);
          },
      });
    }

    viewHoroscope();
   
    saveHoroscope = function(){
        $.ajax({
            url:"inc/addHoroscope.php",
            method: "POST",
            data:{
                personNummer: $("#personNummer").val()
            },
            success: function(msg){
               $("#showHoroscope").html(msg);
            }
        });
        viewHoroscope();
    }

    updateHoroscope = function(){
        $.ajax({
            url: "inc/updateHoroscope.php",
            method: "PUT",
            data:{
                personNummer: $("#personNummer").val()
            },
            success: function(msg){
                $("#showHoroscope").html(msg);
            }
        });
        viewHoroscope();
    }

    deleteHoroscope = function(){
        $.ajax({
            url:"inc/deleteHoroscope.php",
            method: "DELETE",
    
            success: function(msg){
               $("#showHoroscope").html(msg);
            }
        });
        viewHoroscope();
    }  
}); 