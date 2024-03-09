<?php
require "settings/init.php";
?>

<!DOCTYPE html>

<html lang="da">

<head>

    <meta charset="utf-8">

    <title>Choose a size</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap')
    </style>
    <script src="https://kit.fontawesome.com/bfdd5c06bb.js" crossorigin="anonymous"></script>

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<body class="bg-bgBeige">


<div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="20" aria-valuemin="0"
     aria-valuemax="100">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-mainPurple"
         style="width: 20%; height: 40px;"></div>
</div>


<img src="img/topwigglenew.png" alt="#" class="position-fixed">

<div class="chooseSize text-darkPink position-relative">
    <p>Choose a size:</p>
</div>



<div class="cardsContainer container position-relative text-center">
    <div class="row gx-0 position-absolute">
        <div class="col-6">
            <div class="card" style="width: 17rem;">
                <img src="img/minichoco2.jpg" class="card-img-top" alt="#">
                <div class="card-body">
                    <h1 class="card-text">Mini</h1>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card" style="width: 17rem;">
                <img src="img/heartchoco2.png" class="card-img-top" alt="#">
                <div class="card-body">
                    <h1 class="card-text">Heart</h1>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card" style="width: 17rem;">
                <img src="img/regularchoco.png" class="card-img-top" alt="#">
                <div class="card-body">
                    <h1 class="card-text">Regular</h1>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card" style="width: 17rem;">
                <img src="img/largechoco.jpg" class="card-img-top" alt="#">
                <div class="card-body">
                    <h1 class="card-text">Large</h1>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card" style="width: 17rem;">
                <img src="img/sharechoco2.jpg" class="card-img-top" alt="#">
                <div class="card-body">
                    <h1 class="card-text">Share</h1>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="backBtn m-0 position-fixed bottom-0 start-0">
    <a class="stretched-link" href="#">
        <img src="img/backbtnwigglenew.png" alt="Back button">
    </a>
</div>

<div class="nextBtn m-0 position-fixed bottom-0 end-0">
    <a class="stretched-link" href="#">
        <img src="img/nextbtnwigglenew.png" alt="Next button">
    </a>
</div>

<div class="backTxt text-textBlue position-fixed bottom-0 start-0">
    <p>Back</p>
</div>

<div class="nextTxt text-darkPink position-fixed bottom-0 end-0">
    <p>Next<span class="fa-solid fa-arrow-right"></span></p>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>