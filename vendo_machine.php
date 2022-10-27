<?php $arrDrinks = array('Coke','Sprite','Royal','Pepsi','Mountain Dew'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vendo Machine</title>
</head>
<body>
	<form method="post">
		<h1>Vendo Machine</h1>
		<fieldset name="fsProducts" style="width:40%">
			<legend>Products:</legend>

		<?php
			if(isset($arrDrinks)){
				foreach ($arrDrinks as $key => $value){
					if ($value == 'Coke' || $value == 'Pepsi')
						echo '<input type="checkbox" name="chkDrinks[]" id="chk'.$value.'" value="'.$value.'"><label for="chk'.$value.'">'. $value.'₱15</label><br>';
					else
						echo '<input type="checkbox" name="chkDrinks[]" id="chk'.$value.'" value="'.$value.'"><label for="chk'.$value.'">'. $value.'₱20</label><br>';
				}
			}
		?>
		</fieldset>
		<fieldset name="fsOptions" style="width:40%">
			<legend>Options:</legend>
			<label for="slctSize">Size</label>
			<select name="slctSize" id="slctSize">
				<option value="Regular">Regular</option>
				<option value="Up-Size">Up-Size(add ₱ 5)</option>
				<option value="Jumbo">Jumbo(add ₱ 10)</option>
			</select>
			<label for="numQuantity">Quantity</label>
			<input type="number" name="numQuantity" id="numQuantity" min="0" value="0">
			<input type="submit" name="btnCheckout" id="btnCheckout"value="Check Out">
		</fieldset>

	</form>
</body>
		<?php 
			$size = $_POST['slctSize'];
			$quantity = $_POST['numQuantity'];
			if (isset($_POST['btnCheckout']) && isset($_POST['chkDrinks'])) {
				$arrDrinks = $_POST['chkDrinks'];
				echo $quantity;
			}
		?>
		<ul>
			<?php foreach ($arrDrinks as $key => $value) 
				if ($value == "Coke" || $value == "Pepsi") {
					$amount = 15;
					if ($size == "Jumbo") {
						$amount += 10;
						if ($quantity > 1) {
							$totcoke = $amount * $quantity;
							echo '<li>'.$quantity.' pieces of '.$size.' '. $value.' amounting to '.$totcoke.'</li>';
						}
					}
				}

			?>
			
		</ul>
			<?php 
				if () {
					// code...
				}
				echo 'Total Number of Items:'.$quantity.'<br>';
				echo 'Total Amount:';
			 ?>
			
</html>