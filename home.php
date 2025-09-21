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
        <p class="header__register--link"><?= $register_ofr ?></p>
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
    <script src="assets/JS/animBeta.js" defer></script>
    <script src="assets/JS/revealLogin.js" defer></script>
</body>

</html>