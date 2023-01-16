<?php 
require_once('assets/php/header.php');
require_once('assets/php/nav.php');
require_once('config/db.php');
?>
<div class="restaurants">
	<p>Válassz éttermeink közül</p>
	<div class="restaurant-container">
	<?php
		$sql = "SELECT * FROM restaurants";
		$result = $conn->query($sql);
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				?>
				<div class="restaurant-box">
					<a href="menus.php?restaurantId=<?= $row["id"] ?>">
						<div class="restaurant-image">
							<span class="restaurant-title"><?= $row["name"] ?></span>
							<img src="assets/img/<?= $row["image"] ?>" alt="pizza-rest" width="150px" height="150px" />
						</div>
					</a>
					<div class="delivery-info">
						<span>
							<i style="font-size:15px" class="fa">&#xf206;</i><?= $row["deliveryFee"] == 0 ? "Ingyenes, ".$row["deliveryTime"] : $row["deliveryFee"]." din, ".$row["deliveryTime"] ?>
						</span>
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
