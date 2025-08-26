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
            <div class="idx__header--vid_subctnr-A">
                <video class="game__vid" src="assets/videos/swtor.mp4" autoplay loop muted></video>
                <img class="black__papper-A" src="assets/images/papperfont.png" alt="papperfont">
            </div>
            <div class="idx__header--vid_subctnr-B">
                <video class="game__vid" src="assets/videos/wrhmr.mp4" autoplay loop muted></video>
                <img class="black__papper-B" src="assets/images/papperfont.png" alt="papperfont">
            </div>
        </div>
        <div class="idx__header--title_container">
            <img class="logo__banner" src="assets/images/frcolor.png" alt="">
            <h1 class="Alpha__title"><?= $primary_title ?></h1>
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