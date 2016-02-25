<?php
if (empty($_POST['submit'])) {

?>
<form action="zad1.php" method="post">
	<p>Vegetarian menu</p>
	<input type="radio" name="menu" value="veg">
	<p>Meat</p>
	<input type="radio" name="menu" value="meat">
	<p>
	<input type="submit" name="submit" value="submit">
	</p>
</form>

<?php
} else {
$veg = array('veg1', 'veg2', 'veg3', 'veg4', 'veg5');
$meat = array('meat1', 'meat2', 'meat3', 'meat4', 'meat5');

	$menu = $_POST['menu'];
	if ($menu === 'veg') {
		echo "<ul>";
		foreach ($veg as $value) {
			echo '<li>'.$value.'</li>';
		}
		echo "</ul>";
	} else {
		echo "<ul>";
		foreach ($meat as $value) {
			echo '<li>'.$value.'</li>';
		}
		echo "</ul>";
	}
}

?>

