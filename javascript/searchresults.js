$( document ).ready(function(){
    
    
    


    $("#header-image-link").click(function(){
        $("#cover-overlay").fadeIn(200);
    });
    $("#exit-button").click(function(){
        $("#cover-overlay").fadeOut(200);
    });
});