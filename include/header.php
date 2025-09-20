<?php
require "backend/components/__title.php";
require "backend/components/__link.php";
?>
<nav class="navbar">
    <div class="nav__banner">
        <img src="assets/images/logoMiniB.png" alt="Logo-OFR" class="nav__logo">
        <h2 class="nav__title"><?= $secondary_title ?></h2>
        <div class="log__sub--ctnr">
            <h3 class="log__title">Login<i class="fa-solid fa-caret-right" id="logarrow"></i></h3>
            <?php
            require "module/login_mdl.php";
            ?>
        </div>
    </div>
    <ul class="nav__item--container">
        <li class="nav__item">
            <div class="top_nav_angle--A top_bar"></div>
            <div class="top_nav_angle--B top_bar"></div>
            <?= $home_ofr ?>
            <div class="bottom_nav_angle--B bottom_bar"></div>
            <div class="bottom_nav_angle--A bottom_bar"></div>
        </li>
        <li class="nav__item">
            <div class="top_nav_angle--A top_bar"></div>
            <div class="top_nav_angle--B top_bar"></div>
            <?= $team_ofr ?>
            <div class="bottom_nav_angle--B bottom_bar"></div>
            <div class="bottom_nav_angle--A bottom_bar"></div>
        </li>
        <li class="nav__item">
            <div class="top_nav_angle--A top_bar"></div>
            <div class="top_nav_angle--B top_bar"></div>
            <?= $pve_ofr ?>
            <div class="bottom_nav_angle--B bottom_bar"></div>
            <div class="bottom_nav_angle--A bottom_bar"></div>
        </li>
        <li class="nav__item">
            <div class="top_nav_angle--A top_bar"></div>
            <div class="top_nav_angle--B top_bar"></div>
            <?= $apply_ofr ?>
            <div class="bottom_nav_angle--B bottom_bar"></div>
            <div class="bottom_nav_angle--A bottom_bar"></div>
        </li>
        <li class="nav__item">
            <div class="top_nav_angle--A top_bar"></div>
            <div class="top_nav_angle--B top_bar"></div>
            <?= $contact_ofr ?>
            <div class="bottom_nav_angle--B bottom_bar"></div>
            <div class="bottom_nav_angle--A bottom_bar"></div>
        </li>
        <li class="nav__item">
            <div class="top_nav_angle--A top_bar"></div>
            <div class="top_nav_angle--B top_bar"></div>
            <?= $sortie_ofr ?>
            <div class="bottom_nav_angle--B bottom_bar"></div>
            <div class="bottom_nav_angle--A bottom_bar"></div>
        </li>
    </ul>
</nav>