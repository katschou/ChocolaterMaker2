<?php
require "settings/init.php";
?>

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
            <img src="img/minichoco2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-text">Heart</h3>
            </div>
        </div>

        <div class="col-6 card" style="width: 14rem;">
            <img src="img/minichoco2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-text">Regular</h3>
            </div>
        </div>

        <div class="col-6 card" style="width: 14rem;">
            <img src="img/minichoco2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-text">Large</h3>
            </div>
        </div>

        <div class="col-6 card" style="width: 14rem;">
            <img src="img/minichoco2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-text">Share</h3>
            </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="col-6">
        <button class="btn-mainBlue">Back</button>
    </div>
    <div class="col-6">
        <button class="btn-darkPink">Next</button>
    </div>
</div>



</body>