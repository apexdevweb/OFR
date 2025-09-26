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
                            <h4>#<?= $_SESSION['user_data']['user_name'] ?></h4>
                        </hgroup>
                        <ul class="actual__user--info">
                            <li class="actual__user--item"><?= $_SESSION['user_data']['user_mail'] ?></li>
                            <li class="actual__user--item"><?= $_SESSION['user_data']['user_gender'] ?></li>
                            <li class="actual__user--item"><?= $_SESSION['user_data']['user_location'] ?></li>
                            <li class="actual__user--item"><?= $_SESSION['user_data']['user_role'] ?></li>
                        </ul>
                    </article>
                </div>
                <hr class="setting_separate">
                <div class="user__setting--ctnr">
                    <div class="setting__sub--ctnr">
                        <h3 class="user__setting--title">Avatar</h3>
                        <picture class="setting__avatar">
                            <source media="(min-width: 800px)" srcset="" type="image/jpg">
                            <source media="(max-width: 799px)" srcset="" type="image/jpg">
                            <img src="" alt="avatar">
                        </picture>
                    </div>
                    <hr class="setting_separate">
                    <div class="setting__sub--ctnr">
                        <form method="post" enctype="multipart/form-data">
                            <div class="setting__role--ctnr">
                                <div class="role__sub--ctnr">
                                    <label for="">Tank <img src="../../assets/images/Fichier 3hdpi.png" alt="tank" class="logo__role"> </label>
                                    <input type="checkbox" name="usr_role" value="Tank">
                                </div>
                                <div class="role__sub--ctnr">
                                    <label for="">Dps <img src="../../assets/images/Fichier 1hdpi.png" alt="tank" class="logo__role"></label>
                                    <input type="checkbox" name="usr_role" value="Dps">
                                </div>
                                <div class="role__sub--ctnr">
                                    <label for="">Heal <img src="../../assets/images/Fichier 2hdpi.png" alt="tank" class="logo__role"></label>
                                    <input type="checkbox" name="usr_role" value="Heal">
                                </div>
                            </div>
                            <label for="usr_country">Location</label>
                            <select name="usr_country" required>
                                <option value="..." selected>...</option>
                                <option value="Albanie">Albanie</option>
                                <option value="Allemagne">Allemagne</option>
                                <option value="Andorre">Andorre</option>
                                <option value="Arménie">Arménie</option>
                                <option value="Autriche">Autriche</option>
                                <option value="Azerbaïdjan">Azerbaïdjan</option>
                                <option value="Belgique">Belgique</option>
                                <option value="Biélorussie">Biélorussie</option>
                                <option value="Bosnie-Herzégovine">Bosnie-Herzégovine</option>
                                <option value="Bulgarie">Bulgarie</option>
                                <option value="Chypre">Chypre</option>
                                <option value="Croatie">Croatie</option>
                                <option value="Danemark">Danemark</option>
                                <option value="Espagne">Espagne</option>
                                <option value="Estonie">Estonie</option>
                                <option value="Finlande">Finlande</option>
                                <option value="France">France</option>
                                <option value="Géorgie">Géorgie</option>
                                <option value="Grèce">Grèce</option>
                                <option value="Hongrie">Hongrie</option>
                                <option value="Irlande">Irlande</option>
                                <option value="Islande">Islande</option>
                                <option value="Italie">Italie</option>
                                <option value="Kazakhstan">Kazakhstan (partie européenne)</option>
                                <option value="Kosovo">Kosovo</option>
                                <option value="Lettonie">Lettonie</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lituanie">Lituanie</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Malte">Malte</option>
                                <option value="Moldavie">Moldavie</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Monténégro">Monténégro</option>
                                <option value="Norvège">Norvège</option>
                                <option value="Pays-Bas">Pays-Bas</option>
                                <option value="Pologne">Pologne</option>
                                <option value="Portugal">Portugal</option>
                                <option value="République Tchèque">République Tchèque</option>
                                <option value="Roumanie">Roumanie</option>
                                <option value="Royaume-Uni">Royaume-Uni</option>
                                <option value="Russie">Russie</option>
                                <option value="Saint-Marin">Saint-Marin</option>
                                <option value="Serbie">Serbie</option>
                                <option value="Slovaquie">Slovaquie</option>
                                <option value="Slovénie">Slovénie</option>
                                <option value="Suède">Suède</option>
                                <option value="Suisse">Suisse</option>
                                <option value="Turquie">Turquie</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="Vatican">Vatican</option>
                            </select>
                            <input type="file" name="user_avatar" id="">
                            <input type="submit" name="update_user" value="Update profil">
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