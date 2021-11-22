<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
          integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous"/>
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="stylesheet/style.css">
</head>


<body>
<!-- start #header-->
<header>
    <div class="topbar">
        <div class="loginbutton" title="Click to Log in">
            <i class="fas fa-user fa-2x"></i>
        </div>
        <div class="searchbar">
            <input type="text" class="searchTerm" placeholder="Search">
        </div>
        <div class="searchbutton">
            <button type="submit" class="searchButton">
                <i class="fa fa-search fa-2x"></i>
            </button>
        </div>
    </div>
    <!--Primary Navigation-->
    <nav class="navbar">
        <a href="index.php" class="logo">
            <img src="images/Pop-Up.png" alt="Pop-Up Logo"/></a>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="#" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        </div>
    </nav>
    <!--Primary Navigation-->
</header>

<!--Button to get back to top of the Homepage-->
<div>
    <button id="goToTopBtn" title="Go to top">Top</button>
</div>

<!-- start #main-site-->
<main id="main">
    <!--2nd row -->
    <div>
        <div class="motto" id="motto">
            <img src="images/motto.png" alt="motto" width="800" height="200"/>
        </div>
    </div>

    <!--GALLERY OF POP - UPS-->
    <div class="rowgallery">
        <br>
        <h3 id="title2"></h3>
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="">
                    <img src="images/plantspicture.png" alt="plantshop" width="450" height="300"/>
                </a>
                <div class="desc">Olivia & Sage</div>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="">
                    <img src="images/homedecor.png" alt="HomeDecor" width="450" height="300"/>
                </a>
                <div class="desc">Home by Olivia & Sage</div>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="">
                    <img src="images/EVENTSTYLING.png" alt="PartyEvents" width="450" height="300"/>
                </a>
                <div class="desc">Style Savvy Parties</div>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="">
                    <img src="images/homebreads.png" alt="Breads" width="450" height="300"/>
                </a>
                <div class="desc">Panaderiya</div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--Sales Page-->

    <!-- Business Logo -->
    <div>
        <div class="motto" id="motto">
            <img src="images/follow.png" alt="motto" width="600" height="100"/>
        </div>
    </div>

    <div class="business">
        <div class="localbusiness" id="plants">
            <img src="images/plant.png" alt="Breads" width="auto" height="200"/>
        </div>
        <div class="localbusiness" id="plants">
            <img src="images/home.png" alt="Breads" width="auto" height="200"/>
        </div>
        <div class="localbusiness" id="plants">
            <img src="images/party.png" alt="Breads" width="auto" height="200"/>
        </div>
        <div class="localbusiness" id="plants">
            <img src="images/breads.png" alt="Breads" width="auto" height="200"/>
        </div>
    </div>
    <!-- Business Logo -->
</main>
<footer>footer</footer>

<script src="scripts/main.js"></script>
</body>

</html>
