<!DOCTYPE html>
<html>
<head>
	<title>Faceopedia - Add New</title>
</head>
<body>
	<form action="uploadimage.php" method="POST" enctype="multipart/form-data">
		<p>Name :</p>
		<input type="text" name="name">
		<p>Label :</p>
		<input type="text" name="label">
		<p>Date of Birth :</p>
		<input type="date" name="dob">
		<p>Profession :</p>
		<input type="text" name="prof">
		<p>Details :</p>
		<input type="text" name="detail">
		<p>Information :</p>
		<input type="text" name="info">
		<p>Add Link :</p>
		<input type="text" name="link">
		<p>Add Image :</p>
		<input type="file" name="file">
		<button type="submit" name="submit">UPLOAD</button>
	</form>
</body>
</html>