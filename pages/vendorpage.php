<?php
session_start();

if ( !isset($_GET['truck_id']) || empty($_GET['truck_id']) ) {
    $error = "No truck information.";
} else {

    $host = "460.itpwebdev.com";
    $user = "alpha_admin";
    $pass = "alpha2019";
    $db = "alpha_vendas_db";

// DB Connection
    $mysqli = new mysqli($host, $user, $pass, $db);
    if ( $mysqli->connect_errno ) {
        echo $mysqli->connect_error;
        exit();
    }

    $mysqli->set_charset('utf8');


    
$sql = "SELECT truck.truck_img AS truck_img, truck.truck_name AS truck_name, truck.open_time AS open, truck.close_time AS close, truck.background AS background, truck.phone_number AS phone_number, reviews.review AS review, user.user_name AS user, reviews.rating AS user_rating, user.user_pic AS user_pic
        FROM reviews
        LEFT JOIN truck
            ON reviews.truck_id = truck.truck_id
        LEFT JOIN user
            ON reviews.user_id = user.user_id            
        WHERE truck.truck_id = " . $_GET['truck_id'] . ";";

    $results = $mysqli->query($sql);
    
    if ( !$results ) {
        echo $mysqli->error;
        exit();
    }

    $row = $results->fetch_assoc();

    $mysqli->close();

}

?>
<!-- This is just a file to get the pages folder into the github -->

<!DOCTYPE html>
    <head>
        <Access-Control-Allow-Origin></Access-Control-Allow-Origin>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Vendas Search</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/vendorpage.css">
        <link rel="stylesheet" href="../css/vendas-style.css">
        <link rel="stylesheet" href="../css/table.css">
        <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous">
        </script>
        <script src="../javascript/vendas.js"></script> 
        <script src="../javascript/vendorpage.js"></script> 
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
                <img id="hamburger-menu-img" src="../resources/images/white_hamburger.png">
            </div>
        </div>
        

    <?php if ( isset($error) && !empty($error) ) : ?>

        <div class="text-danger">
            <?php echo $error; ?>
        </div>

    <?php else : ?>
        <div id="content">
            <div id="cover-overlay">
                <img src="<?php echo $row['truck_img']; ?>">
                    <div id="exit-button">

                    </div>
                </a>
            </div>
            <div class="header-image">
                <a id="header-image-link">
                    <img src="<?php echo $row['truck_img']; ?>">
                </a>
            </div>
            <div id="vendor-info">
                <div id="top-info">
                    <div id="title-wrapper">
                        <div id="vendor-name" class="medium-title green">
                            <?php echo $row['truck_name']; ?>
                        </div>
                        <div id="phone-number">
                            <?php echo $row['phone_number']; ?>
                        </div>
                        <div id="hours-wrapper">
                            <div id="hours">
                                <?php echo $row['open']; ?>AM - 
                                <?php echo $row['close']; ?>PM)
                            </div>
                        </div>
                        <div class="stars">
                            <div class="span">
                                        <span></span>
                                        <span class="<?php
                                                $value = strval($row['truck_rating']);

                                                if ($value == '1star') {
                                                    echo $value;
                                                }

                                                else {

                                                }
                                            ?>star">
                                        </span>
                                        <span class="<?php
                                                $value = strval($row['truck_rating']);

                                                if ($value == '2star' || $value == '1star') {
                                                    echo $value;
                                                }

                                                else {
                                            
                                                }
                                            ?>star">
                                        </span>
                                        <span class="<?php
                                                $value = strval($row['truck_rating']);

                                                if ($value == '3star' || $value == '2star' || $value == '1star') {
                                                    echo $value;
                                                }

                                                else {
                                            
                                                }
                                            ?>star">
                                        </span>
                                        <span class="<?php
                                                $value = strval($row['truck_rating']);

                                                if ($value == '4star' || $value == '3star' || $value == '2star' || $value == '1star') {
                                                    echo $value;
                                                }

                                                else {
                                            
                                                }
                                            ?>star">
                                        </span>
                                    </div>
                        </div>
                    </div>
                    <div id="favorite-button" >
                        <img id="favorite-image" class="unchecked" src="../resources/images/save.png">
                    </div>
                </div>
                <div id="description" class="dark-gray">
                        <?php echo $row['background']; ?>             
                </div>
                <div id="map-wrapper">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6613.60346734081!2d-118.28507594472043!3d34.02329984701048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1550959928965" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div id="reviews-wrapper">
                    <h2 class="medium-title green">Reviews</h2>
                    <div class="review-wrapper">
                        <div class="review-left">
                            <div class="profile_photo">
                                <img src="<?php echo $row['user_pic']; ?>">
                            </div>
                            <div class="profile-name"><?php echo $row[user_name];?></div>
                            <div class="rating"></div>
                        </div>
                        <div class="rating_text">
                            <p>It was great! I loved it.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
    <?php endif; ?>
    </body>
</html>