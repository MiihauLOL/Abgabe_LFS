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
<li><a href="/Guide.php"><span>Guide<span></a></li>
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
 

	<!-----service section start----------->
	<div class="service">
		<div class="title">
			<h2>Our Guide</h2>
		</div>

		<div class="box">
			<div class="card">
				<h5><span>Step 1.<span></h5>
        
				<h5>Before we Start</h5>
				<div class="pra">
					<p>Make sure you have your GitHub set up remotely and localy (install Git) on your maschine.</p>

					<p style="text-align: center;">
						<a class="button" href="https://letmegooglethat.com/?q=How+to+setup+a+GitHub+repository">Help?</a>
					</p>
				</div>
			</div>

			<div class="card">
				<h5><span>Step 2.<span></h5>
        
				<h5>Installing Git LFS</h5>
				<div class="pra">
					<p>Go to the GitHub site linked below to download the GitLFS extention and install the extention on your maschien.</p>
           <p style="text-align: center;">
						<a class="button" href="https://git-lfs.github.com/">git-lfs.github.com</a>
					</p>
         <p>Use the "Download" tap on the top right if you dont use Windows.</p>
				</div>
			</div>


			<div class="card">
				<h5><span>Step 3.<span></h5>
        
				<h5>Get Git LFS in your Repository</h5>
				<div class="pra">
						<p>Go the the directory of your repository on your local maschine and open the Bash by rightclicking. now enter the following:</p>
           <p><span>git lfs install<span></p>
           
			</div>
		</div>
	</div>
 
 
 <div class="service2">
		
		<div class="box">
			<div class="card">
				<h5><span>Step 4.<span></h5>
        
				<h5>Set up .gitattributes</h5>
				<div class="pra">
					<p>We are still in the Bash and enter the following:</p>
          <p><span>git lfs track "*.(DataType)"<span></p>
           <p>The (DataType) should be the type of file you would like to be saved in LFS. Repeat this for all the datatypes you would like to trak.</p>
					
				</div>
			</div>

			<div class="card">
				<h5><span>Step 5.<span></h5>
        
				<h5>Set up .lfsconfig</h5>
				<div class="pra">
					<p>Go to our site linked below to download your personal LFS config to get access to our service.</p>
           <p style="text-align: center;">
						<a class="button" href="/downloads.php">Get your LFS confic</a>
					</p>
         <p>After downloading, drag the config to the root of your local Repository AND rename the file to <span>.lfsconfig</span></p>
				</div>
			</div>

			<div class="card">
				<h5><span>Step 6.<span></h5>
        
				<h5>Get Started</h5>
				<div class="pra">
						<p>Before pushing any large files, make sure to push the the attributes and config files! You have now all the parts in place to start enjoying our service!<br> If you need further help, please go to the following site:</p>           
					<p style="text-align: center;">
						<a class="button" href="https://stackoverflow.com/">Tech Support</a>
					</p>
				</div>
			</div>
		</div>
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
