<?php
$conn = mysqli_connect("localhost", "root", "");
$sql2="USE faces";
if(!mysqli_query($conn,$sql2))
{
	include 'createtable.php';
	$conn = mysqli_connect("localhost", "root", "");
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}
}
?>
<style>
	body{
		background-image: url('images/back.jpg');
		background-size:cover;
	}
</style>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Capriola|Heebo:400,700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/0088858797.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="styles/main.css?v=<?php echo time(); ?>">
<title>Faceopedia - Search</title>
</head>
<body background="images/back.jpg" height="100" width="100">
<div class="main-content">
	<!-- <div class="wrapper"> -->
		<nav>
          	<div class="wrapper">
          		<a href="page.php"><img src="images/logo.png" alt="logo"></a>
			</div>
        </nav>
    <!-- </div> -->
</div>
<!-- <header>
	<div class="header-img"><img src="images/backsearch.jpg" alt=""></div>
</header> -->
	<!-- <div class="box"> -->
	<form action="search.php" method="POST">
		<!-- <div class="search"> -->
		<input class="search-input" type="text" name="search" placeholder="Search..." required>
	  	<button class="search-btn" type="submit" name="submit-search">Go</button>
	  	<!-- </div> -->
  	</form>
  	<!-- </div> -->

<div class="main-content">
<div class="wrapper">

		<!-- <div class="result">
	  		<img src="images/startsearch.png" id="iii" alt="">
	  	</div> -->
		<?php
		if(isset($_POST['submit-search']))
		{
			$search=mysqli_real_escape_string($conn, $_POST['search']);
		$sql=mysqli_query($conn,"SELECT * FROM celebrities WHERE name LIKE '%$search%' OR profession LIKE '%$search%'");
		if(mysqli_num_rows($sql)>0)
		{
			?>
			<div class="display">
<section class="total-list">
	<div class="celebs-list">
		<?php
		while($row=mysqli_fetch_array($sql))
		{
		?>
			<a href="<?php echo $row['link']; ?>">
				<div class="celeb-card">
				<img src=" <?php echo $row['image']; ?> " alt="" class="card-thumbnail">
				<div class="overlay">
					<img src="images/overlay.png" alt="">
					<div class="detail">
						<p class="title"><?php echo $row['name']; ?></p>
						<div class="schedule">
							<div class="entry">
								<p class="value">Date of Birth</p>
								<p class="label"><?php echo $row['dob']; ?></p>
							</div>
							<div class="entry">
								<p class="value">Profession</p>
								<p class="label"><?php echo $row['profession']; ?></p>
							</div>
						</div>
						<br>
						<p class="more-details"><?php echo $row['detail']; ?></p>
					</div>
				</div>
			</div>
		</a>
		<?php 
		}
		?>

		</div>
		</section>
		</div>
<?php
	}
	else{ ?>
	  	<div class="result">
	  		<img src="images/no_result.gif" alt="">
	  	</div>
	<?php 
		}
		}
		?>

</div>
</div>

</body>
</html>