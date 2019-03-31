$(document).ready(function(){
    
    //$("#menu").hide();
    console.log("loaded");
    $("#hamburger-menu-img").click(function(){
        $("#menu").fadeIn(200);
    });
    $("#close-slide").click(function(){
        $("#menu").fadeOut(200);
    });

    $("#search_submit_images").click(function(){
       console.log("triggered");
        window.location.replace("../pages/searchresults.html");
    });

});