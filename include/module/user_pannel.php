<div class="user__option--ctnr">
    <h3 class="user__name--item">Bonjour <?= $_SESSION['user_data']['user_name'] ?><span class="user__small--light"></span></h3>
    <ul class="option__sub--ctnr">
        <li class="user__option--item"><i class="fa-regular fa-calendar-days"></i> <a href="#">Events</a></li>
        <li class="user__option--item"><i class="fa-solid fa-house"></i> <a href="#">Forum</a></li>
        <li class="user__option--item"><i class="fa-solid fa-comments"></i> <a href="#">Chat</a></li>
        <li class="user__option--item"><i class="fa-brands fa-discord"></i> <a href="#">Discord</a></li>
        <li class="user__option--item"><i class="fa-solid fa-gear"></i> <a href="../../profile.php">paramètres</a></li>
        <li class="user__option--item"><i class="fa-solid fa-power-off"></i> <a href="../../backend/components/logout.php">Déconnexion</a></li>
    </ul>
</div>