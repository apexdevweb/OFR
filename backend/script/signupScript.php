<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['usr_sign'])) {

        $usr_name = htmlspecialchars(strip_tags($_POST['usr_sign']));
        $usr_password = htmlspecialchars(strip_tags($_POST['usr_sign']));
        $usr_crf_pass = htmlspecialchars(strip_tags($_POST['usr_sign']));
        $usr_mail = htmlspecialchars(filter_var($_POST['usr_sign']), FILTER_VALIDATE_EMAIL);

        try {
            $usr_verif = $bdd->prepare("SELECT user_mail FROM users");
            $usr_verif->execute([$usr_mail]);
        } catch (PDOException $e) {
            echo "" . $e->getMessage();
        }
    }
}
