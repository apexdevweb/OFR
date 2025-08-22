<?php
require "include/components/__title.php";
require "include/components/__subtitle.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    require "include/head.php";
    ?>
</head>

<body>
    <main class="main__swtor">
        <div class="main__swtor--conatainer">
            <p><?= $welcome_swtor ?></p>
        </div>
    </main>
    <footer>
        <?php
        require "include/footer.php";
        ?>
    </footer>
</body>

</html>