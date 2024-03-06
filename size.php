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

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-bgBeige">

<div class="header">
    <img src="img/topwiggle.png" alt="nnnnnh">
    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-mainPurple" style="width: 20%; height: 40px;"></div>
    </div>
</div>


<div class="container">
    <div class="text-darkPink">
        <h1>Choose a size:</h1>
    </div>
</div>


<div class="container text-center">
    <div class="row d-flex">

        <div class="col-6 card" style="width: 14rem;">
            <img src="img/minichoco2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-text">Mini</h3>
            </div>
        </div>

        <div class="col-6 card " style="width: 14rem;">
            <img src="img/heartchoco2.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-text">Heart</h3>
            </div>
        </div>

        <div class="col-6 card" style="width: 14rem;">
            <img src="img/regularchoco.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-text">Regular</h3>
            </div>
        </div>

        <div class="col-6 card" style="width: 14rem;">
            <img src="img/largechoco.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-text">Large</h3>
            </div>
        </div>

        <div class="col-6 card" style="width: 14rem;">
            <img src="img/sharechoco2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-text">Share</h3>
            </div>
        </div>

    </div>
</div>

<div class="m-0 position-absolute bottom-0 start-0">
    <a>
        <img src="img/backbtnwiggle.png" alt="Back button">
    </a>
</div>

<div class="m-0 position-absolute bottom-0 end-0">
    <a>
        <img src="img/nextbtnwiggle.png" alt="Next button">
    </a>
</div>




<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>