<?php
include('functions.php');
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Object Oriented PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper">
		
		<section class="header">
			<h3>Object Oriented php</h3>
			
		</section> 
		<section>

		<div class="body">
			<form action="" method="post">
				
			<?php
				 
				if (isset($_POST['submit'])) {
					$num1=$_POST['num1'];
					$num2=$_POST['num2'];
					if (empty($num1) or empty($num2)) {
						echo "<span style='color:red'>Fiend Must not be empty</span>";
					}else{

						echo "First number is: " .$num1. "Second number is: ".$num2;
						$cal=new calculate();
						$cal->add($num1, $num2);
						$cal->sub($num1, $num2);
						$cal->mul($num1, $num2);
						$cal->div($num1, $num2);
					}
				}
			?>
				<table>
					<tr>
						<td><input type="number" name="num1"></td>
					</tr>
					<tr>
						<td><input type="number" name="num2"></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="submit"></td>
					</tr>
				</table>
			</form>



		</div>	
		</section>
		<section class="footer">
			
		<section class="footer">
			<h3>www.azad.com</h3>
	
		</section> 



	</div>
</body>
</html>