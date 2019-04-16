<?php
session_start();

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
        <div id="content">
            
            
            <div id="search-wrapper">
                <div id=search-bar>
                    <input type="text" placeholder="Search Vendors...">
                </div>
            </div>
            <div id="results-number" class="small-title green">6 results</div>
            <div id="searchrecomendations">
                    <a href="vendorpage.html">
                            <div class="recomendation">
                                    <div class="crop">
                                <img src="../resources/images/amazebowl_profile.png" alt="icon">
                                </div>
                                <div class="vendor-info">
                                    <div class="vendor-name small-title green">Amazebowls</div>
                                    <div class="vendor-distance">0.4 miles</div>
                                    <div class="vendor-rating">
                                        <div class="stars">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                <a href="vendorpage.html">
                <div class="recomendation">
                        <div class="crop">
                    <img src="../resources/images/Armandos.jpg" alt="icon">
                        </div>
                    <div class="vendor-info">
                        <div class="vendor-name small-title green">Armando's</div>
                        <div class="vendor-distance">0.05 miles</div>
                        <div class="vendor-rating">
                            <div class="stars">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
                <a href="vendorpage.html">
                <div class="recomendation">
                    <div class="crop">
                    <img src="../resources/images/pink-taco.jpg" alt="icon">
                    </div>
                    <div class="vendor-info">
                        <div class="vendor-name small-title green">Pink Taco</div>
                        <div class="vendor-distance">0.7 miles</div>
                        <div class="vendor-rating">
                            <div class="stars">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
                <a href="vendorpage.html">
                <div class="recomendation">
                        <div class="crop">
                    <img src="../resources/images/kogi.png" alt="icon">
                    </div>
                    <div class="vendor-info">
                        <div class="vendor-name small-title green">Kogi</div>
                        <div class="vendor-distance">0.8 miles</div>
                        <div class="vendor-rating">
                            <div class="stars">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
                <a href="vendorpage.html">
                <div class="recomendation">
                        <div class="crop">
                    <img src="../resources/images/chato.jpg" alt="icon">
                    </div>
                    <div class="vendor-info">
                        <div class="vendor-name small-title green">El Chato Taco</div>
                        <div class="vendor-distance">1.5 miles</div>
                        <div class="vendor-rating">
                            <div class="stars">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
    </body>
</html>

