<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
?>
<div id="hirlevel_urlapja">
    <div class="hirlevel">
        <i class="fa">&#xf090;</i>
    <form method="post" id="hirlevel">
        <label for="userName">FELHASZNÁLÓNÉV</label>
        <input type="text" id="userName" name="userName" required placeholder="Felhasználónév..">

        <label for="password">JELSZÓ</label>
        <input type="password" id="password" name="password" class="mainInput" required>

        <input type="submit" value="Bejelentkezés">
    </form>
    </div>
</div>
</body>
</html>