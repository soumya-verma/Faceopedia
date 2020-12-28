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
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Capriola|Heebo:400,700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/0088858797.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="styles/main.css?v=<?php echo time(); ?>">
<title>Faceopedia</title>
</head>
<body>
<div class="main-content">
	<!-- <div class="wrapper"> -->
		<nav>
          	<div class="wrapper">
          		<a href="page.php"><img src="images/logo.png" alt="logo"></a>
				<div class="nav-links">
		            <a href="search.php">Search</a>
		            <a href="login.php">Add New</a>
		            <a href="upload1.php"><button class="button">Upload</button></a>
	            </div>
			</div>
        </nav>
    <!-- </div> -->
</div>
<header>
	<div class="header-img"><img src="images/back.jpg" alt=""></div>
	<div class="header-title"><h1>Spot your Favorite Celebrity</h1>
		<!-- <div class="sig-tag">
			<div class="sig-line"></div>Something Something Bleh Bleh
		</div> -->
		<a href="#celebs" class="scroll-btn"><span></span>Scroll</a>
	</div>
</header><br>
<div class="main-content">
<div class="wrapper">
<div class="heading"><h2>How it works?</h2></div>
<div class="how-it-works">
        <div class="use-info">
            <h4><b>1. Upload a photo</b></h4>
            <img class="img-responsive" src="images/photo1.png">
            <p>
                There should be only one person in the photo. <br />
                <b>Recommendations:</b> The face should be clearly visible, it’s better to use frontal photos.
                Face recognition accuracy depends on the resolution and quality of a face image.
            </p>
        </div>
        <div class="use-info">
            <h4><b>2. The system detects the face</b></h4>
            <img class="img-responsive" src="images/photo2.png">
            <p>
                The system detects the face and creates a facial pattern.
                System facial point detection can locate the key components of faces, including eyebrows, eyes, nose, mouth and position.
            </p>
        </div>
        <div class="use-info">
            <h4><b>3. Enjoy the result!</b></h4>
            <img class="img-responsive" src="images/photo3.png">
            <p>
                The Neural Network compares the person with celebrity faces and suggests the most similar one.
            </p>
        </div>
    </div>
<section id="celebs" class="total-list">
	<div class="sep-line"></div>
	<p class="section-title">CELEBRITIES WE HAVE</p>
	<div class="celebs-list">
		<?php
		$sql=mysqli_query($conn,"SELECT * FROM celebrities");
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
		<?php }
		?>
	</div>
</section>
</div>
</div><br>
<footer class="footer-box">
    <section class="footer-img">
        <h1>ABOUT US</h1>
        <a href="https://www.linkedin.com/in/soumya-verma-3a61151b3/"><img src="images/soumya.jpg" class="linkedin-img"></a>
        <a href="https://www.linkedin.com/in/shubhang-agrawal-38a244187/"><img src="images/shubhang.jpg" class="github-img"></a>
        <a href="https://www.linkedin.com/in/sanskriti-maheshwari-544639191/"><img src="images/sanskriti.jpg" class="twitter-img"></a>
    </section>
    <section class="footer-box-contact">
        <h4>Soumya Verma</h4>
        <h4>Shubhang Agrawal</h4>
        <h4>Sanskriti Maheshwari</h4>
    </section>
<footer>

</body>
</html>
