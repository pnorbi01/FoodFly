<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
require_once('config/db.php');


if(isset($_POST["search"]) && !empty($_POST["search"])) {
    $search = "%".$_POST["search"]."%";
    $sql = "SELECT * FROM meals where description like '$search' or price like '$search' or name like '$search'";
    $result = $conn->query($sql);

    ?>
    <div class="restaurants">
        <div class="restaurant-container">
        <?php
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="restaurant-box">
                        <div class="restaurant-image">
                            <span class="restaurant-title"><?= $row["name"] ?></span>
                            <img src="assets/img/<?= $row["image"] ?>" alt="pizza-rest" width="150px" height="150px" />
                        </div>           
                        <div class="delivery-info" style="width: 150px; text-align: center;">
                            <span><?= $row["description"] ?></span>
                        </div>
                    </div>
                <?php
                }
            }
        ?>
        </div>
    </div>
    <?php
    require_once('assets/php/footer.php');
    ?>
    </body>
    </html>
    <?php
}
else {
?>
    <h1>No access</h1>
    </body>
    </html>
<?php
}