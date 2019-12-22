<!DOCTYPE html>
<html>
<head>
	<title>Create item</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
	Name: <input type="text" name="name"/><br>
	Description: <input type="text" name="description"/><br>
	Image: <input type="file" name="image" accept="image/*"/><br>
	<input type="submit" name="submit" value="Add"/>
</form>

</body>
</html>
