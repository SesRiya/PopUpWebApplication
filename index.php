<?php
include "header.php";
?>
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
                <a target="_blank" href="olivia&sage.php">
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
