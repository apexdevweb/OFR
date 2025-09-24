<?php
require "backend/components/__title.php";
require "backend/components/__btnTxt.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require "include/head.php";
    ?>
</head>

<body>
    <div class="idx__container--main">
        <div class="idx__sub--ctnr">
            <video src="assets/videos/ofrIntro.mp4" autoplay loop muted loading="lazy" class="idx__vid"></video>
        </div>
        <div class="idx__container--A">
            <img src="assets/images/logoMiniB.png" alt="Logo-OFR" class="idx__logo">
            <h1 class="idx__title"><?= $secondary_title ?></h1>
        </div>
        <div class="idx__container--B">
            <div class="top__angle--A top_bar"></div>
            <div class="top__angle--B top_bar"></div>
            <div class="top__angle--C top_bar"></div>
            <button class="idx__btn" id="enterbtn">
                <a href="home.php" class="idx__btn--enter"><?= $enter_txt ?></a>
            </button>
            <div class="bottom__angle--C bottom_bar"></div>
            <div class="bottom__angle--B bottom_bar"></div>
            <div class="bottom__angle--A bottom_bar"></div>
        </div>
    </div>
    <script src="assets/JS/animAlpha.js" defer></script>
</body>

</html>