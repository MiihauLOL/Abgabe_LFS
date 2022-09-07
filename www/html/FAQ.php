<?php
session_start();

?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/1c2c2462bf.js" crossorigin="anonymous"></script>

 <link rel="stylesheet" href="test.css">
<script src="js/script.js"></script>
<script src="js/create-config.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<title>Page Title</title>
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet"> 
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
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
<li><a href="/About-us.php">About Us</a></li>
<li><a href="/FAQ.php"><span>FAQ<span></a></li>
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
	



	
			<div class="content">
 <div class="accordion-menu">
        <ul>
            <li>
                <input type="checkbox" checked>
                <i class="arrow"></i>
                <h2><i class="fas fa-question"></i>My question is that i have a question to ask my question</h2>
                <p>This UI was written in HTML and CSS.
                </p>
            </li>
            <li>
                <input type="checkbox" checked>
                <i class="arrow"></i>
                <h2><i class="fas fa-question"></i>How it Works</h2>
                <p>Using the sibling and checked selectors, we can determine 
                    the styling of sibling elements based on the checked state
                    of the checkbox input element. 
                </p>
            </li>
            <li>
                <input type="checkbox" checked>
                <i class="arrow"></i>
                <h2><i class="fas fa-question"></i>Points of Interest</h2>
                <p>By making the open state default for when :checked isn't 
                    detected, we can make this system accessable for browsers 
                    that don't recognize :checked.
                </p>
            </li>
        </ul>
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
