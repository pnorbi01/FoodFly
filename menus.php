<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
require_once('config/db.php');
$restaurantId = $_GET["restaurantId"];
?>
<div class="restaurants">
	<p>Válassz a kategóriáink közül</p>
	<div class="restaurant-container">
	<?php
		$sql = "SELECT menus.id, menus.name, menus.image FROM restaurants, menus, restaurant_menu WHERE restaurants.id = ".$restaurantId." AND restaurants.id = restaurant_menu.restaurant_id AND menus.id = restaurant_menu.menu_id";
		$result = $conn->query($sql);
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				?>
				<div class="restaurant-box">
					<a href="meals.php?restaurantId=<?= $restaurantId ?>&menuId=<?= $row["id"] ?>">
						<div class="restaurant-image">
							<span class="restaurant-title"><?= $row["name"] ?></span>
							<img src="assets/img/<?= $row["image"] ?>" alt="pizza-rest" width="150px" height="150px" />
						</div>
					</a>
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