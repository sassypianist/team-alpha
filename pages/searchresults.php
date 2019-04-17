<?php

    session_start();

    $host = "460.itpwebdev.com";
    $user = "alpha_admin";
    $pass = "alpha2019";
    $db = "alpha_vendas_db";

    $mysqli = new mysqli($host, $user, $pass, $db);
        if ( $mysqli->connect_errno ) {
            echo $mysqli->connect_error;
            exit();
        }

    $sql = "SELECT truck.truck_name AS truck_name, truck.truck_rating AS truck_rating, truck.truck_img AS truck_img, truck.truck_distance AS truck_distance, truck.truck_id AS truck_id
            FROM truck
            WHERE 1=1";

    if (isset($_GET['truck_name']) && !empty($_GET['truck_name'])) {
        $truck_name = $_GET['truck_name'];
        $sql = $sql . " AND truck_name LIKE '%$truck_name%'";
    }

    $sql = $sql . ";";

    // echo $sql;


    $results = $mysqli->query($sql);

    if ( !$results ) {
        echo $mysqli->error;
        $mysqli->close();
        exit();
    }   

    $mysqli->close();

?>


<!DOCTYPE html>

    <head>
        <Access-Control-Allow-Origin></Access-Control-Allow-Origin>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Vendas Search</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/searchresults.css">
        <link rel="stylesheet" href="../css/vendas-style.css">
        <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous">
        </script>
        <script src="../javascript/vendas.js"></script> 
    <script data-cfasync="false" charset="utf-8" > ;(function (g) { g.aurycReadyCb = g.aurycReadyCb || []; var d = document, i, am = d.createElement("script"), h = d.head || d.getElementsByTagName("head")[0],aex = { "src": "//cdn-dev.userty.com/980-usc-sandbox1com/container.js", "data-cfasync": "false", "async": "true", "defer": "true", "data-vendor": "userty", "data-role": "container", "charset": "utf-8" }; for (var attr in aex) { am.setAttribute(attr,aex[attr]); } h.appendChild(am); })(window); </script>
        
    </head>
    <body class="normal-text">
            <div id="menu">
                    <img id="close-slide" src="../resources/images/close.png">
                    <div id="menu-links">
                        <a href="search.php">Search Vendors</a>
                        <a href="discover_page.php">Discover</a>
                        <a href="userprofile.php">Your Favorites</a>
                        <?php include 'nav.php'; ?>
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
        <div id="results-number" class="small-title green"><?php echo $results->num_rows; ?> results</div>
        <table id="searchrecomendations">
                    
            <?php

                while($row = $results->fetch_assoc() ) : ?>
                    <tr>
                        <td class="crop">
                            <img src="<?php echo $row['truck_img']; ?>">
                        </td>
                        <td class="vendor-info">
                            <a href="vendorpage.php?truck_id=<?php echo $row['truck_id']; ?>"><?php echo $row['truck_name']; ?></a>
                            <br>
                            <?php echo $row['truck_distance']; ?> miles
                            <br>
                            <?php echo $row['truck_rating']; ?> out of 5
                        </td>
                    </tr>
                 <?php endwhile;?>


<!--                     <a href="vendorpage.html">
                            <tr class="recomendation">
                                <td class="crop">
                                    <img src="../resources/images/amazebowl_profile.png" alt="icon">
                                </td>
                                <td class="vendor-info">
                                    <div class="vendor-name small-title green">Amazebowls</div>
                                    <div class="vendor-distance">0.4 miles</div>
                                    <div class="vendor-rating">Rating here</div>
                                </td>
                            </tr>
                        </a>
                <a href="vendorpage.html">
                <tr class="recomendation">
                        <td class="crop">
                    <img src="../resources/images/Armandos.jpg" alt="icon">
                        </td>
                    <td class="vendor-info">
                        <div class="vendor-name small-title green">Armando's</div>
                        <div class="vendor-distance">0.05 miles</div>
                        <div class="vendor-rating">Rating here</div>
                    </dt>
                </tr>
            </a>
                <a href="vendorpage.html">
                <tr class="recomendation">
                    <td class="crop">
                    <img src="../resources/images/pink-taco.jpg" alt="icon">
                    </td>
                    <td class="vendor-info">
                        <div class="vendor-name small-title green">Pink Taco</div>
                        <div class="vendor-distance">0.7 miles</div>
                        <div class="vendor-rating">Rating here</div>
                    </td>
                </tr>
            </a>
                <a href="vendorpage.html">
                <tr class="recomendation">
                        <td class="crop">
                    <img src="../resources/images/kogi.png" alt="icon">
                        </td>
                    <td class="vendor-info">
                        <div class="vendor-name small-title green">Kogi</div>
                        <div class="vendor-distance">0.8 miles</div>
                        <div class="vendor-rating">Rating here</div>
                    </td>
                </tr>
            </a>
                <a href="vendorpage.html">
                <tr class="recomendation">
                        <td class="crop">
                    <img src="../resources/images/chato.jpg" alt="icon">
                        </td>
                    <td class="vendor-info">
                        <div class="vendor-name small-title green">El Chato Taco</div>
                        <div class="vendor-distance">1.5 miles</div>
                        <div class="vendor-rating">Rating here</div>
                    </td>
                </div>
                </a> -->
            </table>
        </div>
    </div>
    </body>
</html>

