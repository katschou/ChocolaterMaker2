<?php
require "settings/init.php";
?>

<!DOCTYPE html>

<html lang="da">

<head>

	<meta charset="utf-8">
	
	<title>Make a Chocolate Bar</title>
	
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


<img src="img/indextopwigglesactual.png" alt="#" class="position-fixed end-0">
<img src="img/indexbottomwigglesactual.png" alt="#" class="position-fixed start-0 bottom-0">

<div class="buildText text-darkPink translate-middle position-relative translate-middle-x start-50 text-center">
    <h1 class="buildH">Build a Chocolate Bar</h1>
</div>


<div class="position-relative">
    <img src="img/chocolatebarpngmaybecropped.png" alt="Picture of a chocolate bar" class="position-relative" >
    <div class="h1 position-absolute" style="right: 30px; bottom: 30px;">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Gluten-free
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Lactose-free
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Nut-free
            </label>
        </div>
    </div>
</div>

<div class="">
    <div class="nextBtn container">
        <button class="btn btn-darkPink text-lightPink position-fixed start-50 translate-middle">
            START
        </button>
    </div>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
