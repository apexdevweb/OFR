<?php
require "backend/script/signupScript.php";
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
        ?>
    </header>
    <main>
        <?php
        require "include/module/signup_mdl.php";
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