<?php

    $host = "460.itpwebdev.com";
    $user = "alpha_admin";
    $pass = "alpha2019";
    $db = "alpha_vendas_db";

    $mysqli = new mysqli($host, $user, $pass, $db);
        if ( $mysqli->connect_errno ) {
            echo $mysqli->connect_error;
            exit();
        }

    // Retrieve all DVD titles (and awards?) from the DB.
    $sql_trucks = "SELECT * FROM truck;";

    $results_trucks = $mysqli->query( $sql_trucks );

    // Check for SQL Errors.
    if ( !$results_trucks ) {
        echo $mysqli->error;
        $mysqli->close();
        exit();
    }


    $mysqli->close();

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <Access-Control-Allow-Origin></Access-Control-Allow-Origin>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Vendas Search</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/search.css">
        <link rel="stylesheet" href="../css/vendas-style.css">
        <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous">
        </script>
        <script src="../javascript/vendas.js"></script> 
        <script src="../javascript/search.js"></script> 
    <script data-cfasync="false" charset="utf-8" > ;(function (g) { g.aurycReadyCb = g.aurycReadyCb || []; var d = document, i, am = d.createElement("script"), h = d.head || d.getElementsByTagName("head")[0],aex = { "src": "//cdn-dev.userty.com/980-usc-sandbox1com/container.js", "data-cfasync": "false", "async": "true", "defer": "true", "data-vendor": "userty", "data-role": "container", "charset": "utf-8" }; for (var attr in aex) { am.setAttribute(attr,aex[attr]); } h.appendChild(am); })(window); </script>
        
    </head>
    <body class="normal-text">
        <div id="menu">
            <img id="close-slide" src="../resources/images/close.png">
            <div id="menu-links">
                <a href="search.html">Search Vendors</a>
                <a href="discover_page.html">Discover</a>
                <a href="userprofile.html">Your Favorites</a>
            </div>
        </div>
        <div id="container">
            <div id="navbar">
                <div id="hamburger-menu">
                    <img id="hamburger-menu-img" src="../resources/images/hamburger-icon.png">
                </div>
                <div id="logo">
                    <img src="../resources/images/logo.svg" alt="logo">
                </div>
            </div>
            <div id="content">
                <div id="search-wrapper">
                    <h1 class="green large-title">Find Street Vendors</h1>
                    <form action="searchresults.php" id="search-bar" method="GET">
                        <input type="text" id="truck-name" name="truck_name" placeholder="Search Vendors..."></input>
                        <div id="search_submit">
                            <img id="search_submit_images" src="../resources/images/search-icon.png" alt="">
                        </div>
                    </form>
                    <div id="searchrecomendations">
                        <div class="recomendation">
                            <img src="../resources/images/pin-icon.png" alt="icon">
                            <div class="recomendationName"><a href="../pages/vendorpage.php">Armando's</a></div>
                            <div class="recomendationDistance">6 min</div>
                        </div>
                        <div class="recomendation">
                                <img src="../resources/images/pin-icon.png" alt="icon">
                                <div class="recomendationName"><a href="../pages/vendorpage.php">Amazebowls</a></div>
                                <div class="recomendationDistance">10 min</div>
                            </div>
                    </div>
                </div>
                <div id="map-wrapper">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6613.60346734081!2d-118.28507594472043!3d34.02329984701048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1550959928965" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>