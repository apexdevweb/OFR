<div class="register__ctnr">
    <?php
    if (isset($error_msg)) {

    ?>
        <h3 class="sign__error--msg"><?= $error_msg ?></h3>
    <?php
    }
    if (isset($key_view_msg)) {
    ?>
        <p class="timer__view"></p>
        <h3 class="sign__code--pin"><?= $key_view_msg ?></h3>
    <?php
    }
    ?>
    <form method="post" class="sign_up_form">
        <div class="register__sub--ctnr">
            <input type="text" name="usr_name" placeholder="User name" required>
            <input type="email" name="usr_mail" placeholder="E-mail" required>
        </div>
        <div class="register__sub--ctnr">
            <input type="password" name="usr_pass" placeholder="Password" required>
            <input type="password" name="usr_crf_pass" placeholder="Confirm password" required>
        </div>
        <div class="register__sub--ctnr">
            <div class="country__ctnr">
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
            </div>
            <div class="role__ctnr">
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
        </div>
        <div class="gender_ctnr">
            <label for="usr_gender">H</label>
            <input type="radio" name="usr_gender" value="H">
            <label for="usr_gender">F</label>
            <input type="radio" name="usr_gender" value="F">
        </div>
        <br>
        <input type="submit" name="usr_sign" value="Signup">
    </form>
</div>