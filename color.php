<?php

$favcolor="";

if(isset($_POST['submit'])){

	$favcolor=$_POST['color'];	

	switch ($favcolor) {
		case "red" :
			echo "Your choose is RED!";
			break;	
		case "blue" :
			echo "Your choose is BLUE!";
			break;
		case "green" :
			echo "Your choose is GREEN!";
			break;
		default :
			echo "Please choose your color!!!";
			break;
	}
}else if(isset($_POST['clear'])){
	$favcolor="white";
	echo "Your color have been reset!!!";
}
?>

<htmL>
<head><title>Choose Color</title>
	<style>
	
		table {padding:200px;}
	
	</style>
</head>
<body bgcolor="<?php echo $favcolor;?>">
	<center>
		<form action="" method="POST"><table size="50%">
			<tr>
				<th colspan="3">
					<h2>Please Choose Your Color</h2>
				</th>
			</tr>
			<tr>
				<th>Color</th>
				<th>:</th>
				<th>
					<select name="color" class="form-control">
						<option selected hidden>choose your color...</option>
						<option value="red">Red</option>
						<option value="blue">Blue</option>
						<option value="green">Green</option>
					</select>
				</th>
			</tr>
			<tr>
				<th cols="3">				
					<input type="submit" name="submit" value="Apply Color">
					<input type="submit" name="clear" value="Clear Color">
				</th>
			</tr>
		</table></form>
	</center>
</body>
</html>