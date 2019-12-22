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
