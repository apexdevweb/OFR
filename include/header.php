<?php
require "backend/components/__link.php";
?>
<nav>
    <ul>
        <li><?= $home_ofr ?></li>
        <li><?= $pve_ofr ?></li>
        <li><?= $team_ofr ?></li>
        <li><?= $apply_ofr ?></li>
        <li><?= $contact_ofr ?></li>
        <li><?= $exit_ofr ?></li>
    </ul>
    <?php
    require "module/login_mdl.php";
    ?>
</nav>