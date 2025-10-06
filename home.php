<?php
require_once "backend/components/init.php";
require_once "backend/script/loginScript.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require "include/head.php";
    ?>
</head>

<body>
    <header>
        <?php
        require "include/header.php";
        if (isset($_SESSION['user_auth'])) {
        } else {
        ?>
            <br>
            <div class="top_sign_angle--A top_sign_bar"></div>
            <div class="top_sign_angle--B top_sign_bar"></div>
            <p class="header__register--link" id="sign_btn"><?= $register_ofr ?></p>
            <div class="bottom_sign_angle--B bottom_sign_bar"></div>
            <div class="bottom_sign_angle--A bottom_sign_bar"></div>
        <?php
        }

        ?>

    </header>
    <main>
        <?php
        require "include/main.php";
        ?>
    </main>
    <footer>
        <?php
        require "include/footer.php";
        ?>
    </footer>
    <script src="assets/JS/svgAnime.js" defer></script>
    <script src="assets/JS/animCeta.js" defer></script>
    <script src="assets/JS/animBeta.js" defer></script>
    <script src="assets/JS/revealLogin.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>