<!DOCTYPE html>
<?php include 'conexiune.php'; ?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			$tabel="select name,addres,email from persoane";
			$result=mysqli_query($conexiune,$tabel) or die (mysqli_error($conexiune));
			while ($row = mysqli_fetch_array($result))  {
				echo "<table border='1px'>";
				echo "<tr><td>Name: </td><td>".$row['name']."</td></tr>";
				echo "<tr><td>Addres: </td><td>".$row['addres']."</td></tr>";
				echo "<tr><td>Email: </td><td>".$row['email']."</td></tr>";
				echo "</table>";
			}
		?>
	</body>
</html>