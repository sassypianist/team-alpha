$( document ).ready(function(){

    $("#cover-overlay").hide();

    $("#header-image-link").click(function(){
        $("#cover-overlay").fadeIn(200);
    });
    $("#exit-button").click(function(){
        $("#cover-overlay").fadeOut(200);
    });
    $("#favorite-image").click(function(){
        if ($(this).hasClass("unchecked")){
            $(this).attr("src","../resources/images/selected.png");
            $(this).removeClass("unchecked");
            $(this).addClass("checked");
        }
        else{
            $(this).removeClass("checked");
            $(this).addClass("unchecked");
            $(this).attr("src","../resources/images/save.png");
        }
    });
});