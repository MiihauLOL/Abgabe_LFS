<?php
session_start();

?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css"  href="https://unidueaundm.xyz/style.css" />

<script src="js/script.js"></script>
<script src="js/create-config.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>

<div class="hero">
<nav>
<a href="index.php"><img src="Logo.png" width="100" 
     height="100">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="/Guide.php">Guide</a></li>
<li><a href="/downloads.php">Downloads</a></li>
<li><a href="/About-us.php"><span>About Us<span></a></li>
<li><a href="/FAQ.php">FAQ</a></li>
<?php
if(isset($_SESSION["email"])){
echo "<li><a href='/Logout.inc.php'>Logout</a></li>";
}
else 
{
echo "<li><a href='/Login.php'>Login</a></li>";
}
?>
</ul>
</nav>
<!----About section start---->
	<section class="about">
		<div class="main">
			<img src="Logo.png">
			<div class="about-text">
				<h2>About Us</h2>
				<h5>Students <span>& Friends</span></h5>
				<p>We are both students of the university Duisburg-Essen, working on our bachelor's degree in "Wirtschaftsinformatik". To achieve this we were issued to make a project together. If you are reading this, you are on the website that sprouted from this project. We setup a server to host a Git LFS Server and build this Website to provide access to our alternativ solution. We are very pleased for this opportunity and hope you like it!</p>
        <p style="text-align: center;">
				<a class="button" href="/Guide.php">Get Started!</a>
        </p>
			</div>
		</div>
	</section>

</div>

	<!-----service section start----------->
	<div class="service">
		<div class="title">
			<h2>Our Services</h2>
		</div>

		<div class="box">
			<div class="card">
				<i class="fas fa-bars"></i>
				<h5>Web Development</h5>
				<div class="pra">
					<p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-user"></i>
				<h5>Web Development</h5>
				<div class="pra">
					<p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-bell"></i>
				<h5>Web Development</h5>
				<div class="pra">
					<p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<!------Contact Me------>
	<div class="contact-me">
		<p>Let Me Get You A Beautiful Website.</p>
		<a class="button-two" href="#">Hire Me</a>
	</div>

	<!------footer start--------->
	<footer>
		<p>Artur and Michal</p>
		<p>For further support questions regarding LFS - please contact us via the links below: (links not in operation)</p>
		<div class="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-dribbble"></i></a>
		</div>
		<p class="end">CopyRight By Artur and Michal</p>
	</footer>




</body>
</html>
