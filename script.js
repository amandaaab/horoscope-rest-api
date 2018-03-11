$(document).ready(function(){

    saveHoroscope = function(){
        $.ajax({
            url:"inc/addHoroscope.php",
            method: "POST",
            data:{
                "personNummer": $("#personNummer").val()
            },
            success: function(msg){
                $("#showHoroscope").html(msg);
            }
        });
    }
    
}); 