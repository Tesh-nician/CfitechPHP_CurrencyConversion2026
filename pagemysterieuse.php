<?php

session_start();


$title = "Page Mysterieuse";
$nav = "pagemysterieuse.php";
require "header.php";

?>
<!--carousel-->
<br><br>

<h1>La Page Mysterieuse sur les mystéres inconnu qui ne sonts pas connu</h1>


<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" >

        <div class="carousel-item active" data-bs-interval="1000"><div class="carrousel-image">
                <img src="/assets/images/nessie.webp" class="d-block w-100" alt="..." style="border-radius: 20px;"> </div>
        </div>
        <div class="carousel-item " data-bs-interval="1000"><div class="carrousel-image">
                <img src="/assets/images/flatearth.webp" class="d-block w-100" alt="..." style="border-radius: 20px;"></div>
        </div>
        <div class="carousel-item " data-bs-interval="1000"><div class="carrousel-image">
                <img src="/assets/images/covidconspiracy.jpg" class="d-block w-100" alt="..." style="border-radius: 20px;"></div>
        </div>
        <div class="carousel-item " data-bs-interval="1000"><div class="carrousel-image">
                <img src="/assets/images/brigittemacron.jpg" class="d-block w-100" alt="..." style="border-radius: 20px;"></div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>




<!--end carousel-->

<?php
require "footer.php";
?>





