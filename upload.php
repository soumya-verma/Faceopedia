<!DOCTYPE html>
<html>
<head>
	<title>Faceopedia - Add New</title>
</head>
<body>
	<div style="padding-top: 3%; padding-left: 10%;">
	<form action="uploadimage.php" method="POST" enctype="multipart/form-data">
		<p>Name :</p>
		<input type="text" name="name" size="42">
		<p>Label :</p>
		<input type="text" name="label" size="42">
		<p>Date of Birth :</p>
		<input type="date" name="dob">
		<p>Profession :</p>
		<input type="text" name="prof" size="42">
		<p>Details :</p>
		<input type="text" name="detail" style="height:100px;width:300px;">
		<p>Add Link :</p>
		<input type="text" name="link" size="42">
		<p>Add Image :</p>
		<input type="file" name="file">
		<button type="submit" name="submit">UPLOAD</button>
	</form>
</div>
</body>
</html>