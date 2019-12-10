
<html>
<head>
	<style>
		.car{
			border: 2px solid black;
			position: relative;
			height: 100px;
			width: 350px;
		}
		.maker{
			font-weight: bold;
			font-family: sans-serif;
			font-size: 15px;
			margin-left: 200px;
			margin-top: 10px;
		}
		.model{
			position: absolute;
			left: 255px;
			top: 10px;
			font-weight: bold;
			font-family: sans-serif;
		}
		.year{
			position: absolute;
			left: 200px;
			top: 35px;
			font-family: sans-serif;
			font-weight: bold;
		}
		.price{
			position: absolute;
			left: 200px;
			top: 60px;
			font-family: sans-serif;
			font-weight: bold;
		}
	</style>
</head>
<body>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "task10";

	$conn = new mysqli($servername, $username, $password, $dbname);

//	$sql = "INSERT INTO cars(maker, model, price, year, image)
//					VALUES('Toyota', 'camry 50', 20000, 2011,
//						'https://toyota.com.my/ToyotaOfficialWebsite/media/ToyotaMedia/model/Camry%202.0/2016/colors_camry_grey.jpg')";

$sql = 'SELECT * from cars';
$result = $conn->query($sql);

if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
//		echo  $row["maker"] .  $row["model"]
//		 . $row["price"] .  $row["year"] . $row["image"];
		$car = "<div class='car'>
							<div class = 'maker'> $row[maker]</div>
							<div class = 'model'>$row[model]</div>
							<div class = 'year'>Year: $row[year]</div>
							<div class = 'price'>Price: $row[price]</div>
							<div class = 'image'><img
							src = 'https://toyota.com.my/ToyotaOfficialWebsite/media/ToyotaMedia/model/Camry%202.0/2016/colors_camry_grey.jpg'></div>
						</div>";
		echo $car;
	}
}
else {
    echo "Error creating table: " . $conn->error;
}
		$conn->close();
 ?>
</body>
</html>
