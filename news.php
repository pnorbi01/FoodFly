<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
?>
<div id="ffhirek">
</div>
<div id="hirlevel_urlapja">
    <div class="hirlevel">
        <i class="fa">&#xf003;</i>
        <p>iratkozz fel hírlevelünkre, hogy ne maradj le heti akcióinkról.</p>
    <form method="post" id="hirlevel">
        <label for="email">EMAIL</label>
        <input type="email" id="email" name="email" class="mainInput" required placeholder="example@gmail.com">

        <input type="submit" value="Feliratkozás">
    </form>
    </div>
</div>
<?php
require_once('assets/php/footer.php');
?>
</body>
</html>