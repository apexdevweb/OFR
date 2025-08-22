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
    <main class="main__wrhmr">
        <div class="main__wrhmr--conatainer">
            <p><?= $welcome_wrhmr ?></p>
        </div>
    </main>
    <footer>
        <?php
        require "include/footer.php";
        ?>
    </footer>
</body>

</html>