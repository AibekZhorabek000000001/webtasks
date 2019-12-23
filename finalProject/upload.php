<?php
if (isset($_POST['submit'])) {
	$name = '';
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
	}
	$description = '';
	if (isset($_POST['description'])) {
		$description = $_POST['description'];
	}
	$check = getimagesize($_FILES['image']['tmp_name']);
	if ($check !== false) {
		$image = $_FILES['image']['tmp_name'];
		$imgContent = addslashes(file_get_contents($image));

		$db = new mysqli('localhost', 'root', '', 'for project');

		if ($db -> connect_error) {
			die('Connection failed: '. $db->connect_error);
		}

		$insert = $db->query("insert into products (name, product_desc, img_src) values ('$name','$description','$imgContent')");
		if ($insert) {
			echo "File uploaded successfully";
		} else {
			echo "file upload failed";
		}
	} else {
		echo "please select an image file to upload.";
	}
}
if (isset($_GET['delete_button'])) {
	$mysqli = mysqli_connect("localhost", "root", "", "for project");
	$deleteIt = $_GET['delete'];
	$delete_sql="DELETE FROM products WHERE product_desc='$deleteIt'";
	$delete_res = mysqli_query($mysqli, $delete_sql) or die(mysqli_error($mysqli)) ;
	echo "Продукт успешно удален";

}
