$(document).ready(function(){
    
   //$("#menu").hide();
    
   /* $("#hamburger-menu-img").click(function(){
        console.log("menu clicked");
        $("#menu").fadeIn(200);
    });
    $("#close-slide").click(function(){
        console.log("menu closed");
        $("#menu").fadeOut(200);
    });*/
    $("#hamburger-menu-img").click(function(){
    	document.getElementById("menu").style.transform = "translate(290px, 0px)";
    	document.getElementById("container").style.transform = "translate(290px, 0px)";
    });

    $("#close-slide").click(function(){
        console.log("close");
    	document.getElementById("menu").style.transform = "translate(0px, 0px)";
    	document.getElementById("container").style.transform = "translate(0px, 0px)";
    });
});