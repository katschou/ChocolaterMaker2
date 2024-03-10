<?php
require "settings/init.php";
?>

<!DOCTYPE html>

<html lang="da">

<head>

    <meta charset="utf-8">

    <title>Done</title>

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


<img src="img/indextopwigglesactual.png" alt="#" class="position-fixed start-0 end-0">
<img src="img/indexbottomwigglesactual.png" alt="#" class="position-fixed start-0 bottom-0">

<div class="text-darkPink translate-middle position-relative translate-middle-x start-50 text-center">
    <h1 class="buildH">Done!</h1>
</div>


<div class="position-relative">

    <img src="img/chocolatebarpngmaybecropped.png" alt="Picture of a chocolate bar" class="position-relative">

    <div class="h1 position-absolute chocInfo text-mainPurple" style="right: 40px; bottom: 30px;">

        <p>Size</p>
        <p>Base</p>
        <p>Filling</p>
        <p>Topping</p>

    </div>

</div>

<div class="payBtn container text-center  position-absolute">
    <div class="row end-50">
        <button class="btn  col-6 btn-darkPink text-lightPink position-relative">
            Pay
        </button>
    </div>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
