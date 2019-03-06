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

    $("#search-bar").submit(function(e){
        e.preventDefault();
        console.log("sumbitting");
        //window.location.replace("../resources/pages/searchresults.html");
    });

});