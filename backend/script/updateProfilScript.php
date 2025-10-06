<?php
require "backend/Ofr_connection.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if (isset($_POST['update_user'])) {
    if (!empty($_POST['usr_role']) && is_array($_POST['usr_role']) && !empty($_POST['usr_country']) && !empty($_POST['avt'])) {
      $role = $_POST['usr_role'];
      $change_role = implode(',', $role);
      $change_country = htmlspecialchars($_POST['usr_country']);
      $change_avatar = htmlspecialchars($_POST['avt']);
      $id_usr = $_SESSION['user_data']['user_id'];


      $avt_max_size = 2097152;
      $avt_exten_valid = ['png'];

      if ($change_avatar <= $avt_max_size) {
        $avt_exten_upload = strtolower(substr(strrchr($_POST['avt'], '.'), 1));

        if (in_array($avt_exten_upload, $avt_exten_valid)) {

          $route_tranfert = "assets/avatar/uploadavt" .  $_SESSION['user_data']['user_id'] . "." .  $avt_exten_upload;
          $transfer_avt = move_uploaded_file($_POST['avt'],  $route_tranfert);

          if ($transfer_avt) {

            try {
              $update_profil = $bdd->prepare("UPDATE users SET user_location = ?, user_avatar = ? , user_role = ? WHERE id_user = ?");
              $update_profil->execute([$change_country, $change_avatar, $change_role, $id_usr]);


              $_SESSION['user_data']['user_location'] = $change_country;
              $_SESSION['user_data']['user_avatar'] = $change_avatar;
              $_SESSION['user_data']['user_role'] = $change_role;

              header("LOcation: profile.php");
              exit;
            } catch (PDOException $e) {
              echo "Erreur de mise a jour du profil" . $e->getMessage();
            }
          }
        }
      }
    }
  }
}
