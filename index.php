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
    <header class="idx__header">
        <div class="idx__header--vid_container">
            <video class="game__vid" src="assets/videos/swtor.mp4" autoplay loop muted></video>
            <video class="game__vid" src="assets/videos/wrhmr.mp4" autoplay loop muted></video>
        </div>
        <div class="idx__header--title_container">
            <h1 class="Alpha__title"><?= $primary_tilte ?></h1>
            <h2 class="Alpha__sub--title"><?= $secondary_title ?></h2>
        </div>
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