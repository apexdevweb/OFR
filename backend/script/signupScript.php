<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['usr_sign'])) {

        $usr_name = htmlspecialchars(strip_tags($_POST['usr_name']));
        $usr_mail = htmlspecialchars(filter_var($_POST['usr_mail']), FILTER_VALIDATE_EMAIL);
        $usr_password = htmlspecialchars(strip_tags($_POST['usr_pass']));
        $usr_crf_pass = htmlspecialchars(strip_tags($_POST['usr_crf_pass']));
        $usr_secure_key = mt_rand(100000, 900000);

        try {
            $usr_verif = $bdd->prepare("SELECT user_mail FROM users");
            $usr_verif->execute([$usr_mail]);
        } catch (PDOException $e) {
            echo "Erreur de verification de l'utilisateur" . $e->getMessage();
        }
        $usr_data_verif = $usr_verif->fetch();
        if ($usr_data_verif->rowCount() > 0) {
            echo "Cette utilisateur existe déja";
        } else {
            if ($usr_password === $usr_crf_pass) {
                $usr_password = password_hash($_POST['usr_pass'], PASSWORD_ARGON2I);
                ////////////////////////////////////////////////////////////////////////////
                ////////////////////////////////////////////////////////////////////////////
                ////////////////////////////////////////////////////////////////////////////
                ////////////////////////////// A REMPLIR SI LES MOT DE PASSE CORRESPONDENT//
                ////////////////////////////////////////////////////////////////////////////
                ////////////////////////////////////////////////////////////////////////////
                ////////////////////////////////////////////////////////////////////////////
            } else {
                echo "Les mots de passe ne correspondent pas";
            }
        }
    }
}
