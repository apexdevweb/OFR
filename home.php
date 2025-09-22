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
        ?>
        <br>
        <div class="top_sign_angle--A top_sign_bar"></div>
        <div class="top_sign_angle--B top_sign_bar"></div>
        <p class="header__register--link" id="sign_btn"><?= $register_ofr ?></p>
        <div class="bottom_sign_angle--B bottom_sign_bar"></div>
        <div class="bottom_sign_angle--A bottom_sign_bar"></div>
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
    <script src="assets/JS/animCeta.js" defer></script>
    <script src="assets/JS/animBeta.js" defer></script>
    <script src="assets/JS/revealLogin.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>