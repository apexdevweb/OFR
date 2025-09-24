<?php
require_once "backend/components/init.php";
require_once "backend/Ofr_connection.php";
require "backend/class/user.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['usr_login_btn'])) {
        if (!empty($_POST['usr_log_name']) && !empty($_POST['usr_log_pass']) && !empty($_POST['cd_log_pin'])) {

            $usr_login_pseudo = htmlspecialchars(strip_tags($_POST['usr_log_name']));
            $usr_login_pass = htmlspecialchars($_POST['usr_log_pass']);
            $usr_login_pin = htmlspecialchars(strip_tags($_POST['cd_log_pin']));
            try {
                $login_usr_verif = $bdd->prepare("SELECT * FROM users WHERE user_name = ?");
                $login_usr_verif->execute([$usr_login_pseudo]);
            } catch (PDOException $e) {
                echo "Erreur de vérification de l'utilisateur" . $e->getMessage();
            }
            if ($login_usr_verif->rowCount() > 0) {
                $usr_data_info = $login_usr_verif->fetch();
                $usr_pass_db = $usr_data_info['user_password'];
                $usr_pin_info =  $usr_data_info['secure_key'];

                if (password_verify($usr_login_pass, $usr_pass_db)) {
                    if ((string)$usr_login_pin ===  (string)$usr_pin_info) {
                        $activation_user = new User(
                            $usr_data_info['id_user'],
                            $usr_data_info['user_name'],
                            $usr_data_info['user_gender'],
                            $usr_data_info['user_mail'],
                            $usr_data_info['user_location'],
                            $usr_data_info['user_avatar'],
                            $usr_data_info['user_role']
                        );

                        $_SESSION['user_auth'] = true;
                        $_SESSION['user_data'] = [
                            "user_id" => $activation_user->getUserId(),
                            "user_name" => $activation_user->getUserName(),
                            "user_gender" => $activation_user->getUserGender(),
                            "user_mail" => $activation_user->getUserMail(),
                            "user_location" => $activation_user->getUserLocation(),
                            "user_avatar" => $activation_user->getUserAvatar(),
                            "user_role" => $activation_user->getUserRole(),
                        ];
                        header("Location: home.php");
                        exit;
                    } else {
                        echo "Code pin incorrecte";
                    }
                } else {
                    echo "Mot de passe incorrecte";
                }
            } else {
                echo "Aucun utilisateur à été trouver";
            }
        }
    }
}
