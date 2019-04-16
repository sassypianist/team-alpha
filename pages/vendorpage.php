<?php
session_start();

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
        <div id="content">
            <div id="cover-overlay">
                <img src="../resources/images/Amazebowls-cover.jpg">
                    <div id="exit-button">

                    </div>
                </a>
            </div>
            <div class="header-image">
                <a id="header-image-link">
                    <img src="../resources/images/Amazebowls-cover.jpg">
                </a>
            </div>
            <div id="vendor-info">
                <div id="top-info">
                    <div id="title-wrapper">
                        <div id="vendor-name" class="medium-title green">
                            Amazebowls
                        </div>
                        <div id="phone-number">
                            123-435-789
                        </div>
                        <div id="hours-wrapper">
                            <div id="hours-status">
                                Open
                            </div>
                            <div id="hours">
                                (8:00AM - 6PM)
                            </div>
                        </div>
                        <div id="rating">
                            <div class="stars">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div id="favorite-button" >
                        <img id="favorite-image" class="unchecked" src="../resources/images/save.png">
                    </div>
                </div>
                <div id="description" class="dark-gray">
                        Amazebowls started with a simple idea: healthy eating should be fun and accessible for everyone. We wanted to make the perfect bowl and for that, we needed the perfect base. From the get-go, we were obsessed with texture. It had to be thick, yet dairy-free. So we tested. And tested. And tested. Until we had it.                </div>
                <div id="map-wrapper">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6613.60346734081!2d-118.28507594472043!3d34.02329984701048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1550959928965" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div id="reviews-wrapper">
                    <h2 class="medium-title green">Reviews</h2>
                    <input class="review-input" placeholder="Tap to review...">
                    <div class="review-wrapper">
                        <div class="review-left">
                            <div class="profile_photo">
                                <img src="../resources/images/user_pic.png">
                            </div>
                            <div class="profile-name">Lisa Lee</div>
                            <div class="rating">Rating Here</div>
                        </div>
                        <div class="rating_text">
                            <p>It was great! I loved it.</p>
                        </div>
                    </div>
                    <div class="review-wrapper">
                            <div class="review-left">
                                <div class="profile_photo">
                                    <img src="../resources/images/ezra.jpg">
                                </div>
                                <div class="profile-name">Ezra Klein</div>
                                <div class="rating">Rating Here</div>
                            </div>
                            <div class="rating_text">
                                <p>Its always so Refreshing ;)</p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>