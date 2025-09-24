<?php
require_once "backend/Ofr_connection.php";
if (isset($_GET['id_user'])) {
    $current_id = $_GET['id_user'];
    try {
        $user_current_data = $bdd->prepare("SELECT * FROM user WHERE id_user = ? ");
        $user_current_data->execute([$current_id]);

        if ($user_current_data->rowCount() > 0) {
            $user_all_data = $user_current_data->fetch();
            $user__data_name = $user_all_data['user_name'];
            $user__data_mail = $user_all_data['user_mail'];
            $user__data_gender = $user_all_data['user_gender'];
            $user__data_location = $user_all_data['user_location'];
            $user__data_avatar = $user_all_data['user_avatar'];
            $user__data_role = $user_all_data['user_role'];
        }
    } catch (PDOException $e) {
        echo "Erreur de récupération des données" . $e->getMessage();
    }
}
