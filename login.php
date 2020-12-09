<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Capriola|Heebo:400,700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/0088858797.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="styles/main.css?v=<?php echo time(); ?>">
<title>Faceopedia</title>
</head>
<style>
	body{
		background-image: url('images/back.jpg');
		background-size:cover;
	}
</style>
<script type="text/javascript">
	function fun()
	{
		var a=document.myform.username.value;
		var b=document.myform.password.value;
		if(a=="root" && b=="password")
		{
			return true;
		}
		else{
			alert("Invalid Credentials!")
			return false;
		}
	}
</script>
<body>
<div class="main-content">
	<!-- <div class="wrapper"> -->
		<nav>
          	<div class="wrapper">
          		<a href="page.php"><img src="images/logo.png" alt="logo"></a>
			</div>
        </nav>
    <!-- </div> -->
</div>

<div class="hello">
			<div class="div">
				<form class="form" name="myform" method="post" action="couchpotatoeslogin.php">
					<p class="al">ADMIN LOGIN</p>
					<p class="field">USERNAME <span class="error">*</span></p>
					<input class="text" type="text" name="username" required>
					<p class="field">PASSWORD <span class="error">*</span></p>
					<input class="text" type="password" name="password" required>
					<div class="login">
						<button class="loginbut" type="submit" onclick="return fun()" formaction="upload.php">Login</button>
					</div>
				</form>
			</div>
	    </div>

</body>
</html>