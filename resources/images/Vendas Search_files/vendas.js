$(document).ready(function(){
    
    $("#menu").hide();
    
    $("#hamburger-menu-img").click(function(){
        console.log("menu clicked");
        $("#menu").fadeIn(200);
    });
    $("#close-slide").click(function(){
        console.log("menu closed");
        $("#menu").fadeOut(200);
    });
});