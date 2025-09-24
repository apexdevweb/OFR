<?php
require "backend/Ofr_connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['usr_sign'])) {
        if (
            !empty($_POST['usr_name']) && !empty($_POST['usr_mail']) && !empty($_POST['usr_pass'])
            && !empty($_POST['usr_crf_pass']) && !empty($_POST['usr_gender']) && !empty($_POST['usr_country']) && !empty($_POST['usr_role'])
        ) {
            $usr_name = htmlspecialchars(strip_tags($_POST['usr_name']));
            $usr_mail = htmlspecialchars(filter_var($_POST['usr_mail']), FILTER_VALIDATE_EMAIL);
            $usr_password = htmlspecialchars($_POST['usr_pass']);
            $usr_crf_pass = htmlspecialchars(strip_tags($_POST['usr_crf_pass']));
            $usr_gender = htmlspecialchars(strip_tags($_POST['usr_gender']));
            $usr_location = htmlspecialchars(strip_tags($_POST['usr_country']));
            $usr_role = htmlspecialchars(strip_tags($_POST['usr_role']));
            $usr_secure_key = mt_rand(100000, 900000);
            if ($usr_location === "...") {
                echo "Veuillez choisir une localisation valide";
            } else if ($usr_location != "...") {
                try {
                    $usr_verif = $bdd->prepare("SELECT user_mail FROM users WHERE user_mail = ?");
                    $usr_verif->execute([$usr_mail]);
                } catch (PDOException $e) {
                    echo "Erreur de verification de l'utilisateur" . $e->getMessage();
                }
                if ($usr_verif->rowCount() > 0) {
                    echo "Cette utilisateur existe déja";
                } else {
                    if ($usr_password === $usr_crf_pass) {
                        $usr_password = password_hash($_POST['usr_pass'], PASSWORD_ARGON2I);
                        try {
                            $insert_user = $bdd->prepare("INSERT INTO users (`user_name`, `user_password`, `user_mail`, `user_gender`, `user_location`, `user_role`, `secure_key`) VALUES (?,?,?,?,?,?,?)");
                            $insert_user->execute([$usr_name, $usr_password, $usr_mail, $usr_gender, $usr_location, $usr_role, $usr_secure_key]);

                            if ($insert_user->rowCount() > 0) {
                                try {
                                    $last_usr_id = $bdd->lastInsertId();
                                    $pin_select = $bdd->prepare("SELECT secure_key FROM users WHERE id_user = ?");
                                    $pin_select->execute([$last_usr_id]);
                                    $secure_key_view = $pin_select->fetchColumn();
                                    $key_view_msg = "Un code pin de sécurité a été attribué à votre compte:" . " " . $secure_key_view;
                                    if (isset($_POST['close_btn'])) {
                                        header("Location: home.php");
                                        exit;
                                    }
                                } catch (PDOException $e) {
                                    echo "Erreur de selection du code pin" . $e->getMessage();
                                }
                            }
                        } catch (PDOException $e) {
                            echo "Erreur d'insertion de l'utilisateur" . $e->getMessage();
                        }
                    } else {
                        echo "Les mots de passe ne correspondent pas";
                    }
                }
            }
        } else {
            $error_msg = "Tous les champs doivent être remplis";
        }
    }
}
