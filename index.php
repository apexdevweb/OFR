<?php
require "include/components/__title.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    require "include/head.php";
    ?>
</head>

<body>
    <header>
        <h1><?= $primary_tilte ?></h1>
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
</body>

</html>