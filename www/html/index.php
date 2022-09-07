<?php
session_start();

?>

<!DOCTYPE html>
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
<li><a href="index.php"><span>Home<span></a></li>
<li><a href="/Guide.php">Guide</a></li>
<li><a href="/downloads.php">Downloads</a></li>
<li><a href="/About-us.php">About Us</a></li>
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
</div>

</div>
<div class="content">
<h1>Welcome <span>User!</span></h1>
			<h4>This is a project to provide access to a Git Large File Storage </br> Server for your GitHub as an alternativ to the GitHub Datapack</h4>
			
			</div>
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
