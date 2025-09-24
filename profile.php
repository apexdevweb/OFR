<?php
require_once "backend/components/init.php";
// require "backend/script/userEditor.php";
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
        if (isset($_SESSION['user_auth'])) {
        ?>
            <div class="user__setting--ctnr">
                <div class="setting__sub--ctnr">
                    <h3 class="user__setting--title">Information du compte</h3>
                    <article class="actual__user--data">
                        <hgroup class="user__title--ctnr">
                            <h4><?= $_SESSION['user_data']['user_name'] ?></h4>
                        </hgroup>
                        <ul class="actual__user--info">
                            <li class="actual__user--item"><?= $_SESSION['user_data']['user_mail'] ?></li>
                            <li class="actual__user--item"><?= $_SESSION['user_data']['user_gender'] ?></li>
                            <li class="actual__user--item"><?= $_SESSION['user_data']['user_location'] ?></li>
                            <li class="actual__user--item"><?= $_SESSION['user_data']['user_role'] ?></li>
                        </ul>
                        <figure>
                            <img src="" alt="user_avatar">
                            <figcaption>Lorem ipsum dolor sit amet.</figcaption>
                        </figure>
                    </article>
                </div>
                <hr>
                <div class="setting__sub--ctnr">
                    <form method="post" enctype="multipart/form-data">
                        <input type="file" name="user_avatar" id="">
                        <input type="submit" name="update_user" value="Update">
                    </form>
                </div>
            </div>
        <?php
        }

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