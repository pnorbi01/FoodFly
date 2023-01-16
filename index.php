<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
require_once('config/db.php');
?>
<div id="container">
    <div class="content">
        <h1>FoodFly.</h1>
        <form method="post" action="search.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search" style="font-size: 15px"></i></button>
        </form>
    </div>
</div>
<div id="hirek_main">
    <div class="hirek_content">
        <h1>HÍREK</h1>
        <span>Íratkozz fel hírlevelünkre, hogy az elsők közt legyél, akik értesülnek
        legújabb akcióinkról és híreinkről. Az alábbi gombon keresztül feliratkozhatsz, NE HABOZZ!</span><br>
        <a href="news.php"><button>FELIRATKOZÁS</button></a>
    </div>
</div>
<div id="rendeles_main">
    <div class="rendeles_content">
        <span>Nálunk biztosan megtalálod, amire szükséged van.<br>Több mint 50 különféle menük, burgerek, pizzák, saláták és sok más.</span><br>
        <a href="restaurants.php"><button>RENDELJ MOST</button></a>
    </div>
</div>
<div id="rolunk_main">
    <div class="rolunk_content">
        <h1>RÓLUNK</h1>
        <span><span class="ff"><i class="fa fa-plane" style="font-size:24px"></i>FoodFly.</span> - több mint ételkiszállítás.</span>
        <span>Az alábbi gombra kattintva megtudhatsz többet a cégünkről és sok minden másról.</span><br>
        <a href="about.php"><button>TUDJ MEG TÖBBET</button></a>
    </div>
</div>
<div id="kapcsolat_main">
    <div class="kapcsolat_content">
        <h1>KAPCSOLAT</h1>
        <span>Lépj velünk kapcsolatba bátran, ügyfeleink rövid időn belül felveszik Önnel a kapcsolatot.</span>
        <span>Legyen szó hibás kiszállításról, rendelésről, bármiről.</span>
        <span>Tedd meg Te az első lépést, hogy megoldjuk a problémádat.</span><br>
        <a href="contact.php"><button>KAPCSOLAT</button></a>
    </div>
</div>
<?php
require_once('assets/php/footer.php');
?>
</body>
</html>