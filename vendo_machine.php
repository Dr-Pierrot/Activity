
<!-- Declared 2 arrays for drinks and sized -->
<?php $arrDrinks = array('Coke' => 15,'Sprite'=>20,'Royal'=>20,'Pepsi'=>15,'Mountain Dew' =>20); ?>
<?php $arrSize = array('Regular' => 0, 'Up-Size'=>5, 'Jumbo'=>10); ?>
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
		<!-- Automated checkbox maker -->
		<?php foreach ($arrDrinks as $key => $value)
				echo '<input type="checkbox" name="chkDrinks[]" id="chk'.$key.'" value="'.$key.'"><label for="chk'.$key.'">'. $key.' (₱'.$value.')</label><br>';
		?>
		</fieldset>
		<fieldset name="fsOptions" style="width:40%">
			<legend>Options:</legend>
			<label for="slctSize">Size</label>
			<select name="slctSize" id="slctSize">
				<!-- Automated list of size maker -->
				<?php foreach ($arrSize as $key => $value)
					echo '<option value="'.$key.'">'. $key .' (add ₱'.$value .')</option>';
				?>
			</select>
			<label for="numQuantity">Quantity</label>
			<input type="number" name="numQuantity" id="numQuantity" min="0" value="0">
			<button type="submit" name="btncheckout">Check Out</button>
		</fieldset>
	</form>
	<?php 
		

		// if the button have the value then proceed
		if (isset($_POST['btncheckout'])) {
			echo '<hr>';
			// if the checkbox and number input have values then proceed
			if (isset($_POST['chkDrinks']) && isset($_POST['numQuantity']) > 0) { 
				// this will put the insert value to $quantity from number input
				$quantity = $_POST['numQuantity'];
				// insert value to $size from select
				$size = $_POST['slctSize'];
				$items = $_POST['chkDrinks'];
				// it will multiply the counted checked items from $items to the $quantity
				$totalItems = count($items) * $quantity;
				// this will contains the total amount calculated below
				$totalAmount = 0;
				?>
				<h3>Purchase Summary:</h3>
				<ul>
					<?php 
						// this will get the key from arrDrinks
						foreach ($items as $itemname) {
							// the itemname will get the value from arrDrink as a key and to the similar arrSize and then multipluy to the quantity
							$drinksAmount = ($arrDrinks[$itemname] + $arrSize[$size]) * $quantity;
							// this will compute the total amount and send to the variable totalAmount
  							$totalAmount += $drinksAmount;
  							// if the quantity of the item is more than 1 then the piece will be plural
  							if ($quantity > 1) {
  								echo '<li>'.$quantity.' pieces of '.$size. $itemname.' amounting to ₱'.$drinksAmount .'.</li>';
  							}else{
  								echo '<li>'.$quantity.' piece of '.$size.' '.$itemname.' amounting to ₱'.$drinksAmount .'.</li>';
  							}

						}
						
					 ?>
				</ul>
				<?php  
					echo 'Total Purchased Items: '.$totalItems.'<br>';
					echo 'Total Purchased Amount: '.$totalAmount;
				?>
		<?php }else{
					echo "No Items has been selected. Try Again!";		
		}
		}
		?>
 
</body>	
</html>