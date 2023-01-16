<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
?>
<div id="hirlevel_urlapja">
    <div class="hirlevel">
        <i class="fa">&#xf2b5;</i>
        <p>hogyha már rendelkezik fiókkal kattintson a <a href="login.php">bejelentkezés</a> gombra.</p>
    <form method="post" id="hirlevel">
        <label for="userName">FELHASZNÁLÓNÉV</label>
        <input type="text" id="userName" name="userName" required placeholder="Felhasználónév..">

        <label for="email">EMAIL</label>
        <input type="email" id="email" name="email" class="mainInput" required placeholder="example@gmail.com">

        <label for="firstPassword">JELSZÓ</label>
        <input type="password" id="firstPassword" name="firstPassword" required>

        <label for="secondPassword">JELSZÓ ISMÉT</label>
        <input type="password" id="secondPassword" name="secondPassword" required>

        <input type="submit" value="Regisztráció">
    </form>
    </div>
</div>
</body>
</html>