<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
require_once('config/db.php');

$restaurantId = $_GET["restaurantId"];
$menuId = $_GET["menuId"];
$sql = "SELECT * FROM menus where id = ".$menuId;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<div id="hamburgereink">
    <span><?= $row["name"] ?></span>
</div>
<div class="restaurants">
	<div class="restaurant-container">
	<?php
		$sql = "SELECT meals.id, meals.name, meals.description, meals.image from meals, menus, menu_meal where menus.id = ".$menuId." and menu_meal.menu_id = menus.id and meals.id = menu_meal.meal_id";
		$result = $conn->query($sql);
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				?>
				<div class="restaurant-box">
					<a href="order.php?restaurantId=<?= $restaurantId ?>&mealId=<?= $row["id"] ?>">
						<div class="restaurant-image">
							<span class="restaurant-title"><?= $row["name"] ?></span>
							<img src="assets/img/<?= $row["image"] ?>" alt="pizza-rest" width="150px" height="150px" />
						</div>
					</a>
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