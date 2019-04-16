$(document).ready(function(){
    
    //$("#menu").hide();
    console.log("loaded");
    $("#hamburger-menu-img").click(function(){
        alert("here");
        $("#menu").fadeIn(200);
    });
    $("#close-slide").click(function(){
        $("#menu").fadeOut(200);
    });

});